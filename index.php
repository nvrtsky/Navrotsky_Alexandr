<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашняя работа</title>
    <!--<link type="text/css" rel="stylesheet" href="styles/style.css">-->
    <?php
    $date = date('d.m.Y H:i');
    echo $date;
    if(date('i') > 00 && date('i') < 05){
        echo 'день';
        echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";
    }
    else{
        echo 'ночь';
        echo "<link rel='stylesheet' type='text/css' href='styles/style_night.css'>";
    }
    ?>
</head>
<body>
<header class="header">
    <section class="grid_header">
        <section>
            <div> <img src="images/164-1640714_user-symbol-interface-contact-phone-set-add-sign.png"></div>
        </section>
        <section class="grid_menu">
            <div> <font size="6">Меню:</font></div>
            <div> <font size="5"> <a href="mendeleev.html">Таблица Менделеева</a> </font> </div>
            <div> <font size="5"> <a href="mendeleev.html">Пункт меню</a> </font> </div>
        </section>
    </section>
</header>
<main>
    <section class="grid_main">
        <section class="grid_main1">
            <section>
                <div><img src="images/photo_2021-03-12_11-34-20.jpg"></div>
            </section>
        </section>
        <section class="grid_main2">
            <section>
                <div> <h2>Навроцкий Александр</h2></div>
            </section>
            <section class="grid_main3">
                <section>
                    <div> <h4>Информация о себе. Привет! Меня зовут Навроцкий Александр. Работаю в Факте 1,5 года техническим специалистом Битрикс24. То есть настраиваю ту часть Б24, которую можно сделать стандартным функционалом или конструктором бизнес-процессов и без программного кода.</h4></div>
                </section>
                <section>
                    <div> <h4>Что понравилось на первых уроках. Отличные первые уроки, только положительные эмоции, полная вовлеченность и обратная связь от преподавателя</h4></div>
                </section>
            </section>
        </section>
    </section>

    <!--Картинки для ДЗ 04.02 / flex-->
    <section class="cont2">
        <div>
            <section class="cont3">
                <img src="images/1.jpg">
            </section>
            <section class="cont3">
                <td>Текст под картинкой1</td>
            </section>
        </div>
        <section class="cont2">
            <div>
                <section class="cont3">
                    <img src="images/2.jpg">
                </section>
                <section class="cont3">
                    <td>Текст под картинкой2</td>
                </section>
            </div>
        </section>
        <section class="cont2">
            <div>
                <section class="cont3">
                    <img src="images/3.jpg">
                </section>
                <section class="cont3">
                    <td>Текст под картинкой3</td>
                </section>
            </div>
        </section>
        <section class="cont2">
            <div>
                <section class="cont3">
                    <img src="images/4.jpg">
                </section>
                <section class="cont3">
                    <td>Текст под картинкой4</td>
                </section>
            </div>
        </section>
        </div>
    </section>
    <br>
    <br>

    <!--Картинки для ДЗ 04.02 / grid-->
    <section class="grid">
        <section>
            <div> <img src="images/5.jpg"></div>
            <div> <h5>Текст под картинкой1</h5></div>
        </section>
        <section>
            <div> <img src="images/6.jpg"></div>
            <div> <h5>Текст под картинкой2</h5></div>
        </section>
        <section>
            <div> <img src="images/7.jpg"></div>
            <div> <h5>Текст под картинкой3</h5></div>
        </section>
        <section>
            <div> <img src="images/8.jpg"></div>
            <div> <h5>Текст под картинкой4</h5></div>
        </section>
    </section>

</main>
</body>
</html>