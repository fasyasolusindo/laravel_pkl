@extends ('layout')

@section('content')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fasyasolusindo.com</title>


  <!---------------------SCRIPTTTTTTTTTTTTT-------->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>




 
 <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!--add button-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Select2 -->
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-green navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../img/FPS.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-bold">Fasya Pratama</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Mohammad Yasin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input_penawaran" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Penawaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Penawaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Penawaran</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
  <div class="content-wrapper">


          <!--/.col (left) -->
          <div class="container-fluid">
          <!-- right column -->
          <div class="col-md-9">
            <!-- general form elements disabled -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Penawaran Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="/penawaran_post" method="post">
                  <div class="row">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-sm-10">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Customer</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="nama_customer">
                      </div>
                    
                   
               

                  <div class="row">
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Pilih barang</label>
                        <select class="form-control select2" id="pilih_barang" name="barang"  data-placeholder="Pilih Barang">
                    @foreach($inventory as $inv)
                    <option value="{{ $inv->nama_produk }}">{{ $inv->nama_produk}}</option>
                    @endforeach
                 </select>
                     </div>
                   </div>

                     <div class="col-sm-3">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text"  class="form-control" id="harga_barang" name="harga_barang" data-placeholder="Harga Barang" readonly="readonly" disabled="" >
                        </input>
                      </div>
                     </div>

                     <div class="col-sm-3">
                      <div class="form-group">
                         <label>Quantity</label>
                        <input type="number" class="form-control formbaru" placeholder="Enter ..." name="quantity" id="quantity">
                      </div>
                    </div>
                   <div class="col-sm-3">
                      <div class="form-group" style="display: none;">
                         <label>SUM</label>
                        <td class="form-control formbaru" placeholder="Enter ..." name="sum" id="sum">
                      </div>
                    </div>
                 
                  <!-------------DYNAMIC FORM-------------------->
                  <div class="d-none field">

                  <div class="row">
                    <div class="col-sm-4">
                        <label>Pilih barang</label>
                        <select class="form-control select2Copy" name="barang" id="pilih_barang" data-placeholder="Pilih Barang">
                    @foreach($inventory as $inv)
                    <option value="{{ $inv->nama_produk }}">{{ $inv->nama_produk}}</option>
                    @endforeach
                 </select>
                    </div>
                     
                     <div class="col-sm-3">
                      <div class="form-group">
                        <label>Harga</label>
                        <select class="form-control select2Copy" id="harga_barang" name="harga_barang" data-placeholder="Harga Barang">
                   
                 </select>
                     </div>
                   </div>
                     <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                         <label>Quantity</label>
                        <input type="number" class="form-control" placeholder="Enter ..." >
                     </div>
                 </div>
                    
              </div> 

  

                   <!--------------------TOMBOL DELETE------------------->
                   <a href="javascript:void(0);"button type="button" name="add" id="remove" class="btn btn-danger" title="Remove"><i class="fas fa-minus"></i></button></a> 
                 </div>
                 </div>
               </div>
             </div>
            <!--------------------------TOMBOL ADD------------------------------->  
            <a href="javascript:void(0);"button type="button" title="Add"  name="add" id="add_button" class="btn btn-success back-to-top" style="margin-bottom: 53%; margin-right:-0%; position: absolute;"><i class="fas fa-plus"></i></button></a>
                    
               <!-------------------------------------------------------------> 
              <div class="row">
                <div class="col-sm-5">
                      <!-- textfield -->
                      <div class="form-group">
                        <label>Total Harga</label>
                        <output class="form-control" rows="3" placeholder="" name="total_harga" id="total_harga"></output>     
                      </div>
                      
               </div>
              </div>
                    
                  <div class="row">
                    <div class="col-sm-11">
                      <!-- textfield -->
                      <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="3" placeholder="Tambah Keterangan ..." name="keterangan"></textarea>
                      </div>
                    </div>
                    </div>
                  
                  
                <!------------TOMBOL FOOTER--------->
                      
                      <button type="submit" name="btSubmit" id="btSubmit" class="btn btn-primary" ">Checkout</button>
                       <a href="/input_penawaran/cetak_pdf" target="_blank" class="btn btn-danger float-right"><i class="fas fa-download"></i> Simpan PDF
                  </button></a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
              <!-------------/card-body ------------->
              
                
                 
                
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.5
    </div>
    <strong>Copyright &copy; 2019 <a href="http://fasyasolusindo.com">Fasyapratamasolusindo.com</a>.</strong> All rights
    reserved.
  </footer>

@endsection

@section('footer')
<!--------------------AUTOFILL----------------->
<script type="text/javascript">
  $('#pilih_barang').change(function() {
  $.ajax({
    url: '/Produk/' + $(this).val(),
    type: 'get',
    response: {},
    success: function(response) {
      if (response.success == true) {
        $('#pilih_barang').value = response.fill;
      } else {
        alert('Cannot find price');
      }

    },
    error: function(jqXHR, textStatus, errorThrown) {}
  });
});
</script>


<script type="text/javascript">
   $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    })
</script>
<script type="text/javascript">
  $(document).ready(function(){
    //group add limit
    var maxGroup = 10;
    
    //add more fields group
    $("#add_button").click(function(){
        if($('body').find('.form-control select2').length < maxGroup){
            var fieldHTML = '<div class=" select2Copy">'+$(".field").html()+'</div>';
            $('body').find('.field:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
     //remove fields group
    $("body").on("click","#remove",function(){ 
        $(this).parents(".select2Copy").remove();
    });
});
</script>

<script type="text/javascript">
  function getTotal(){
    var total_harga = 0;
    $('#sum').each(function(){
        total += parseFloat(this.innerHTML)
    });
    $('#total_harga').text(total_harga);
}

getTotal();

$('.quantity').keyup(function(){
    var parent = $(this).parents('row');
    var price = $('#harga_barang', parent);
    var sum = $('#sum', parent);
    var value = parseInt(this.value) * parseFloat(price.get(0).innerHTML||0);
    sum.text(value);
    getTotal();
})
</script>
@endsection