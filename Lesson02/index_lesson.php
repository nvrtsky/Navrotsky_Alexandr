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

ДЗ 09 февраля/ Задача №1
<?php
for ($i=5; $i<=13; $i++){
    echo "<br>" . $i;
}
?>

<br>
<br>Задача №2 через while -->
<?php
$num = 1000;
$count = 0;
while ($num > 50) {
    $num=$num/2;
    $count++;
}
echo "<br>Результат " . $num;
echo "<br>Кол-во итераций " . $count;
?>

<br>
<br>Задача №2 через for -->
<?php
for ($num = 1000, $count=0; $num > 50; $num=$num/2, $count++) {
}
echo "<br>Результат " . $num;
echo "<br>Кол-во итераций " . $count;
?>

<br>
<br>Задача №3<br> Результат
<?php
$i = 3;
for ($a = 0; $a<=9-$i; $a++) {
    echo $a . ", ";
}
echo $a;
echo "<br>Выбранная переменная " . $i;
?>
</body>
</html>