<html>
  <head>
    <title> Liavraison </title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  </head>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css"/>

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Calendrier css -->
  <link rel="stylesheet" href="plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar-bootstrap/main.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar-bootstrap/main.min.css">

  <!-- data table -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css"/>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <body class="hold-transition sidebar-mini">


   <!-- Main Sidebar Container -->
   @include('adminLTE.sidebar');


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Livraison</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <br/>

              </br>
              </br>
<!-- METHODE DE LIVRAISON -->
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h4 class = "mt-2 text-primary">Methode de livraison !</h4>
        </div>
        <div class="col-lg-6">
            <button type ="button" class = "btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addModal"><i class="fas fa-user-plus fa-lg">&nbsp;</i>Creer une methode</button>

            <a href="#" class="btn btn-success m-1 float-right"><i class="fas fa-table fa-lg"></i>&nbsp;Export  to exel</a>
        </div>
     </div>
     <div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Select method</th>
            <th scope="col">Zone</th>
            <th scope="col">Composition</th>
            <th scope="col">Type</th>
            <th scope="col">Couts</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                  <label class="custom-control-label" for="customCheck1">1</label>
              </div>
            </td>
            <td>Maroc</td>
            <td>Rabat, Casa</td>
            <td>Gratuit</td>
            <td>0</td>
          </tr>
          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck2">
                  <label class="custom-control-label" for="customCheck2">2</label>
              </div>
            </td>
            <td>France</td>
            <td>Paris, Lile</td>
            <td>avec code promos</td>
            <td>0</td>
          </tr>
          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck3">
                  <label class="custom-control-label" for="customCheck3">3</label>
              </div>
            </td>
            <td>Afrique</td>
            <td>Maroc, algerie</td>
            <td>Payes</td>
            <td>20 $</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
     </div>
<!-- MOOODEL  dial livraur-->
<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Nouvelle methode de livraison</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
<!-- Modal body -->
<div class="modal-body px-4">
          <form action="" method="post" id="form-data">
          <div class="form-group">
          <input type="text" name="fname" class="form-control" placeholder="Zone" requared>
          </div>
          <div class="form-group">
          <input type="text" name="fname" class="form-control" placeholder="Composition de la Zone" requared>
          </div>

          <div class="form-group">
          <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Type</label>
                        <select class="form-control">
                          <option>Gratuit</option>
                          <option>en Code promo</option>
                          <option>Payes</option>
                        </select>
                      </div>
                    </div>
            </div>          </div>
          <div class="form-group">
          <input type="number" name="phone" class="form-control"  placeholder="Couts" requared>
          </div>

          <br/>


          <div class="form-group">

          <input type="submit" name ="insert" id ="insert" value ="Ajouter" class ="btn btn-Primary btn-block">
          </div>
          </form>
        </div>

    <!-- /.control-sidebar -->
    <!-- Main Footer -->

</div>
<!-- LISTE LIVREUR -->

    <!-- /.control-sidebar -->
    <!-- Main Footer -->





  <!-- Liiikns -->
         <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- JavaS Calendrier -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/fullcalendar/main.min.js"></script>
<script src="plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="plugins/fullcalendar-interaction/main.min.js"></script>
<script src="plugins/fullcalendar-bootstrap/main.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
$('table').DataTable();
});
</script>
  </body>
</html>
