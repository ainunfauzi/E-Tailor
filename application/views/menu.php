<nav class="navbar navbar-inverse"> 
<!--<div class="container-fluid">-->
<div class="collapse navbar-collapse" id="navbarNav">
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav ml-auto">
  <!--Akses Menu Untuk Admin-->
  <?php if($this->session->userdata('akses')=='1'):?>
      <li class="active"><a href="<?php echo base_url().'index.php/controller_page'?>">Home</a></li>
      <li><a href="<?php echo base_url().'index.php/ctrl_admin/datapesanan'?>">Data Pesanan</a></li>
  <!--Akses Menu Untuk pengajar-->
  <?php elseif($this->session->userdata('akses')=='2'):?>
      <li class="active"><a href="<?php echo base_url().'index.php/controller_page'?>">Home</a></li>
      <li><a href="<?php echo base_url().'index.php/ctrl_user/datapesanan'?>">Data Pesanan</a></li>
      <li><a href="<?php echo base_url().'index.php/controller_page/chat'?>">Chat</a></li>
  <?php endif;?>
  </ul>
 
  <ul class="nav navbar-nav navbar-right">
    <li><a href="<?php echo base_url().'index.php/login/logout'?>">Sign Out</a></li>
  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>  