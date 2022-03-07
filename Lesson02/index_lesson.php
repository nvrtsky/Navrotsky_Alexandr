<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="stylenew04_02.css">
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="keywords" content="HTML, CSS, BITRIX, PHP">
	<meta name="description" content="Курсы от факт-школы по HTML, CSS, BITRIX, PHP">
	<title>Задачи</title>
</head>
<body>
<?php
/*for ($a=20; $a<=80; $a++){
    if ($a % 2 ==0)
        echo $a."<br>";
}
*/?>

<?php
/*for ($i=10; $i<=50; $i++) {
    if ($i % 5 == 0) {
        if ($i % 3 == 0) {
            echo '<p style="color: red">' . $i . '</p>';
        } else {
            echo "<br>" . "<em>" . $i . "</em>";
        }
    }
    else {
        echo "<br>" . $i;
    }
}*/
/**/?><!--

--><?php
/*$arr1 = array('яблоко', 'ананас', 'банан');
    //print_r ($arr1);
$arr2[] = 1;
$arr2[] = 15;
$arr2[] = 25;
//print_r ($arr2);

$arr3[2] = 0.5;
$arr3[3] = 0.6;
$arr3[3] = 0.7;
//print_r ($arr3);

$arr4 = ['яблоко', 'ананас', 'банан'];
//print_r ($arr4);
//echo $arr4[1];
for ($i = 0; $i < count ($arr4); $i++); {
    echo $arr4[$i] . " ";
}

foreach ($arr4 as $value){
    echo $value . " ";
}*/
?>
<!--
//ДЗ 09 февраля/ Задача №1
<?php
/*for ($i=5; $i<=13; $i++){
    echo "<br>" . $i;
}
*/?>

<br>
<br>Задача №2 через while -->
<?php
/*$num = 1000;
$count = 0;
while ($num > 50) {
    $num=$num/2;
    $count++;
}
echo "<br>Результат " . $num;
echo "<br>Кол-во итераций " . $count;
*/?>

//<br>
//<br>Задача №2 через for -->
<?php
/*for ($num = 1000, $count=0; $num > 50; $num=$num/2, $count++) {
}
echo "<br>Результат " . $num;
echo "<br>Кол-во итераций " . $count;
*/?>

//<br>
//<br>Задача №3<br> Результат
<?php
/*$i = 3;
for ($a = 0; $a<=9-$i; $a++) {
    echo $a . ", ";
}
echo $a;
echo "<br>Выбранная переменная " . $i;
*/?>

//<br> Занятие 11.02. Задача №1
<?php
/*$arr = [];
$a = 55;
for ($i = 0; $i <= 4; $i++){
    $arr [$i] = $a - 5;
    $a -= 5;
}
//print_r($arr);
echo array_sum($arr);
*/?>

<br>Задача №2
--><?php
/*
$arr = [];
$i = mt_rand(0, 5);

for ($i = 0; $i <= 5; $i++){

}
echo $arr[$i];
*/?>

<br><br>
<br><br>
Задачи от 16.02.
Создайте форму генерации ссылки с параметрами:
- создайте форму и в ней добавьте поле со списком выбора - Лаб1, Лаб2, Лаб3, Лаб4
- при нажатии на кнопку должна быть сформирована ссылка следующего вида: phpcourse.php?l3, где 3 - это номер выбранной лабораторной работы
<br><br>
<form method="get">
    <p>
        <label for="lab">Выберите лабораторную</label>
        <select name="lab" id="lab">
            <option name="lab" value="l1">Lab1</option>
            <option name="lab" value="l2">Lab2</option>
            <option name="lab" value="l3">Lab3</option>
            <option name="lab" value="l4">Lab4</option>
        </select>
    </p>
    <p>
        <button type="submit" name="send" value="Отправить">Ок</button>
    </p>
</form>
<?php
//print_r($_GET);
$value = isset($_GET ['send'])? $_GET ['lab'] : 1;
//$value = $_GET ['lab'];
echo "phpcourse.php?" . $value . "<br>";
?>
<a href="phpcourse.php?<?php echo $value;?>">Ссылка</a>


<br><br>
Задача. Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»). По умолчанию задайте везде значение «да».
Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 3, 9, 10, 13, 14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18. Посчитайте сумму набранных баллов:
если она оказалась более 15, то результат: «У Вас покладистый характер»;
если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно ладить»;
если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».
Отобразите на экране имя анкетируемого, фразу-результат анкетирования.
<br><br>
<form method="post">
    <p>
        <label for="answer1">Вопрос №1</label>
        <select name="answer1">
            <option name="answer" value="yes">Да</option>
            <option name="answer" value="no">Нет</option>
        </select>
    </p>
    <p>
        <label for="answer2">Вопрос №2</label>
        <select name="answer2">
            <option name="answer" value="yes">Да</option>
            <option name="answer" value="no">Нет</option>
        </select>
    </p>
    <p>
        <label for="answer3">Вопрос №3</label>
        <select name="answer3">
            <option name="answer" value="yes">Да</option>
            <option name="answer" value="no">Нет</option>
        </select>
    </p>
    <p>
        <label for="answer4">Вопрос №4</label>
        <select name="answer4">
            <option name="answer" value="yes">Да</option>
            <option name="answer" value="no">Нет</option>
        </select>
    </p>
    <p>
        <label for="answer5">Вопрос №5</label>
        <select name="answer5">
            <option name="answer" value="yes">Да</option>
            <option name="answer" value="no">Нет</option>
        </select>
    </p>
    <p>
        <button type="submit" name="send" value="Отправить">Ок</button>
    </p>
</form>
<?php
$count=0;
print_r($_POST);
//yes_array = array ($_POST (0,1,2));
//print_r($yes_array);
foreach ($_POST [0] as $value) {
    if ($value == 'yes') {
            $count+=1;
        }
}
echo " " . $count;
?>
</body>
</html>

<br><br>
<br><br>
Задача. Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового документа на электронный адрес).
*Так как мы отправляем e-mail на локальном сервере, то письма будут сохраняться в папку \OpenServer\userdata\temp\email
<br>

<form method="post">
    <p>
        <label for="name">Введите логин</label>
        <input type="text" name="login">
    </p>
    <p>
        <label for="comment">Введите комментарий</label>
        <input type="text" name="comment">
    </p>
    <p>
        <button type="submit" name="send" value="Отправить">Сохранить в папку</button>
    </p>
</form>
<?php
    if (empty($_POST ['login'])){}
    if (empty($_POST ['comment'])){}
    if (empty($_POST ['send'])){}
        else {
            $file = "mail.txt";
            $file = fopen($file, "a");
            $login_file = "Логин: " . $_POST ['login'] . ", " . "Комментарий: " . $_POST ['comment'];
            $write_file = fwrite($file, $login_file);
                unset($write_file);
        }
?>