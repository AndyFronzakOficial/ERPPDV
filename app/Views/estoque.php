<!doctype html>
<html lang="en">

<head>
  <?php require_once('exemplo.php')  ?>
  <?php echo $meta ?>
</head>

<style>
  body {
    background: #414141;
  }

  section {
    max-width: 60vw;
    margin: 5vh auto;
  }

  .center {
    width: 100%;
  }

  .btn-escuro{
        background:   #212529;
        color: #fff;
      }
      .btn-escuro:hover{
        background:  #fff;
        color: #212529;
      }
</style>

<body>
  <header>
    <?php require("components/header.php")  ?> </header>
  <section>
    <?php require("components/btnsOpçoesEstoque.php")  ?>
    <?php require("components/infoEstoque.php")  ?>
    <?php require("components/historicoProdutosEstoque.php")  ?>
 

  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>