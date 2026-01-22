<?php
/*
* Get base path
* @param string $path
* return string
*/

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/*
*Load view
*@param Sring $name
*return void
*/

function loadView($name)
{
    $viewPath = basePath("views/{$name}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View {$name} not found";
    }
}

/* 
*Load partial
*@param String $name
*return void
*/

function loadPartial($name)
{
    $partialPath = basePath("views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "View {$name} not found";
    }
}

/*
*Inspect a value(s)
*@param mixed $value
*@return void
*/

function inspect($value)
{
    echo "\n";
    var_dump($value);
    echo "\n";
}

/*
*Inspect a value(s) and die
*@param mixed $value
*@return void
*/

function inspectAndDie($value)
{
    echo "\n";
    die(var_dump($value));
    echo "\n";
}
