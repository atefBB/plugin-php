<?php

return true ? 1 : 2;
return ($testReallyReallyLong >= 1) ? $someOtherReallyReallyLongVariable : $thisOtherVariable;
return true ?: 2;
return ($testReallyReallyLong === $someOtherReallyReallyLongVariable && $otherTest != $someOtherTest) ? 1 : 0;

$test ? doSomething() : doSomethingElse();
return $test ? doSomething() : doSomethingElse();
$test ?: doSomething();
return $test ?: doSomething();

$category_color = get_field( Category_Meta::COLOR, 'category_' . $term_id ) ?: 'gold';

$var = $someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable;
$var = $someOtherReallyReallyLongVariable ? ($someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable) : ($someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable);
$test = $foo ?: bar($someOtherReallyReallyLongVariable, $someOtherReallyReallyLongVariable, $someOtherReallyReallyLongVariable);
$test = ($testReallyReallyReallyReallyReallyReallyLong >= 1) ?: $someOtherReallyReallyReallyReallyReallyReallyLongVariable;
$test = $foo ?: bar([ 'foo' => 'bar' , 'bar' => 'foo']);
$test = $foo ?: bar([ 'foo' => $someOtherReallyReallyLongVariable , 'bar' => $someOtherReallyReallyLongVariable]);
$var = ($this->databasePath ?: $this->basePath . DIRECTORY_SEPARATOR . 'database') .
    ($path ? DIRECTORY_SEPARATOR . $path : $path);
$var = ($this->databasePath ? $this->basePath . DIRECTORY_SEPARATOR . 'other' : $this->basePath . DIRECTORY_SEPARATOR . 'database') .
    ($path ? DIRECTORY_SEPARATOR . $path : $path);
return ($this->databasePath ?: $this->basePath . DIRECTORY_SEPARATOR . 'database') .
    ($path ? DIRECTORY_SEPARATOR . $path : $path);
