function item(id){
     // alert(id);
    $.ajax({
        type: 'POST',
        url: '../controllers/Basket.php',
        data: 'id='+id,
        success: function(data){//data - ответ сервера
            alert("Вы добавили товар в корзину!");
            $(".basket-items").html(data);
        }
    });
}