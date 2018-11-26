<?php
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
        return 'Неизвестная операция!!!';
    }
    $args = func_get_args();
    print_r($args);
    array_splice($args, 0, 1);
    print_r($args);
    $res = $args[0];
    array_splice($args, 0, 1);
    print_r($args);
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
                    return 'Деление на 0!!!';
                }
                $res = $res / $value;
                break;
        }
    }
    return $res;
}

function task3($n, $m) {
    //  Таблица умножения $n строк $m столбцов
    if (!($n > 0)) {
        return 'Первый параметр не является положительным числом';
    }
    if (!($m > 0)) {
        return 'Второй параметр не является положительным числом';
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
    return 'Параметры введены корректно';
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
        echo 'Не удалось открыть файл на запись';
    }
    fclose($f);
}

function task9($fileName) {
    $f = fopen($fileName,'r');
    if ($f) {
        $res = fread($f, filesize($fileName));
        echo $res;
    } else {
        echo 'Не удалось открыть файл на чтение';
    }
    fclose($f);
}
