
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


  .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('/AdminLTE/dist/img/loading_2.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
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
            <h1 class="m-0 text-dark">Dashboard</h1>
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





<button> Submit </button>


<div class="loader"> </div>

<div class="spinner-border text-primary" role="status">
  <span class="sr-only">Loading...</span>
</div>







    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>

 <!-- ini script -->
 <?= $this->include('Template/script') ?>
  <!-- ini akhir script -->


  </body>
</html>