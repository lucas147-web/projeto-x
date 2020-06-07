<?php

$numero     =   $_POST['valor'];


function conversor($num){

    $conv   =  $num*3.6;
    
 return $conv;
}
?>
<?php
$numero1    =   $_POST['valor1'];
function conversor1($num1){

    $conv1  =  $num1/3.6;

    return $conv1;
}


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Questão 4</title>
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
            <h1 class="m-0 text-dark">Questão 4</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 4</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <h2>4. Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), calcule e
exiba para o usuário a velocidade em km/h.</h2>
                               <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Conversor</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" name="form_conversor"  action="" method="POST" id="form_conversor">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>M/s -->  Km/h</label>
                        <input type="number"min="1" required  name="valor" id="valor" class="form-control" placeholder="M/s">
                      </div>
                    </div>
                  </div>
                    <div class="row">
                        <!-- textarea -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Resultado:   </label>
                                <textarea class="form-control" rows="3"  disabled><?php  echo conversor($numero)  ?></textarea>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Calcular</button>
                                <button type="reset" class="btn btn-default float-right">Cancelar</button>
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