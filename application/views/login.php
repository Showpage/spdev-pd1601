<nav class="navbar navbar-default">
  <div class="container-fluid bg-primary">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     
    <a class="navbar-brand" href="admin.html"><?php $title ?></a>
      <!-- Collect the nav links, forms, and other content for toggling -->
    </div>
    
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-3 col-sm-push-4 margin-60">
    <p class="lead">Enter your details</p>
    <form action="<?php echo base_url('admin/bookings'); ?>" class="form-group">
      <div >
       
        <input class="form-control margin-10" type="text" placeholder="Username">
        <input class="form-control margin-10" type="password" placeholder="Password">
      </div>
      <div class="margin-10">
      <a href="<?php echo base_url('index.php/booking/booking_index'); ?>"><input class="form-control btn btn btn-success" name="submit" id="search" value="Log In"></a>
        <p class="small">Authentication not required - just click and go.</p>
      </div>
 </form>
    </div>
    
  </div>

  <div>
  <hr class="margin-60">
  <div class="row">
  <div class="text-left col-md-6">
    <!--<p><a href="#">Preference Settings</a></p>-->
  </div>
  <div class="text-right col-md-6 small">
    <p>Copyright &copy; 2015 &middot; All Rights Reserved.</p>
  </div>
  </div>
  
  <div class="row">
  <span class="col-lg-12">
  <h2>Notes:</h2>
  <p>Admin users will be managed via settings page</p>
  </span>
  </div>
</div>
</div>
