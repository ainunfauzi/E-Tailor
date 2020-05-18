<!DOCTYPE html>
<html>
  <head>
    <title>Data Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <style>
    .file {
      visibility: hidden;
      position: absolute;
    }
    </style>
 
  </head>
  <body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('<?php echo base_url()?>assets/img/jahit.jpg');">
 
    <div class="container" class="md-form">
    <?php $this->load->view('menu');?> <!--Include menu-->
      <div class="col-md-12">
        <div class="row">
          <center><h2 style="color: white">Data Pesanan</h2></center>
          <center><button class="btn-info" style="height: 30px"><?php echo anchor('ctrl_user/tambah_pesanan','Tambah Data'); ?></button></center><br>
          <table class="table table-striped table-bordered">
            <tr>
              <th>No</th>
              <th>Jenis Pakaian</th>
              <th>Ukuran</th>
              <th>Warna</th>
              <th>Jenis Kain</th>
              <th>Jumlah</th>
              <th>Tanggal Pemesanan</th>
              <th>Option</th>
            </tr>
            <?php 
            $i=1;
            foreach($tbl_pesanan as $s){ 
            ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $s->jenis_pakaian ?></td>
              <td><?php echo $s->ukuran ?></td>
              <td><?php echo $s->warna ?></td>
              <td><?php echo $s->jenis_kain ?></td>
              <td><?php echo $s->jumlah ?></td>
              <td><?php echo $s->tanggal_pemesanan ?></td>
              <td>
                  <?php echo anchor('ctrl_user/edit/'.$s->id_pesanan,'Edit'); ?>
                  <?php echo anchor('ctrl_user/hapus/'.$s->id_pesanan,'Hapus'); ?>
              </td>
            </tr>
            <?php $i++;}?>
          </table>
        </div>
      </div>
    </div> <!-- /container -->
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
 
  </body>
</html>