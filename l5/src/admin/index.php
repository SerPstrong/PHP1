<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function save(id){
        let idPrice = "price_"+id;//id элемента input в котором указана актуальная цена
        let price = document.getElementById(idPrice).value;//получили текущую стоимость товара
        let str = "action=edit&id="+id+"&price="+price;
        $.ajax({
            type: "GET",
            url: "server.php",
            data: str,
            success: function(answer){
                $("h1").html(answer);//document.querySelector("h1").innerText = answer;
            }
        });

    }
</script>

<?php
include "../config.php";

$sql = "select * from shop";

$res = mysqli_query($connect,$sql);
?>
<h1 style="color: red;"></h1>
<table style="text-align: center;" border="1" width="600">
    <?php
    while($data = mysqli_fetch_assoc($res)):?>
    <tr>
        <td><?= $data['title']?></td>
        <td><input id="price_<?= $data['id']?>" type="text" value="<?= $data['price']?>"></td>
        <td><input type="button" value="Сохранить" onclick="save(<?= $data['id']?>)"></td>
        <td><a href="server.php?action=delete&id=<?= $data['id']?>">Удалить</a></td>
    </tr>
    <?php
    endwhile;
    ?>
</table>





