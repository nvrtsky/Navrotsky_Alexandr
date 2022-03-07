<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашняя работа</title>
    <!--<link type="text/css" rel="stylesheet" href="styles/style.css">-->
    <?php
    function dateOrNight (){
        $date = date('d.m.Y H:i');
        //echo $date;
        if(date('H') > 00 && date('H') < 06){
            //echo ' ночь';
            echo "<link rel='stylesheet' type='text/css' href='styles/style_night.css'>";
        }
        else{
            //echo ' день';
            echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";
        }
    }
    dateOrNight();
    ?>
</head>
<body>
<header>
    <?php
    include "header.php";
    ?>
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
                <div>
                    <?php
                    function daysBeforeBirth ($name){
                        $today = date_create_from_format('Y-m-d', date('Y-m-d'));
                        $date_birth = date_create_from_format('Y-m-d', '1983-10-22');
                        $interval = date_diff($today, $date_birth);
                            echo $name . ", дата рождения: " . $date_birth->format('d.m.Y') .
                                "<br>" . "Сегодня: " . $today ->format('d.m.Y').
                                "<br>" . $interval->format('Я родился %R%a дней назад');
                    }
                    daysBeforeBirth("Навроцкий Александр");
                    ?>
                </div>
            </section>
            <section class="grid_main3">
                <section>
                    <div>
                        <?php
                        function countVowel ($text_about, $text_about1, $count_vowel_letters/*счетчик гласных*/){
                            $array_vowel_letters = ['а', 'о', 'э', 'е', 'и', 'ы', 'у', 'ё', 'ю', 'я', 'А', 'О', 'Э', 'Е', 'И', 'Ы', 'У', 'Ё', 'Ю', 'Я'];
                                foreach ($array_vowel_letters as $value) {
                                $count_vowel_letters += (substr_count($text_about, $value)+substr_count($text_about1, $value));
                            }
                                echo mb_substr('<p style="color: red">' . $text_about . '</p>', 0, 150) . "$text_about1" . "<br>" . "<br>" . "Количество гласных букв в этом разделе:" . $count_vowel_letters;
                            //считаем кол-во слов:
                            $array_text_about = explode(' ', $text_about);//преобразовываем строку в массив
                            $array_text_about1 = explode(' ', $text_about1);
                                foreach ($array_text_about as $key1 => $value) {//считаем кол-во элементов
                                foreach ($array_text_about1 as $key2 => $value);
                            }
                                echo "<br>" . "<br>" . "Количество слов в этом разделе:" . $key1+$key2+1;
                        }
                        countVowel('Информация о себе. Привет! Меня зовут Навроцкий Александр.', ' Работаю в Факте 1,5 года техническим специалистом Битрикс24. То есть настраиваю ту часть Б24, которую можно сделать стандартным функционалом или конструктором бизнес-процессов и без программного кода.', 0);
                        ?>
                    </div>
                </section>
                <section>
                    <div>
                        <?php
                        countVowel('', 'Что понравилось на первых уроках. Отличные первые уроки, только положительные эмоции, полная вовлеченность и обратная связь от преподавателя', 0);
                        ?>
                    </div>
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
<footer>
    <?php
    include "footer.html";
    ?>
</footer>
</body>
</html>