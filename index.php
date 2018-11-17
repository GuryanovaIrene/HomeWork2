<?php
require_once "src/functions.php";
echo '<a href="readme.html">README</a>' . PHP_EOL;
echo 'Задание 1.' . PHP_EOL;
$arr = ['first string', 'second string', 'third string', 'fourth string', 'fifth string',
    'sixth string', 'seventh string', 'eighth string', 'ninth string', 'tenth string'];
echo task1($arr, true);
task1($arr);
echo PHP_EOL . 'Задание 2.' . PHP_EOL;
echo task2('/', 123, 0, 65, 76) . PHP_EOL;
echo task2('/', 300, 5, 3, 2) . PHP_EOL;
echo task2('-', 123, 0, 65, 76) . PHP_EOL;
echo task2('(', -8, 8, 256, 476, 34) . PHP_EOL;
echo 'Задание 3.' . PHP_EOL;
echo task3(4, 5);
echo task3(-7, 3);
echo task3(7, 'Wrong param');
echo task3('Wrong param 1', 'Wrong param2');
echo PHP_EOL . 'Задание 4.' . PHP_EOL;
echo task4();
echo PHP_EOL;
echo task5();
echo PHP_EOL . 'Задание 5.' . PHP_EOL;
echo task6('Карл у Клары украл кораллы');
echo PHP_EOL;
echo task7('Две бутылки лимонада');
task8('test.txt', 'Hello again!');
task9('test.txt');