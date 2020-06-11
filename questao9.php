<?php

$produto    =   $_POST['valor'];


function parcela($produto1){

    $acrescimo  =   0.16;
    $multi  =   ($produto1   *  $acrescimo );
    $multi1 =   ($produto1  +   $multi);
    $parcela=   ($multi/10);
    return $multi1;  
                                       
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Questão 9</title>
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
            <h1 class="m-0 text-dark">Questão 9</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 9</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <h2>9. Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, dívida em
10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra.</h2>
                               <!-- general form elements disabled -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Calculadora</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" name="form_conversor"  action="" method="POST" id="form_conversor">
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
                                <label>Resultado:   </label>
                               
                                <?php echo "<br>Valor da parcela: ".parcela($produto/10)."<br>";
                                        echo "Total: ".parcela($produto);  
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

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include "footer.php";
  ?>


</body>
</html>