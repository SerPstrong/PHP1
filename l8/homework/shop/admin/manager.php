<?php include_once "../controllers/Basket.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
<? include "../templates/menu.php"; ?>

<button type="button" onclick="renderManager()" class="btn btn-primary">Обновить стол заказов</button>
<div class='mainTableManager'>
    <script>
        $(document).ready(function () {
            renderManager();
        });
    </script>
</div>

<div class="modalWindows">
    <!-- OrderModal -->
    <div class="modal fade " id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Детали заказа</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="orderModalBody">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <!-- DiscountModal
    <div class="modal fade" id="discountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Скидки заказа</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="discountModalBody">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>
    </div>-->

    <? include "../templates/footer.php"; ?>
</body>
</html>



