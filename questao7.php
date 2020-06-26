<?php

// números informados pelo o usuário
$val  = $_POST['numero'];
$val1 = $_POST['numero1'];
$y = 0;


//alimentar vetor com 100 posições

for ($i=0; $i<99 ;$i++){

$vetor[$i]  = rand($val,$val1) ;
}

//identificar os numeros pares e armazenar em outro vetor
for ($i=0; $i<99 ;$i++){

//verificar se o número é par
if(($vetor[$i] % 2) ==0){
//limitanto numero de indices
    if($y <= 9 ){

($vetor1[$y] = $vetor[$i]);

    $y++;


}
}
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Questão 7</title>
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
            <h1 class="m-0 text-dark">Questão 7</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 7</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2> 7. Faça um algoritmo que leia 100 números ramdômicos, calcule e mostre a soma dos 10 primeiros números pares.</h2>
                    <!-- Horizontal Form -->
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Intervalo de números</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_consumo" id="form_consumo" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="distancia" class="col-sm-2 col-form-label">Valor A</label>
                        <div class="col-sm">
                        <input type="number" min="1" required class="form-control" id="numero" name="numero" placeholder=" Digite o valor" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="combustivel" class="col-sm-2 col-form-label">Valor B</label>
                        <div class="col-sm">
                        <input type="number" min="1" required class="form-control" id="numero1" name="numero1" placeholder="Digite o valor" required>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                        
                        <div class="row">
                            <!-- textarea -->
                            <div class="col-sm">
                                <div class="form-group">
                                    <label>Resultado:</label>
                                    <textarea class="form-control" rows="3"  disabled>   <?php echo "A soma é ".array_sum($vetor1);?></textarea>
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