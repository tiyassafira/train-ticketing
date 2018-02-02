<html>
<head>
 <title><?php $status = $this->session->userdata('status');
 echo $status;?></title>

 <link rel="stylesheet" href="<?php echo base_url('gedang/admin/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('gedang/admin/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('gedang/admin/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('gedang/admin/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('gedang/admin/dist/css/skins/_all-skins.min.css'); ?>">
</head>
<body>
  <div class="col-md-4"></div>
  <div class="col-md-4"> 
  <div class="col-md-12" style="color:grey; background-color: #00000015; border-radius: 20px; margin-top:150px;s">
  <h3 align="center">Login Here</h3>

  <form action="<?php echo base_url('login/cek_login'); ?>" method="post">
    <div class="form-group">
      <label>Username :</label>
        <input type="text" class="form-control" name="username" required="true">
    </div>
    <div class="form-group">
      <label>Password :</label>
        <input type="password" class="form-control" name="password" required="true">
    </div>                  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  </div>
  
</body>
</html>