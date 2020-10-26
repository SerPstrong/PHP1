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
                <h2>Удалить товар</h2>
                <table class="table_update_product">
                <tr>
                    <td><b>Название</b></td>
                    <td><b>Цена</b></td>
                    <td><b>Описание</b></td>
                </tr>
                <? foreach ($allProduct as $key) : ?>
                    <form action="../../engine/admin/deleteProduct.php" method="POST" enctype="multipart/form-data">
                        <tr>
                            <input name="id" type="hidden" value="<?= $key['id'] ?>">
                            <td>
                                <input disabled  name="name" class="delete_input_name" type="text" value="<?= $key['name'] ?>">
                            </td>
                            <td>
                                <input disabled  name="price" class="delete_input_price" type="number" value="<?= $key['price'] ?>">
                            </td>
                            <td>
                                <textarea disabled  name="description" class="delete_input_description"><?= $key['description'] ?></textarea>
                            </td>
                            <td>
                                <img class="image_delete_product" src="../../public/images/small_images_product/<?= $key['image'] ?>" alt="">
                            </td>
                            <td>
                                <input name="delete" type="submit" value="Удалить товар">
                            </td>
                        </tr>
                    </form>
                <? endforeach ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>