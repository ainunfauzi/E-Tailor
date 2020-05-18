<!DOCTYPE html>
<html>
  <head>
    <title>Data Jurusan</title>
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
          <h3 align="center" style="color: white"><b>MASUKAN DATA PAKAIAN</b></h3>
           <div class="jumbotron col-md-6" style="margin-left: 270px">
             <form method="post" action="<?php echo base_url('index.php/ctrl_admin/insert_pesanan'); ?>">
              <div class="form-group">
                <label for="nama_siswa">Jenis Pakaian :</label>
                <input type="text" name="jenis_pakaian" class="form-control" placeholder="Jenis Pakaian" id="jenis_pakaian" required>
              </div>
              <div class="form-group">
                <label for="tgl_lahir">Ukuran :</label>
                <input type="text" name="ukuran" class="form-control" placeholder="Ukuran" id="ukuran" required>
              </div>
              <div class="form-group">
                <label for="asal_sekolah">Warna :</label>
                <input type="text" name="warna" class="form-control" placeholder="Warna" id="warna" required>
              </div>
              <div class="form-group">
                <label for="alamat">Jenis Kain :</label>
                <input type="text" name="jenis_kain" class="form-control" placeholder="Jenis Kain" id="jenis_kain" required>
              </div>
              <div class="form-group">
                <label for="email_siswa">Jumlah :</label>
                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" id="jumlah" required>
              </div>
              <div class="form-group">
                <label for="nohp_siswa">Tanggal Pemesanan :</label>
                <input type="text" name="tanggal_pemesanan" class="form-control" placeholder="Tanggal Pemesanan" id="tanggal_pemesanan" required>
              </div>
                 <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </form>
           </div>
        </div>  
      </div>
    </div> <!-- /container -->
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
 
  </body>
</html>