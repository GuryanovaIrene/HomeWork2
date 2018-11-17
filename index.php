<?php
require_once "src/functions.php";
$arr = ['first string', 'second string', 'third string', 'fourth string', 'fifth string',
    'sixth string', 'seventh string', 'eighth string', 'ninth string', 'tenth string'];

echo task1($arr, true);
task1($arr);

echo task2('/', 123, 0, 65, 76);
echo task2('/', 123, 30, 65, 0);
echo task2('-', 123, 0, 65, 76);

echo task3(4, 5);
echo task3(-7, 3);
echo task3(7, 'Wrong param');
echo task3('Wrong param 1', 'Wrong param2');