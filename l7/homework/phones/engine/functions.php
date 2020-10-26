<?php 
    /*
    * подключение к бд
    */
    function connectDB() {
        $link = mysqli_connect("localhost", "root", "", "test321");
        if (!$link) {
            echo "Невозможно подключиться к базе данных.";
            exit;
        } else {
            return $link;
        }
    }

    /*
    * проверяем сущестование пользователя, где $column = ключ в таблице БД, а $idUser = значение в таблице БД
    */ 
    function issetUser($column, $idUser) {
        $link = connectDB();
        $query = "SELECT * FROM users WHERE $column = '$idUser'";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_assoc($result);
        if (empty($row)) {
            return false;
        } else {
            return true;
        }
        mysqli_close($link);
    }

    /*
    * сохраняем в БД ифнормацию и пользователе
    */ 
    function saveRegistrationInfoUser($array) {
        include_once '../config/config.php';
        $login = trim( strip_tags ($array['login']));
        $password = trim( strip_tags ($array['password']));
        $password = md5($password) . SALT;
        $email = trim( strip_tags ($array['email']));
        $birthday = trim( strip_tags ($array['birthday']));
        $sex = trim( strip_tags ($array['sex']));

        $link = connectDB();
        $query = "INSERT INTO users(login, password, email, birthday, sex, role) VALUES ('$login', '$password', '$email', '$birthday', '$sex', 'user')";
        if (mysqli_query($link, $query)) {
            header("location: registration.php");
        } else {
            echo "изображение не сохранилось в БД";
        }
        mysqli_close($link);
    }

    /*
    * получить информацию о пользователе из БД
    */ 
    function getUser($column, $idUser) {
        $link = connectDB();
        $query = "SELECT * FROM users WHERE $column = '$idUser'";
        $arrayInfoUser = [];
        if ($result = mysqli_query($link, $query)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $arrayInfoUser[] = $row;
            }
        } else {
            echo "ошибка БД";
        }
        mysqli_close($link);
        return $arrayInfoUser;
    }

    /*
    * получаем роль пользователя
    */
    function getUserRole($idUser) {
        $link = connectDB();
        $query = "SELECT role FROM users WHERE role = '$idUser'";
        $arrayInfoUser = [];
        if ($result = mysqli_query($link, $query)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $arrayInfoUser[] = $row;
            }
        } else {
            echo "ошибка БД";
        }
        mysqli_close($link);
        return $arrayInfoUser;
    }

    /*
    * функция создания уменьшиного изображения, при загрузке фотографии на сервер
    */
    function resize($file, $path, $maxWidthImg, $maxHeightImg) {
        $pathImage = $path; 
        $maxWidth = $maxWidthImg;
        $maxHeight = $maxHeightImg;

        if ($file['type'] == 'image/jpeg') {
            $newImage = imagecreatefromjpeg($file['tmp_name']);
        } elseif ($file['type'] == 'image/png') {
            $newImage = imagecreatefrompng($file['tmp_name']);
        } elseif ($file['type'] == 'image/gif') {
            $newImage = imagecreatefromgif($file['tmp_name']);
        } else {
            return false;
        }
        
        $widthNewImage = imagesx($newImage); 
        $heightNewImage = imagesy($newImage);
        if ($widthNewImage > $maxWidth || $heightNewImage > $maxHeight) {
                $ratioWidth = $widthNewImage/$maxWidth;
                $ratioHeight = $heightNewImage/$maxHeight;
                $widthDest = round($widthNewImage/$ratioWidth);
                $heightDest = round($heightNewImage/$ratioHeight);
                $emptyImage = imagecreatetruecolor($widthDest, $heightDest);
                
                imagecopyresampled($emptyImage, $newImage, 0, 0, 0, 0, $widthDest, $heightDest, $widthNewImage, $heightNewImage);
                imagejpeg($emptyImage, $pathImage . $file[name]);        
                return $file[name];
        } else {
            imagejpeg($src, $pathImage . $file[name]);
            return $file[name];
        }
    }

    /*
    * сохранить отзыв
    */ 
    function saveReview ($array) {
        $name = trim( strip_tags($array['name']));
        $email = trim( strip_tags($array['email']));
        $review = trim( strip_tags($array['review'])); 

        $link = connectDB();
        $query = "INSERT INTO review(name, email, review) VALUES ('$name', '$email', '$review')";
        if (mysqli_query($link, $query)) {
            header("location: ../view/v_reviews.php");
        } else {
            echo "изображение не сохранилось в БД";
        }
        mysqli_close($link);
    }

    /*
    * получить отзывы
    */ 
    function getAllReview () {
        $link = connectDB();
        $query = "SELECT * FROM review ORDER BY date DESC";
        $array = [];
        if ($result = mysqli_query($link, $query)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $array[] = $row;
            }
        } else {
            echo "ошибка БД";
        }
        mysqli_close($link);
        return $array;
    }

    /*
    * получить список всех продуктов
    */
    function getAllProduct () {
        $link = connectDB();
        $query = "SELECT * FROM product";
        $array = [];
        if ($result = mysqli_query($link, $query)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $array[] = $row;
            }
        } else {
            echo "ошибка БД";
        }
        mysqli_close($link);
        return $array;
    }

    /*
    * получить продукт по id
    */
    function getProduct ($id) {
        $link = connectDB();
        $query = "SELECT * FROM product WHERE id='$id'";
        $array = [];
        if ($result = mysqli_query($link, $query)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $array[] = $row;
            }
        } else {
            echo "ошибка БД";
        }
        mysqli_close($link);
        return $array;
    }

    /*
    * создаем новый продукт
    */
    function saveProduct($arrayInfo, $image) {
        $name = trim( strip_tags( $arrayInfo['name']));
        $price = trim( strip_tags( $arrayInfo['price']));
        $description = trim( strip_tags( $arrayInfo['description']));
        $imageName = trim( strip_tags( $image['image']['name']));

        $link = connectDB();
        $query = "INSERT INTO product(name, price, image, description) VALUES ('$name', $price, '$imageName', '$description')";
        if (mysqli_query($link, $query)) {
            header("location: admin.php");
        } else {
            echo "товар не создался";
        }
        mysqli_close($link);
    }

    /*
    * удалить изображение продукта
    */
    function deleteImageProduct ($id) {
        $link = connectDB();
        $query = "UPDATE product SET image='' WHERE id=$id";
        if (mysqli_query($link, $query)) {
            header("location: updateProduct.php");
        } else {
            echo "изображение не удалилось.";
        }
        mysqli_close($link);
    }

    /*
    * сохраняем изображение в БД
    */ 
    function saveImage($id, $image) {
        $imageName = trim( strip_tags( $image['saveImage']['name']));
        
        $link = connectDB();
        $query = "UPDATE product SET image='$imageName' WHERE id=$id";
        if (mysqli_query($link, $query)) {
            header("location: updateProduct.php");
        } else {
            echo "изображение не удалось сохранить";
        }
        mysqli_close($link);
    }

    /*
    * обновить информацию о товарах в БД
    */
    function updateInfoProduct($arrayInfo) {
        $id = $arrayInfo['id'];
        $name = trim( strip_tags( $arrayInfo['name']));
        $price = trim( strip_tags( $arrayInfo['price']));
        $description = trim( strip_tags( $arrayInfo['description']));

        $link = connectDB();
        $query = "UPDATE product SET name='$name', price=$price, description='$description' WHERE id=$id";
        if (mysqli_query($link, $query)) {
            header("location: updateProduct.php");
        } else {
            echo "не удалось оновить информацию в БД";
        }
        mysqli_close($link);
    }

    /*
    * удалить товар
    */
    function deleteProduct($id) {
        $link = connectDB();
        $query = "DELETE FROM product WHERE id=$id";
        if (mysqli_query($link, $query)) {
            header("location: deleteProduct.php");
        } else {
            echo "не удалось удалить товар";
        }
        mysqli_close($link);
    }

    function countProductBasket () {
        if (isset($_SESSION['product_basket'])) {
            return array_sum($_SESSION['product_basket']);
        } 
    }
?>