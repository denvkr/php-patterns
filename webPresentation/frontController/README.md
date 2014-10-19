#Front Controller
A controller that handles all requests

```php
$request = [
    'a' => 4,
    'b' => 2,
];

$frontController = new FrontController();
$respond = $frontController->run();
var_dump($respond);
// array(1) { 'content' => string(22) "Hello Front Controller"}

$respond = $frontController->run('unknown');
var_dump($respond);
// array(1) {'err' =>  string(38) "File 'UnknownController.php' not found" }

$respond = $frontController->run('arithmetic/unknown');
var_dump($respond);
// array(1) {'err' => string(26) "Action 'unknown' not found" }

$respond = $frontController->run('arithmetic/addition', $request);
var_dump($respond);
//array(1) { 'result' => int(6) }

$respond = $frontController->run('arithmetic/subtraction', $request);
var_dump($respond);
// array(1) {'result' => int(2) }
```

##Example
* [Front Controller from Zend Framework](https://github.com/zendframework/zf1/blob/master/library/Zend/Controller/Front.php)
* [Front Controller from CakePHP](https://github.com/cakephp/cakephp/blob/0dfce1abf34316f3be16e9e248860f84f94686e7/app/webroot/index.php#L5)

##Links
* [Patterns of Enterprise Application Architecture](http://martinfowler.com/eaaCatalog/frontController.html)