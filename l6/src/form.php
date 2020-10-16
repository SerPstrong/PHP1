<?php
    $x = rand(1,10);
    $y = rand(1,10);
    $res = $x + $y;

    ?>


<form action="server.php" method="POST" enctype="multipart/form-data">

    <p>Выберите файлы</p>
    <input type="file" name="photo[]" multiple accept="image/*">


    <p>Ваше имя</p>
    <input type="text" name="fio">

    <input type="hidden" name="correct" value="<?= $res?>">

    <p>Расскажите о себе</p>
    <textarea name="biogr" cols="30" rows="10"></textarea>

    <p>Какие языки Вы знаете</p>
    <input type="checkbox" name="lang[]" value="PHP">PHP<br>
    <input type="checkbox" name="lang[]" value="JS">JS<br>
    <input type="checkbox" name="lang[]" value="Java">Java<br>

    <p>Ваш возраст</p>
    <select name="age" id="">
        <option value="До 30 лет">До 30 лет</option>
        <option value="После 30 лет">После 30 лет</option>
    </select>

    <p>Ваш день рождения</p>
    <input type="date" name="bd"><br><br>

    <p>Вычислите <?= $x?> + <?= $y?> = <input name="answer" style="width:30px;" type="text"></p>

    <?php
if(!$_GET['bot']):?>

    <input type="submit" value="Сохранить">

    <?php
    endif;
    ?>
</form>

