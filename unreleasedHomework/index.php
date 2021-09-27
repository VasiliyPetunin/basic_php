<?php
// TRANSLIT:

$array = ["а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "yo", "ж" => "zh", "з" => "z", "и" => "i", "й" => "i", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h", "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sh", "ь" => "", "ы" => "y", "ъ" => "", "э" => "e", "ю" => "yu", "я" => "ya", " " => " "];

function trlt($txt, $translit)
{

    for ($i = 0; $i <= mb_strlen($txt) - 1; $i++) {

        if (mb_substr($txt,$i,1) == " ") {
            $text.= "_";
        } else {
            $text.= $translit[mb_substr($txt,$i,1)];
        }

    }

    return $text;
}

echo trlt('я русский', $array);

// LIST:


$menu = ["Главная", "Услуги" => ["Разработка веб-сайтов", "СЕО-оптимизация", "Контекстная реклама"], "О компании" => ["Наша миссия", "История", "Портфолио"], "Контакты"];

function ulli ($menu)
{

    $html = "<ul>";

    foreach ($menu as $subMenu) {

        if (is_array($subMenu)) {
            $html .= "<li><ul>";
//        echo "<li>".$count."<ul>";
            foreach ($subMenu as $subMenu2) {
                $html .= "<li>" . $subMenu2 . "</li>";
            }
            $html .= "</ul></li>";
        } else $html .= "<li>".$subMenu."</li>";
    }

    $html .= "</ul>";

    return $html;

}

echo ulli($menu);

