<?php

$num        =   $_POST['valor'];
$num1       =   $_POST['valor1'];
$num2       =   $_POST['valor2'];

function media($var,$var1,$var2){

    $expres = ($var + $var1 + $var2)/3;

    return $expres;
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Questão 2</title>
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
            <h1 class="m-0 text-dark">Questão 2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
                <h2>2. Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na
variável média e exiba para o usuário o resultado.</h2>
                    <!-- Horizontal Form -->
            <div class="card card-dark ">
                <div class="card-header">
                    <h3 class="card-title">Formula: (A + B + C)/3 </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_media" id="form_media" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="card-body">
                <div class="row">
                  <div class="col">
                    <input type="text" name="valor" id="valor" class="form-control" placeholder="A. valor">
                  </div>
                  <div class="col">
                    <input type="text"  name="valor1" id="valor1" class="form-control" placeholder="B. valor">
                  </div>
                  <div class="col">
                    <input type="text"  name="valor2" id="valor2" class="form-control" placeholder="C. valor">
                  </div>
                </div>
              </div>
              <div class="card-body">
    
                    <div class="row">
                        <!-- textarea -->
                        <div class="col-sm">
                            <div class="form-group">
                                <label>Resultado:</label>
                                <textarea class="form-control" rows="3"  disabled><?php echo "A média dos valores é: ".number_format(media($num,$num1,$num2),2)?></textarea>
                            </div>
                        </div>
                    </div>
            
            </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-dark">Calcular</button>
                    <button type="reset" class="btn btn-danger float-right">Cancelar</button>
                    </div>
                    <!-- /.card-footer -->
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