<?php
const UNKNOWN_OPERATION = 'Неизвестная операция!!!';
const DIVISION_BY_ZERO = 'Деление на 0!!!';
const FIRST_PARAM_IS_NOT_NUMBER = 'Первый параметр не является положительным числом';
const SECOND_PARAM_IS_NOT_NUMBER = 'Второй параметр не является положительным числом';
const FILE_IS_NOT_READ = 'Не удалось открыть файл на чтение';
const FILE_IS_NOT_WRITE = 'Не удалось открыть файл на запись';

function task1($arr, $flag = false) {
    foreach ($arr as $val) {
        echo '<p>' . $val . '</p>';
    }
    if ($flag) {
        return implode(',', $arr);
    }
}

function task2($oper) {

    if (!($oper == '+' or $oper == '-' or $oper == '*' or $oper == '/')) {
        return UNKNOWN_OPERATION;
    }

    $args = func_get_args();
    array_splice($args, 0, 1);
    $res = $args[0];
    array_splice($args, 0, 1);

    $txt = $oper . ': ';
    foreach ($args as $value) {
        switch ($oper) {
            case '+':
                $res = $res + $value;
                break;
            case '-':
                $res = $res - $value;
                break;
            case '*':
                $res = $res * $value;
                break;
            case '/':
                if ($value == 0) {
                    return DIVISION_BY_ZERO;
                }
                $res = $res / $value;
                break;
        }
        $txt .= $value . ', ';
    }

    return substr($txt, 0, strlen($txt) - 2) . ' = ' . $res;
}

function task3($n, $m) {
    //  Таблица умножения $n строк $m столбцов
    $isWrong = false;
    if (!($n > 0)) {
        echo FIRST_PARAM_IS_NOT_NUMBER;
        $isWrong = true;
    }
    if (!($m > 0)) {
        if ($isWrong) {
            echo ' и ';
        }
        echo SECOND_PARAM_IS_NOT_NUMBER;
        $isWrong = true;
    }
    if ($isWrong) {
        return null;
    }

    // Если ввод данных корректен, формируем таблицу
    echo '
<table>
    <thead>
        <tr>    
            <th>&nbsp;</th>';
    for ($j = 1; $j <= $m; $j++) {
        echo '<th>' . $j . '</th>';
    }
    echo '
        </tr>
    </thead>
    <tbody>';
    for ($i = 1; $i <= $n; $i++) {
        echo '<tr><td>' . $i . '</td>';
        for ($j = 1; $j <= $m; $j++) {
            echo '<td>' . $i * $j . '</td>';
        }
        echo '</tr>';
    }
    echo '
    </tbody>
</table>';
}

function task4() {
    return date('d.m.Y H:i');
}
function task5() {
    return mktime(0, 0, 0, 2, 24, 2016);
}
function task6($str) {
    return str_replace('К', '', $str);
}
function task7($str) {
    return str_replace('Две', 'Три', $str);
}
function task8($fileName, $str) {
    //  Создание файла с именем $fileName и запись в файл строки $str
    $f = fopen($fileName,'w');
    if ($f) {
        fwrite($f, $str);
    } else {
        echo FILE_IS_NOT_WRITE;
    }
    fclose($f);
}
function task9($fileName) {
    $f = fopen($fileName,'r');
    if ($f) {
        $res = fread($f, filesize($fileName));
        echo $res;
    } else {
        echo FILE_IS_NOT_READ;
    }
    fclose($f);
}
