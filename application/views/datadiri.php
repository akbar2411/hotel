<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        <!-- My CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

        <!-- AOS -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <!-- Toastr -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">

        <title>Hotel Hebat</title>
    </head>
    <body>

          <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
        <a class="navbar-brand" href="#">Hotel Hebat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
        </div>
        </div>
    </div>
    </nav>

          
          <div class="box py-5">
            <div class="container">
              <div class="alert alert-primary" role="alert">
                Masukkan Data Diri anda terlebih dahulu
              </div>
              <form method="post" action="<?php echo base_url('tamu/simpan') ?>">
                <div class="mb-3">
                  <label for="nik" class="form-label">NIK</label>
                  <input type="text" class="form-control" name="nik">
                </div>
                <div class="mb-3">
                  <label for="nama_depan" class="form-label">Nama Depan</label>
                  <input type="text" class="form-control" name="nama_depan">
                </div>
                <div class="mb-3">
                  <label for="nama_belakang" class="form-label">Nama Belakang</label>
                  <input type="text" class="form-control" name="nama_belakang">
                </div>
                <div class="mb-3">
                  <label for="tipe_identitas" class="form-label">Tipe Identitas</label>
                  <select class="form-control" style="width: 100%;" name="tipe_identitas">
                    <option selected="selected">- Pilih -</option>
                    <option value="KTP">KTP</option>
                    <option value="SIM">SIM</option>
                    <option value="Passport">Passport</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="nomor_identitas" class="form-label">Nomor Identitas</label>
                  <input type="text" class="form-control" name="nomor_identitas">
                </div>
                <div class="mb-3">
                  <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                  <select class="form-control" style="width: 100%;" name="kewarganegaraan">
                    <option selected="selected">- Pilih -</option>
                    <option value="WNI">WNI</option>
                    <option value="WNA">WNA</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" name="alamat">
                </div>
                <div class="mb-3">
                  <label for="no_hp" class="form-label">No HP</label>
                  <input type="text" class="form-control" name="no_hp">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" name="email">
                </div>

                    <div class="mb-3">
                      <label for="tanggal_in" class="form-label"><i class="bi bi-box-arrow-right me-2"></i>Tanggal in</label>
                      <input type="date" class="form-control" name="tanggal_in" id="tanggal_in">
                    </div>
                    <div class="mb-3">
                        <label for="jam_in" class="form-label"><i class="bi bi-box-arrow-right me-2"></i>Jam In</label>
                        <input type="time" class="form-control" name="jam_in" id="jam_in">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_out" class="form-label"><i class="bi bi-box-arrow-left me-2"></i>tanggal out</label>
                        <input type="date" class="form-control" name="tanggal_out" id="tanggal_out">
                    </div>
                    <div class="mb-3">
                        <label for="jam_out" class="form-label"><i class="bi bi-box-arrow-left me-2"></i>jam-out</label>
                        <input type="time" class="form-control" name="jam_out" id="jam_out">
                    </div>
                        <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                    </form>
                    </div>
                </div>
          

         
          <script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
          <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
          <script>
            AOS.init();
          </script>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>