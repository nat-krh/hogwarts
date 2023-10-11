<?php
$house = 'hogwarts';
//$idi = [0, 1, 2, 3];
//foreach ($idi as $id);
$title = 'Хогвартс';
require 'components/header.php';

?>

<div class="founders">
<?php
for ($id = 0; $id<4; $id++){
    require 'components/left.php';
}
?>
</div>


        <div class="content">
            <div class="hello">
                <h1>Приветствуем Вас в Школе Чародейства и Волшебства Хогвартс!</h1>
                <img src="hogwarts/emblem.png" alt="Герб Гриффиндора">
                <p>Добро пожаловать в Хогвартс! Скоро начнётся банкет по случаю начала учебного года, но прежде чем вы сядете за столы, вас разделят на факультеты. Отбор — очень серьёзная процедура, потому что с сегодняшнего дня и до окончания школы ваш факультет станет для вас второй семьёй. Вы будете вместе учиться, спать в одной спальне и проводить свободное время в комнате, специально отведённой для вашего факультета.</p>
            </div>
            <div class="info">
                <p>Хогвартс был основан примерно в X веке четырьмя могущественными волшебниками: Годриком Гриффиндором, Салазаром Слизерином, Кандидой Когтевран и Пенелопой Пуффендуй. Основатели построили магическую школу и принимали туда всех детей с волшебными способностями. Они распределяли к себе учеников по разным умениям и характерам, так в школе образовалось четыре факультета — эта традиция живёт в школе по сей день.</p>
                <p>Годрик Гриффиндор брал к себе благородных и храбрых. Салазар Слизерин - амбициозных и хитрых. Хельга Хаффлпафф - трудолюбивых и честных. А Ровена Ровенкло - мудрых и умных.</p>
                <p>Ежегодно проходит соревнование между факультетами: кто из них получит больше баллов. За достижения и промахи каждого студента — как академические, так и дисциплинарные — баллы могут быть начислены или сняты с его факультета. Таким образом, в Хогвартсе используются групповые поощрения и наказания.</p>
                <img src="hogwarts/clock.jpg" alt="Песочные часы с баллами факультетов">
                <p>Отмеривают баллы большие заколдованные песочные часы в холле. Их четыре: по одному на каждый факультет. Вместо песчинок в них — драгоценные камни: рубины в гриффиндорских часах, алмазы[15] — в пуффендуйских, синие сапфиры — в когтевранских, изумруды — в слизеринских. Когда баллы добавляются или снимаются с факультета, в соответствующих часах такое же количество камней падает в нижнюю половину или, наоборот, поднимается в верхнюю.</p>
                <p>В конце каждого года факультет, набравший максимальное количество очков, выигрывает межфакультетское соревнование. В честь победы Большой зал Хогвартса декорируется в цвета факультета-победителя.</p>
                <img src="hogwarts/greatHall.gif" alt="Большой зал Хогвартса">
                <p>По случаю знаменательных событий в Большом зале Хогвартса устраиваются праздничные пиры. Традиционными являются пир в честь начала нового учебного года с церемонией распределения и пир в честь окончания учебного года, на котором объявляют лучший факультет года. Также пиры устраивают в честь всеобщих празднеств: Пасха, Рождество, Хэллоуин — накануне весь замок преображается: на Хэллоуин повсюду стоят тыквы с горящими свечами внутри, на Рождество в Большом зале появляются большие украшенные ёлки, а в коридорах висят омелы.</p>
                <p>Все предметы, изучаемые в школе, так или иначе связаны с магией. За исключением астрономии, ни один предмет не преподаётся в обычных школах, хотя есть и похожие (зельеварение вместо химии, история магии вместо истории, нумерология вместо математики, травология вместо ботаники, уход за магическими существами вместо зоологии). Особняком стоит изучение астрономии, т. к. такой предмет есть и в магловских школах.</p>
                <img src="hogwarts/classroom.jpg" alt="Учебный класс Хогвартса">
                <p>Обязательных предметов восемь:</p>
                <ul>
                    <li>Зельеварение</li>
                    <li>История магии</li>
                    <li>Трансфигурация</li>
                    <li>Заклинания</li>
                    <li>Астрономия</li>
                    <li>Травология</li>
                    <li>Защита от тёмных искусств</li>
                    <li>Полёты на мётлах</li>
                </ul>
                <p>Все эти предметы обязательны с первого по пятый курс. Начиная с третьего курса, ученикам, наряду с обязательными, предлагаются факультативные предметы:</p>
                <ul>
                    <li>Прорицания</li>
                    <li>Уход за магическими существами</li>
                    <li>Изучение Древних рун</li>
                    <li>Магловедение</li>
                    <li>Нумерология</li>
                </ul>
                <p>Обучение на двух последних курсах не является обязательным. На них ученики изучают меньше предметов, но на более углубленном уровне. Занятия становятся гораздо сложнее. Кроме того, ученик может быть и не допущен к занятиям из-за недостаточно высоких оценок.</p>
                <p>На шестом году обучения ученики Хогвартса могут изучать трансгрессию с последующей сдачей экзамена. Трансгрессию преподаёт не один из преподавателей, а чиновник Министерства Магии. К экзамену допускаются только ученики, достигшие 17 лет. Курсы трансгрессии являются платными.</p>

            </div>
            <?=require 'components/news.php'?>
        </div>


<div class="deans">
<?php
for ($id = 0; $id<4; $id++){
    require 'components/right.php';
}
?>
</div>



<?php require 'components/footer.php'?>