<?php
function task1($arr, $flag = false) {
        if ($flag) {
            return implode(',', $arr);
        } else {
            foreach ($arr as $val) {
                echo '<p>' . $val . '</p>';
            }
        }
}
function task2($oper) {
    $i = 0;
    foreach (func_get_args() as $value) {
        if ($i > 0) {
            if ($i == 1) {
                $res = $value;
            } else {
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
                    default:
                        return 'Неизвестная операция!!!';
                }
            }
        }
        $i++;
    }
    return $res;
}
function task3($n, $m) {
    //  Таблица умножения $n строк $m столбцов
    $nType = gettype($n) == 'integer';
    $nNatural = $n >= 1;
    $mType = gettype($m) == 'integer';
    $mNatural = $m >= 1;
    if ($nType and $nNatural and $mType and $mNatural) {
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
    } else {
        // Если данные некорректны, сформулируем ошибки и вернем результат
        $res = '';
        if (!$nType) {
            $res = $res . 'Первый параметр не является целым числом' . PHP_EOL;
        }
        if (!$nNatural) {
            $res = $res . 'Первый параметр не является положительным числом' . PHP_EOL;
        }
        if (!mType) {
            $res = $res . 'Второй параметр не является целым числом' . PHP_EOL;
        }
        if (!$mNatural) {
            $res = $res . 'Второй параметр не является положительным числом' . PHP_EOL;
        }
        return $res;
    }
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
    if ($f = fopen($fileName,'w')) {
        fwrite($f, $str);
    } else {
        task10('W');
    }
}
function task9($fileName) {
    if ($f = fopen($fileName,'rb')) {
        $res = fread($f);
        echo $res;
    } else {
        task10('R');
    }
}
function task10($exceptionType) {
    // Обработка исключений
    switch ($exceptionType) {
        case 'W':
            echo 'Не удалось произвести запись в файл';
            break;
        case 'R':
            echo 'Не удалось прочитать файл';
            break;
    }
}