<?php

namespace DesignPatterns\Behavioral\Interpreter;

include_once 'Interpreter.php';
include_once 'Lexer.php';
include_once 'Parser.php';

$lexer = new Lexer(array(
    'parser' => new Parser(),
));

$code = <<<EOD
variable(result, rand(0, 10))
variable(rand_rand, rand(0, result))
variable(summation,
       sum(
           sum(
               sum(2, 3),
               sum(4, 5)
           ), 5
       )
)
cycle(not_equal(i, 10),
    increment(i)
)
var(rt, if(true, 'yes', 'no'))
var(rf, if(false, 'yes', 'no'))
EOD;
$parser = $lexer->code($code);

include_once 'extension/Assignment.php';
include_once 'extension/Cycle.php';
include_once 'extension/ConditionalOperator.php';
include_once 'extension/Increment.php';
include_once 'extension/True.php';
include_once 'extension/False.php';
include_once 'extension/Random.php';
include_once 'extension/Summation.php';
include_once 'extension/Arr.php';
include_once 'extension/NotEqual.php';

$interpreter = new Interpreter([
    'extensions' => [
        'Assignment' => ['object' => new Extension\Assignment(), 'synonyms' => ['var', 'variable']],
        'Arr' => ['object' => new Extension\Arr(), 'synonyms' => ['arr', 'array']],
        'Random' => ['object' => new Extension\Random(), 'synonyms' => ['rand', 'random']],
        'Summation' => ['object' => new Extension\Summation(), 'synonyms' => ['sum', 'summation']],
        'Cycle' => ['object' => new Extension\Cycle(), 'synonyms' => ['cycle', 'while']],
        'ConditionalOperator' => ['object' => new Extension\ConditionalOperator(), 'synonyms' => ['if']],
        'True' => ['object' => new Extension\True(), 'synonyms' => ['true']],
        'False' => ['object' => new Extension\False(), 'synonyms' => ['false']],
        'Increment' => ['object' => new Extension\Increment(), 'synonyms' => ['increment']],
        'NotEqual' => ['object' => new Extension\NotEqual(), 'synonyms' => ['not_equal']],
    ],
]);

$isComplete = $interpreter->execute($parser);

echo ($isComplete ? 'COMPLETE!' : 'NOT COMPLETE, NO FUTURE') . PHP_EOL;
$variables = $interpreter->getVariables();
echo 'variable:' . PHP_EOL;
var_dump($variables);

echo 'errors:' . PHP_EOL;
$errors = $interpreter->getErrors();
var_dump($errors);