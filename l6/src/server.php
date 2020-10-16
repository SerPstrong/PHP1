<?php
//print_r($_POST);
//echo $_POST['fio'];
//$fio = !empty($_POST['fio']) ? htmlspecialchars($_POST['fio']) : "";
//echo $fio;
//$id = (int)$_GET['id'];
//$sql = "select * from table where id = $id ";
//echo $sql;
//
//if($_POST['answer'] == $_POST['correct']){
//    echo "Welcome";
//}
//else{
//    header("Location: form.php?bot=true");
//}

//print_r($_FILES);

for ($i=0;$i<count($_FILES['photo']['name']);$i++){
    $path = "images/".$_FILES['photo']['name'][$i];
    if(move_uploaded_file($_FILES['photo']['tmp_name'][$i],$path)){
//        echo $_FILES['photo']['name'][$i]." успешно загружен!<br>";
        echo "<img width='200' src='$path'><hr>";
    }
    else{
        die("Ошибка загрузки файла!");
    }

}