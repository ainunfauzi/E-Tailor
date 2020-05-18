<!DOCTYPE html>
<html>
  <head>
    <title>Data Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
 
 
  </head>
  <body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('<?php echo base_url()?>assets/img/jahit.jpg');">
 
    <div class="container" class="md-form">
    <?php $this->load->view('menu');?> <!--Include menu-->
      <div class="col-md-12">
        <div class="row">
          <center><h2 style="color: white">Data Pesanan</h2></center>
          <center><?php echo anchor('ctrl_user/tambah_pesanan','Tambah Data'); ?></center><br>
          <?php foreach($tbl_pesanan as $u){ ?>
            <form action="<?php echo base_url(). 'index.php/ctrl_user/update'; ?>" method="post">
              <table style="margin:20px auto;color: white;" class="table">
                <tr>
                  <td>Id Pesanan</td>
                  <td><input type="text" name="id_pesanan" class="form-control" value="<?php echo $u->id_pesanan ?>"></td>
                </tr>
                <tr>
                  <td>Jenis Pakaian</td> 
                  <td><input type="text" name="jenis_pakaian" class="form-control" value="<?php echo $u->jenis_pakaian ?>"></td>
                </tr>
                <tr>
                  <td>Ukuran</td>
                  <td><input type="text" name="Ukuran" class="form-control" value="<?php echo $u->ukuran ?>"></td>
                </tr>
                <tr>
                  <td>Warna</td>
                  <td><input type="text" name="warna" class="form-control" value="<?php echo $u->warna ?>"></td>
                </tr>
                <tr>
                  <td>Jenis Kain</td>
                  <td><input type="text" name="jenis_kain" class="form-control" value="<?php echo $u->jenis_kain ?>"></td>
                </tr>
                <tr>
                  <td>Jumlah</td>
                  <td><input type="text" name="jumlah" class="form-control" value="<?php echo $u->jumlah ?>"></td>
                </tr>
                <tr>
                  <td>Tanggal Pemesanan</td>
                  <td><input type="text" name="tanggal_pemesanan" class="form-control" value="<?php echo $u->tanggal_pemesanan ?>"></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" class="form-control" value="Simpan"></td>
                </tr>
              </table>
            </form> 
          <?php } ?>
        </div>
      </div>
    </div> <!-- /container -->
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
 
  </body>
</html>