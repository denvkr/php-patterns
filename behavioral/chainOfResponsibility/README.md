#Chain Of Responsibility
The chain-of-responsibility pattern is a design pattern consisting of a source of command objects and
a series of processing objects. Each processing object contains logic that defines the types of command objects that it
can handle; the rest are passed to the next processing object in the chain. A mechanism also exists for adding new processing
objects to the end of this chain.
[More…](http://en.wikipedia.org/wiki/Chain_of_responsibility_pattern)

```php
$logger = new StdoutLogger(Logger::DEBUG);
$logger1 = $logger->setNext(new EmailLogger(Logger::NOTICE));
$logger2 = $logger1->setNext(new StderrLogger(Logger::ERROR));
$logger->message('Entering function', Logger::DEBUG);
// Writing to stdout: Entering function
$logger->message("Step1 completed.", Logger::NOTICE);
// Writing to stdout: Step1 completed.
// Sending via email: Step1 completed.
$logger->message("An error has occurred.", Logger::ERROR);
// Writing to stdout: An error has occurred.
// Sending via email: An error has occurred.
// Sending to stderr: An error has occurred.
```