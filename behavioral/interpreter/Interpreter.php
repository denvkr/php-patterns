<?php

namespace DesignPatterns\Behavioral\Interpreter;

include_once 'Parser.php';
include_once 'Extension.php';

class Interpreter
{
    /**
     * @var Extension[]
     */
    protected $extensions = [];

    /**
     * @var array
     */
    protected $variables = [];

    /**
     * @var array
     */
    protected $errors = [];

    /**
     * @var Parser
     */
    protected $parser = null;

    /**
     * @param array $params
     */
    function __construct(array $params = array())
    {
        if (isset($params['extensions'])) {
            foreach ($params['extensions'] as $extension) {
                $this->addExtension(
                    $extension['synonyms'],
                    $extension['object']
                );
            }
        }
    }

    /**
     * @param Parser $parser
     */
    public function setParser(Parser $parser)
    {
        $this->parser = $parser;
    }

    /**
     * @return Parser
     */
    public function getParser()
    {
        return $this->parser;
    }

    /**
     * @param array|string $synonyms
     * @param Extension $extension
     */
    public function addExtension($synonyms, Extension $extension)
    {
        if (! is_array($synonyms)) {
            $synonyms = array($synonyms);
        }

        foreach ($synonyms as $synonym)
        {
            $extension->init($this);
            $this->extensions[$synonym] = $extension;
        }
    }

    public function getExtension($name)
    {
        if (! isset($this->extensions[$name])) {
            throw new \Exception("Function '{$name}' not found");
        }

        return $this->extensions[$name];
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function setVariable($name, $value)
    {
        $this->variables[$name] = $value;
    }

    /**
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function getVariable($name, $default = null)
    {
        if (isset($this->variables[$name])) {
            $default = $this->variables[$name];
        }
        return $default;
    }

    /**
     * @return array
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * @param array $variables
     */
    public function setVariables($variables)
    {
        $this->variables = $variables;
    }

    /**
     * Clear errors and variables
     */
    public function clear()
    {
        $this->variables = [];
        $this->errors = [];
    }

    /**
     * @param Parser $parser
     * @return bool|void
     */
    public function execute(Parser $parser)
    {
        $this->setParser($parser);
        $tree = $this->getParser()->getTree();

        $isComplete = true;

        try {
            foreach ($tree as $entity) {
                $this->calculation($entity);
            }
        }
        catch(\Exception $e) {
            $this->errors[] = $e->getMessage();
            $isComplete = false;
        }

        return $isComplete;
    }

    public function calculation($entity)
    {
        if (is_string($entity) && $this->getParser()->isToken($entity)) {
            $entity = $this->getParser()->getEntityByToken($entity);
        }

        if (is_array($entity)) {
            switch ($entity['type']) {
                case Parser::TYPE_FUNCTION:
                    return $this->calculationFunction($entity);

                case Parser::TYPE_VARIABLE:
                    return $this->getVariable($entity['name']);

                case Parser::TYPE_SCALAR:
                    return $entity['value'];
            }
        }
        else {
            return $entity;
        }
    }

    /**
     * @param array
     * @return mixed
     */
    public function calculationFunction($function)
    {
        $extensionName = strtolower($function['name']);
        $extension = $this->getExtension($extensionName);
        $arguments = $extension->calculationArguments($function['arguments'], $this);
//        if (! $arguments) {
//            $arguments = $this->calculationArguments($function['arguments']);
//        }
        return $extension->execute($arguments, $this);
    }

    /**
     * @param array $arguments
     * @return array
     */
    public function calculationArguments($arguments)
    {
        $result = [];
        foreach ($arguments as $key => $argument) {
            $result[$key] = $this->calculation($argument);
        }
        return $result;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
}