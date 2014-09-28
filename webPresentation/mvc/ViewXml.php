<?php

namespace DesignPatterns\WebPresentation\MVC;

include_once 'View.php';

class ViewXml
    extends View
{
    public function content()
    {
        $xml = new \SimpleXMLElement('<document/>');
        foreach ($this->data as $key => $value) {
            $xml->addChild($key, $value);
        }
        return $xml->asXML();
    }

    public function add($name, $element, $data)
    {
        $child = $element->addChild($name);
        foreach ($data as $key => $value) {
            if (is_array($value) || is_object($value)) {
                $child = $child->addChild($key);
                $this->add($key, $child, $value);
            }
            else {
                $element->addChild($key,$value);
            }
        }
    }

    public function __toString()
    {
        return (string)$this->content();
    }
}