<html>
  <head>
    <title> Listes des inscriptions</title>
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
              <h1 class="m-0 text-dark">Listes des Produits</h1>
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
      <br/>
      <br/>



      <!-- /.content-header -->



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h4 class = "mt-2 text-primary">Tous les produits !</h4>
        </div>
        <div class="col-lg-6">
            <button type ="button" class = "btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addModal"><i class="fas fa-user-plus fa-lg">&nbsp;</i>Nouveau produit</button>
            <a href="#" class="btn btn-success m-1 float-right"><i class="fas fa-table fa-lg"></i>&nbsp;Export  to exel</a>
        </div>
     </div>
    <!-- dataTable -->
    <hr class="my-1">
     <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive" id ="showUser">
            <table class="table table-striped table-sm table-bordered">
              <thead>
                <tr class ="text-center">
                  <th>ID</th>
                  <th>Titre</th>
                  <th>Description</th>
                  <th>Quantite</th>
                  <th>Prix</th>
                  <th>Type</th>
                  <th>Categorie</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody >

              <?php for($i = 1;$i<=100; $i++): ?>
                <tr class="text-center text-secendry">
                  <td><?= $i; ?></td>
                  <td>T-shirt <?= $i?></td>
                  <td>blabla <?= $i?></td>
                  <td>5 <?= $i ?></td>
                  <td>60$<?= $i?></td>
                  <td>simple</td>
                  <td>Sport</td>
                  <td>
                  <a href="#" title ="View Details" class ="text-success"><i class ="fas fa-info-circle fa-lg "></i>&nbsp;&nbsp;</a>
                  <a href="#" title ="Edit user" class ="text-primary"><i class ="fas fa-edit fa-lg "></i>&nbsp;&nbsp;</a>
                  <a href="#" title ="Delet user" class ="text-danger"><i class ="fas fa-trash-alt fa-lg "></i>&nbsp;&nbsp;</a>

                  </td>
                </tr>
              <?php endfor; ?>
              </tbody>
            </table>
      </div>
        </div>
     </div>
</div>
<!-- MOOODEL -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Nouveau produit</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
<!-- Modal body -->
<div class="modal-body px-4">
          <form action="" method="post" id="form-data">
          <div class="form-group">
          <input type="text" name="fname" class="form-control" placeholder="Nom du produit" requared>
          </div>
          <div class="form-group">
          <input type="text" name="lname" class="form-control" placeholder="Description" requared>
          </div>
          <div class="form-group">
          <input type="tel" name="phone" class="form-control"  placeholder="Quantite" requared>
          </div>
          <div class="form-group">
          <input type="tel" name="Pirx" class="form-control"  placeholder="Prix" requared>
          </div>
          <div class="form-group">
          <input type="tel" name="Pirx" class="form-control"  placeholder="Prix Promo" requared>
          </div>
          <h4>Type</h4>
          <div>
          <input type="checkbox" id="scales" name="scales" checked>
          <label for="scales">Produit simple</label>
          </div>
          <div>
          <input type="checkbox" id="scales" name="scales"checked>
          <label for="scales">Telechargable</label>
          </div>
          <div>
          <input type="checkbox" id="horns" name="horns">
          <label for="horns">Virtuel</label>
          <br/>
          <br/>
          <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Categorie</label>
                        <select class="form-control">
                          <option>Electro</option>
                          <option>Vetement</option>
                          <option>accesoires</option>
                          <option>Beauté</option>
                          <option>Sport</option>
                        </select>
                      </div>
                    </div>
            </div>
            <br/>
          <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Tags</label>
                        <select class="form-control">
                          <option>x</option>
                          <option>x</option>
                          <option>x</option>
                          <option>x</option>
                          <option>x</option>
                        </select>
                      </div>
                    </div>
            </div>

          <br/>
          <div class="form-group">
          <label> Importer une image</label>
          <input type="file"  id="avatar" name="avatar" accept="image/png, image/jpeg">
          </div>
          <div class="form-group">

          <input type="submit" name ="insert" id ="insert" value ="Ajouter" class ="btn btn-Primary btn-block">
          </div>
          </form>
        </div>

    <!-- /.control-sidebar -->
    <!-- Main Footer -->

</div>



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
