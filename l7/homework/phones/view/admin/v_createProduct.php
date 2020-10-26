<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="../../public/style.css" rel="stylesheet">
    <title>Тест</title>
</head>
<body>
    <div class="container">
        <h2 class="admin_heading_h2">Вы вошли как администратор</h2>
        <hr>
        <div class="admin_list_block">
            <a class="admin_list_link" href="../../engine/admin/admin.php">Создать новый товар</a>
            <a class="admin_list_link" href="../../engine/admin/updateProduct.php">Редактировать товар</a>
            <a class="admin_list_link" href="../../engine/admin/deleteProduct.php">Удалить товар</a>
            <a class="admin_list_link" href="../../engine/logout.php">Выйти</a>
        </div>
        <hr>

        <div class="rigth_content">
            <h2 class="admin_heading_h2_create">Создать товар</h2>
            <form action="../../engine/admin/createProduct.php" method="POST" enctype="multipart/form-data">
                <input class="admin_create_product" type="text" name="name" placeholder="Название товара" required> <br>
                <input class="admin_create_product" type="number" name="price" placeholder="Цена товара" required> <br>
                <textarea class="admin_create_product_textarea" name="description" placeholder="Описание товара" required></textarea> <br>
                <span>Загрузить изображение</span> <br>
                <input type="file" name="image" accept="image/*" required> <br>
                <input class="admin_create_product_submit" type="submit" name="submit" value="Создать товар">
            </form>
        </div>
            
    </div>
</body>
</html>











