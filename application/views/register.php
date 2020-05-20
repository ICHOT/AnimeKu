<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>sb2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>sb2/css/sb-admin-2.min.css" rel="stylesheet">

  <style>
  .by{
    background-repeat: no-repeat;
    background-size: cover;
  }
  .logo{
    width: 20%;
    height: 20%;
  }
</style>

</head>

<body class="by" background="<?= base_url('assets/'); ?>gambar/tmp/saoio.jpg">

  <div class="container">

    <div class="card o-hidden border-0  bg-transparent my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">
                  <!-- <img class="logo" src="<?= base_url('assets/'); ?>gambar/anime/logo3.png"> -->
              </h1>
              </div>
              <form class="user" method="post" action="<?= base_url(''); ?>">
                <div class="form-group">
                <input type="text" class="form-control form-control-user" name="name" id="Name" placeholder="Full Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password1" id="password1" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="password2" id="password2" placeholder="Repeat Password">
                  </div>
                </div>
                <input type="submit"  class="btn btn-primary btn-user btn-block">
                  
               
                
              
              </form>
              
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>sb2/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>sb2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>sb2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>sb2/js/sb-admin-2.min.js"></script>

</body>

</html>
