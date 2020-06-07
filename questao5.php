<?php

$funcionario    =   1000;
$aumento        =   0.015;
function salario($funcionario1,$aumento1){

$multi          =   ($funcionario1 * $aumento1);
$multi1         =   ($aumento1 * 2);
$total          =   ($funcionario1 + $multi);
$multi2         =   ($total * $multi1);
$totalfinal     =   ($total + $multi2);

return $totalfinal;
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Questão 5</title>
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
            <h1 class="m-0 text-dark">Questão 5</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 5</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <h3><pre>5. Um funcionário recebe aumento salarial anualmente. Sabe-se que:

• Esse funcionário foi contratado em 2015,
 com salário inicial de R$1000,00;
 
• Em 2016 recebeu aumento de 1,5% sobre seu salário inicial;

• A partir de 2017 (inclusive), os aumentos salariais sempre
 corresponderam ao dobro do percentual do ano anterior.</pre></h3>
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Salário</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
    
                    <div class="row">
                        <!-- textarea -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Resultado:</label>
                                <textarea class="form-control" rows="3"  disabled><?php echo "O salário atual do funcionário é: ".salario($funcionario,$aumento) ?></textarea>
                            </div>
                        </div>
                    </div>
            
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