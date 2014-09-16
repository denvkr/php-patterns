<?php

namespace DesignPatterns\Structural\FrontController;

//include_once 'IndexController.php';
//include_once 'ErrorController.php';

class FrontController
{
    const DEFAULT_ACTION = 'index';

    const DEFAULT_CONTROLLER = 'index';

    const ERROR_CONTROLLER = 'error';

    /**
     * @var string
     */
    private $action = self::DEFAULT_ACTION;

    /**
     * @var string
     */
    private $controller = self::DEFAULT_CONTROLLER;

    /**
     * @param $request
     */
    public function run($uri = '', $request = [])
    {
        $route = explode('/', $uri);

        if (isset($route[0]) && !empty($route[0])) {
            $this->controller = $route[0];
        }

        if (isset($route[1]) && !empty($route[1])) {
            $this->action = $route[1];
        }

        try {
            return $this->execute($request);
        }
        catch (\Exception $e){
            $this->controller = self::ERROR_CONTROLLER;
            $this->action = self::DEFAULT_ACTION;
            return $this->execute(['exception' => $e]);
        }
    }

    protected function execute($request)
    {
        $controllerName = ucfirst($this->controller) . 'Controller';
        $filename = $controllerName . '.php';
        $controllerName = __NAMESPACE__ .'\\' .$controllerName;
        if (! file_exists($filename)) {
            throw new \Exception("File '{$filename}' not found");
        }

        include_once $filename;
        $controller = new $controllerName();

        $actionName = $this->action . 'Action';
        if (! method_exists($controller, $actionName)) {
            throw new \Exception("Action '{$this->action}' not found");
        }

        return $controller->$actionName($request);
    }
}