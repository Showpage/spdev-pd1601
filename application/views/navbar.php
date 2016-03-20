<nav class="navbar navbar-default">
  <div class="container-fluid bg-primary">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="admin.html"><?php echo $page_title ?></a>
      <!-- Collect the nav links, forms, and other content for toggling -->
    </div>
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url('index.php/booking/booking_index'); ?>">Bookings</a></li>
      <li><a href="<?php echo base_url('index.php/booking/customer_index'); ?>">Customers</a></li>
      <!-- <li><a href="<?php echo base_url('index.php/venue/pricing_index'); ?>">Pricing</a></li> -->
      <li><a href="<?php echo base_url('index.php/venue/venue_index'); ?>">Venues</a></li>
      <li><a href="<?php echo base_url('index.php/team/team_index'); ?>">Teams</a></li>
      <li><a href="<?php echo base_url('index.php/admin/report_index'); ?>">Reports</a></li>
      <li><a href="<?php echo base_url('index.php/affiliate/affiliate_index'); ?>">Affiliates</a></li>
      <li><a href="<?php echo base_url('index.php/admin/login'); ?>" class="bg-logout">Log Out</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
	  <li><a href="<?php echo base_url('index.php/admin/rule_index'); ?>">Rules</a></li>
	  <li><a href="<?php echo base_url('index.php/admin/language_index'); ?>">Language</a></li>
            <!--<li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>-->
          </ul>
        </li>
      </ul>
      
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
