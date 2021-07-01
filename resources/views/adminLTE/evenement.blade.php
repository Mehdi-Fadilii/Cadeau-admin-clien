<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
<title> Gestion evenement</title>
 </head>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css"/>

 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Calendrier css -->
  <link rel="stylesheet" href="plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar-bootstrap/main.min.css">
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
    <!-- taables -->

     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Evenement</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
               <button> <i class="fal fa-skull fa-pulse" style="color: #ff922b;"> </i></button><li class="breadcrumb-item active">Starter Page</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </br>
        </br>
        </br>
        <div class="container">
        <div class="row">
        <div class="col-lg-6">
            <h4 class = "mt-2 text-primary">Tous les evenements !</h4>
        </div>
        <div class="col-lg-6">
            <button type ="button" class = "btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addModal"><i class="fas fa-user-plus fa-lg">&nbsp;</i>Nouveau evenements</button>
        </div>
     </div>

          <table class="table">
            <thead class="thead-dark">
               <tr>
                  <th scope="col">ID</th>
                  <th scope="col">AVENEMENT</th>
                  <th scope="col">LISTES</th>
                  <th scope="col">ACTION</th>
                </tr>
              </thead>
            <tbody>
                <tr>
                  <th scope="row">1</th>
                    <td>Mriage</td>
                    <td>12</td>
      <td>
       <a href="#" title ="View Details" class ="text-success"><i class ="fas fa-info-circle fa-lg "></i>&nbsp;&nbsp;</a>
       <a href="#" title ="Edit user" class ="text-primary"><i class ="fas fa-edit fa-lg "></i>&nbsp;&nbsp;</a>
       <a href="#" title ="Delet user" class ="text-danger"><i class ="fas fa-trash-alt fa-lg "></i>&nbsp;&nbsp;</a>
    </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>naissance</td>
      <td>20</td>
      <td>
      <a href="#" title ="View Details" class ="text-success"><i class ="fas fa-info-circle fa-lg "></i>&nbsp;&nbsp;</a>
       <a href="#" title ="Edit user" class ="text-primary"><i class ="fas fa-edit fa-lg "></i>&nbsp;&nbsp;</a>
       <a href="#" title ="Delet user" class ="text-danger"><i class ="fas fa-trash-alt fa-lg "></i>&nbsp;&nbsp;</a>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>anniversaire</td>
      <td>40</td>
      <td>
      <a href="#" title ="View Details" class ="text-success"><i class ="fas fa-info-circle fa-lg "></i>&nbsp;&nbsp;</a>
       <a href="#" title ="Edit user" class ="text-primary"><i class ="fas fa-edit fa-lg "></i>&nbsp;&nbsp;</a>
       <a href="#" title ="Delet user" class ="text-danger"><i class ="fas fa-trash-alt fa-lg "></i>&nbsp;&nbsp;</a>
      </td>
    </tr>
  </tbody>
</table>

</div>

<!-- Mooooooooooooodel -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Nouveau evenement</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
 <!-- Modal body -->
 <div class="modal-body px-4">
          <form action="" method="post" id="form-data">
          <div class="form-group">
          <input type="text" name="fname" class="form-control" placeholder="Titre de l'evenements" requared>
          </div>

          <div class="form-group">
          <label> Importer une image</label>
          <input type="file"  id="avatar" name="avatar" accept="image/png, image/jpeg">
          </div>

          <br/>

          <br/>
      <div class="form-group">
          <input type="submit" name ="insert" id ="insert" value ="Ajouter" class ="btn btn-Primary btn-block">
      </div>
 </form>
</div>

        <!-- LINKS -->
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
<div style ="width = 200px">
<script  type="text/javascript">
$(document).ready(function(){
$('table').DataTable();
});
</script>
</div>
</body>
</html>
