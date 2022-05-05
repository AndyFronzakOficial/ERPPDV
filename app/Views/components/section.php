<div class="container">
    <div class="row">
        <div class="col componentsVends">
            <?php require("componentVendas.php")  ?>
        </div>

        <div class="col componentsVends">
            <?php require("componentFinance.php") ?>
        </div>

        <div class="col componentsVends">
        <?php require("componentEstoque.php") ?>
        </div>
    </div>
</div>

<style>
    .componentsVends{
        margin: 1vh;
    }
</style>