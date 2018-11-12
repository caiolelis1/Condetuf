@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dashboard</title>
    <link rel="stylesheet" href="/css/app.css">


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulário</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Formulário</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">


              <div class="card-header .bg-primary">
                <h3 class="card-title ">Ensino</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="col-10 offset-1">
                  <div class="form-row">
                    <div class="form-group col-md-4 mt-4">
                      <label for="aInternos">Alunos Internos</label>
                      <input min="0" max="1000000" type="number" class="form-control" id="aInternos" placeholder="">
                    </div>
                    <div class="form-group col-md-4 mt-4">
                      <label for="aSemi">Alunos Semi-Internos</label>
                      <input min="0" max="1000000" type="number" class="form-control" id="aSemi" placeholder="">
                    </div>
                    <div class="form-group col-md-4 mt-4">
                      <label for="aExternos">Alunos Externos</label>
                      <input min="0" max="1000000" type="number" class="form-control" id="aExternos" placeholder="">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4 mt-2">
                      <label for="numHabilitacoesAgr"> Agrária/Industrial/Serviços</label>
                      <input min="0" max="1000000" type="number" class="form-control" id="numHabilitacoesAgr">
                    </div>
                    <div class="form-group col-md-4 mt-2">
                      <label for="numHabilitacoesEM">Habilitações Ensino Médio</label>
                      <input min="0" max="1000000" type="number" class="form-control" id="numHabilitacoesEM">
                    </div>
                    <div class="form-group col-md-4 mt-2">
                      <label for="aConcluinte">Alunos Concluintes</label>
                      <input min="0" max="1000000" type="number" class="form-control" id="aConcluinte" placeholder="">
                    </div>
                  </div>    
                </div>
              </form>


         
              <div class="card-header">
                <h3 class="card-title">Recursos Humanos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                  <div class="col-10 offset-1 mt-2">
                    <h2>TAES</h3>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="TAES1gi">1º grau incompleto</label>
                          <input min="0" max="1000000" type="number" class="form-control" id="TAES1gi">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="TAES1gc">1º grau completo</label>
                          <input min="0" max="1000000" type="number" class="form-control" id="TAES1gc">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="TAES2gc">2º grau completo</label>
                          <input min="0" max="1000000" type="number" class="form-control" id="TAES2gc">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="TAESGraduados">Graduação</label>
                          <input min="0" max="1000000" type="number" class="form-control" id="TAESGraduados">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="TAESEspecializacao">Especialização</label>
                          <input min="0" max="1000000" type="number" class="form-control" id="TAESEspecializacao">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="TAESMestDout">Mestrado/Doutorado</label>
                          <input min="0" max="1000000" type="number" class="form-control" id="TAESMestDout">
                        </div>
                      </div>

                    <h2>Docentes</h3>
                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="DocSemGrad">Sem Graduação</label>
                          <input min="0" max="1000000" type="number" class="form-control" id="DocSemGrad" >
                        </div>
                        <div class="form-group col-md-3">
                          <label for="DocComGrad">Com Graduação</label>
                          <input min="0" max="1000000" type="number" class="form-control" id="DocComGrad">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="DocComEsp">Especialização</label>
                          <input min="0" max="1000000" type="number" class="form-control" id="DocComEsp">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="DocComMest">Mestrado/Doutorado</label>
                          <input min="0" max="1000000" type="number" class="form-control" id="DocComMest">
                        </div>
                      </div>
                    </div>
              </form>
        
              <div class="card-header">
                <h3 class="card-title">Infraestrutura</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class= "col-10 mt-2 offset-1">
                  <div class="form-row">
                    <div class="form-group col-md-4 mt-4">
                      <label for="LabsSalBibl">Laboratórios/Salas/Bibliotecas</label>
                      <input min="0" max="1000000" type="number" class="form-control" id="LabsSalBibl" >
                    </div>
                    <div class="form-group col-md-4 mt-4">
                      <label for="AtiAgricolas">Atividades Agrícolas</label>
                      <input min="0" max="1000000" type="number" class="form-control" id="AtiAgricolas">
                    </div>
                    <div class="form-group col-md-4 mt-4">
                      <label for="ProdAgricola">Produção Agrícola</label>
                      <input min="0" max="1000000" type="number" class="form-control" id="ProdAgricola">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6 mt-2">
                      <label for="DemAreas">Demais Áreas</label>
                      <input min="0" max="1000000" type="number" class="form-control" id="DemAreas">
                    </div>
                    <div class="form-group col-md-6 mt-2">
                      <label for="DemAreasN">Demais Áreas Não Construídas</label>
                      <input min="0" max="1000000" type="number" class="form-control" id="DemAreasN">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success mt-4 mb-3 float-right col-2">Enviar</button>
                </div>
              </form>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>



<script> src="/js/app.js"</script>
</html>


@endsection
