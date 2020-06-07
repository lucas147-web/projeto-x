<?php
$alg  = $_POST['numero'];
$alg1 = $_POST['numero1'];

function soma1($num,$num1){

  $multi    = ($num * $num);

  $multi1   = ($num1 * $num1);

  $expressao     = $multi + $multi1;

  return $expressao;
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHP AdminLTE 3 | Dashboard</title>
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
            <h1 class="m-0 text-dark">Questão 3</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <h2>3. Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados
e mostre o resultado.</h2>
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Formula: (A² + B²):</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_consumo" id="form_consumo" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="distancia" class="col-sm-2 col-form-label">Valor A</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="numero" name="numero" placeholder=" Digite o valor" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="combustivel" class="col-sm-2 col-form-label">Valor B</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="numero1" name="numero1" placeholder="Digite o valor" required>
                        </div>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-info">Calcular</button>
                    <button type="reset" class="btn btn-default float-right">Cancelar</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
    <?php echo "Resultado: ".soma1($alg,$alg1) ?>
    
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