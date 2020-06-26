<?php
//valores informados pelo o usuário
$valor  =  $_POST['valor'];
$valor1 =  $_POST['valor1'];
$opera  =  $_POST['operacao'];


//Escolhendo operação
if ($opera == "+" ){
    //soma
$opp =($valor + $valor1);
}
elseif ($opera == "-"){
    //multiplicação
    
    $opp  =($valor - $valor1);
    }
elseif ($opera == "*"){
//multiplicação

$opp  =($valor * $valor1);
}
elseif($opera == "/"){
//divisão

$opp   =($valor / $valor1);
}
else {
   $opp = "Escolha uma operação";
}
?>
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
            <h1 class="m-0 text-dark">Questão 8</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 8</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
                <h2>8. Crie um algoritmo em que o usuário escolha uma operação (soma, subtração, multiplicação ou
divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em
cada um dos números</h2>
                    <!-- Horizontal Form -->
            <div class="card card-dark ">
                <div class="card-header">
                    <h3 class="card-title">Calculadora </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_media" id="form_media" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="card-body">
                <div class="row">
                  <div class="col">
                    <input type="number" name="valor" id="valor" class="form-control" placeholder="A. valor">
                  </div>
                  <div class="col">
                    <input type="text"  name="operacao" id="operacao" class="form-control" placeholder="Ex: +">
                  </div>
                  <div class="col">
                    <input type="number"  name="valor1" id="valor1" class="form-control" placeholder="B. valor">
                  </div>
                </div>
              </div>
              <div class="card-body">
    
                    <div class="row">
                        <!-- textarea -->
                        <div class="col-sm">
                            <div class="form-group">
                                <label>Resultado:</label>
                                <textarea class="form-control" rows="3"  disabled><?php echo number_format($opp,2)?></textarea>
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