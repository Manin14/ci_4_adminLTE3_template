
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->


   <!-- ini head -->
 <?= $this->include('Template/head') ?>
  <!-- ini akhir head -->

 <style>
  button {
    background-color:red;
    border-radius: 10px;
  }
  </style>


</head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">


  <!-- Navbar -->
  <?= $this->include('Template/navbar') ?>
  <!-- /.navbar -->



  <!-- Main Sidebar Container -->
  <!-- ini sidebar -->
  <?= $this->include('Template/sidebar') ?>
  <!-- ini akhir sidebar -->
 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Contact </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->





   <!-- Main content -->
   <section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-body row">
    <div class="col-5 text-center d-flex align-items-center justify-content-center">
      <div class="">
            
          <img src="/AdminLTE/dist/img/me.jpg" class="img-circle elevation-4" alt="User Image" width="80%">

      </div>
    </div>
    <div class="col-7">
      <div class="form-group">
        <label for="inputName">Name</label>
        <input type="text" id="inputName" class="form-control" />
      </div>
      <div class="form-group">
        <label for="inputEmail">E-Mail</label>
        <input type="email" id="inputEmail" class="form-control" />
      </div>
      <div class="form-group">
        <label for="inputSubject">Subject</label>
        <input type="text" id="inputSubject" class="form-control" />
      </div>
      <div class="form-group">
        <label for="inputMessage">Message</label>
        <textarea id="inputMessage" class="form-control" rows="4"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Send message">
      </div>
    </div>
  </div>
</div>

</section>
<!-- /.content -->










    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->


 <!-- ini script -->
 <?= $this->include('Template/script') ?>
  <!-- ini akhir script -->


  </body>
</html>