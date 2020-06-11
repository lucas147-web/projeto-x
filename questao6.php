<?php

$produto    =   $_POST['valor'];

function expressao($produto1){

$desconto   =   0.07;
$multi      =   ($produto1 * $desconto);
$total      =   ($produto1 - $multi);

return $total;

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Questão 6</title>
  <?php
    include "header.php";
    ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php
    include "sidebar.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Questão 6</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 6</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
                <h3>6. Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, exibindo
                    para o usuário o valor original, o valor do desconto e o valor com o desconto.</h3>
                    <!-- general form elements disabled -->
              <div class="card card-dark ">
                  <div class="card-header">
                    <h3 class="card-title">Calcular desconto do produto</h3>
                  </div>
                        <!-- /.card-header -->
                  <div class="card-body">
                  <form role="form" name="form_produto"  action="" method="POST" id="form_produto">
                      <div class="row">
                          <div class="col-sm">
                                      <!-- text input -->
                              <div class="form-group">
                                  <label>Produto</label>
                                  <input type="number"min="1" required  name="valor" id="valor" class="form-control" placeholder="Digite o valor do produto">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                              <!-- textarea -->
                        <div class="col-sm">
                            <div class="form-group">
                                <label>Resultado:</label>
                                

                                  <?php
                                   echo "<br>"."Valor do produto: ".$produto    =   $_POST['valor']."<br>".
                                   "desconto do produto: ".(expressao($produto) - $produto    =   $_POST['valor'])."<br>".
                                   "Valor final do produto: ".expressao($produto) 
                                   
                                   ?>
                                
                                
                            </div>
                                <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-dark">Calcular</button>
                                <button type="reset" class="btn btn-danger float-right">Cancelar</button>
                            </div>
                        </div>
                      </div>
            
                  </div>
                  </form>
              </div>
        </section>
      <!-- /.content -->
      </div>
  <!-- /.content-wrapper -->

  <?php
    include "footer.php";
  ?>


</body>
</html>