<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
          <a class="navbar-brand" href="#">Hotel Hebat</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="konfirmasinav">
            <div class="navbar-nav ms-auto">
            </div>
          </div>
        </div>
      </nav>

      <div class="title text-center">
        <h1>Konfirmasi</h1>
        <p>Silahkan screenshot hasil konfirmasi sebagai tanda berhasil melakukan reservasi kamar</p>
      </div>
  <!-- Table -->
            <table class="table table-info table-striped">
              <thead>
              <tr>
                <td><strong>NIK</strong></td>
                <td><?php echo $konfirmasi_booking['nik']; ?></td>
              </tr>
              <tr>
                <td><strong>Kode Booking</strong></td>
                <td><?php echo $konfirmasi_booking['kode_booking']; ?></td>
              </tr>
              <tr>
                <td><strong>Nama Lengkap</strong></td>
                <td><?php echo $konfirmasi_booking['nama_depan']." ".$konfirmasi_booking['nama_belakang'] ?></td>
              </tr>
              <tr>
                <td><strong>Tipe Identitas</strong></td>
                <td><?php echo $konfirmasi_booking['tipe_identitas']; ?></td>
              </tr>
              <tr>
                <td><strong>Nomor Identitas</strong></td>
                <td><?php echo $konfirmasi_booking['nomor_identitas']; ?></td>
              </tr>
              <tr>
                <td><strong>Kewarganegaraan</strong></td>
                <td><?php echo $konfirmasi_booking['kewarganegaraan']; ?></td>
              </tr>
              <tr>
                <td><strong>Alamat</strong></td>
                <td><?php echo $konfirmasi_booking['alamat']; ?></td>
              </tr>
              <tr>
                <td><strong>No HP</strong></td>
                <td><?php echo $konfirmasi_booking['no_hp']; ?></td>
              </tr>
              <tr>
                <td><strong>Email</strong></td>
                <td><?php echo $konfirmasi_booking['email']; ?></td>
              </tr>
              <tr>
                <td><strong>Tanggal In</strong></td>
                <td><?php echo $konfirmasi_booking['tanggal_in']; ?></td>
              </tr>
              <tr>
                <td><strong>Jam In</strong></td>
                <td><?php echo $konfirmasi_booking['jam_in']; ?></td>
              </tr>
              <tr>
                <td><strong>Tanggal out</strong></td>
                <td><?php echo $konfirmasi_booking['tanggal_out']; ?></td>
              </tr>
              <tr>
                <td><strong>Jam Out</strong></td>
                <td><?php echo $konfirmasi_booking['jam_out']; ?></td>
              </tr>
              </thead>
            </table>
            <div class="text-center">
              <a href="<?php echo base_url('') ?>">Kembali</a>
            </div>
    <!-- Footer -->
    <footer class="text-muted py-5">
            <div class="container">
              <p class="float-end mb-1">
                <a href="#">Keatas</a>
              </p>
              <p>Kunjungi <a href=""></a> kami untuk update info terbaru tentang Hotel Hebat<p>
              <p class="mb-0">Copyright &copy; 2022 Hotel Hebat. All right reserved.</p>
            </div>
          </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>