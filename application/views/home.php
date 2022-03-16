<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <title>Hotel Ku</title>
</head>

<body>



    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand" href="#">Hotel Hebat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#about">About Me</a>
                    <a class="nav-link" href="#hotel1">Kamar Hotel</a>
                    <a class="nav-link" href="#fasilitas">Fasilitas Hotel</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->


    <!-- jumbotron -->
    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <div class="">
            <div class="container px-5">
                <h1>HOTEL HEBAT</h1>
                <img src="<?php echo base_url() ?>assets/img/bg-hotel2.jpg"
                    class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500"
                    loading="lazy">
            </div>
        </div>
    </div>
    <!-- akhir jumbotron -->

    <!-- Aboute Me -->
    <section class="about text-center">
        <div class="container" id="about">
            <h3 class="my-4">About Me</h3>
            <p>Hotel hebat berada di Yogyakarta</p>
        </div>
    </section>
    <!-- Akhir aboute Me -->



    <!-- Box -->
    <div class="kamar" id="hotel1">
        <div class="container">
            <div class="row">

                <?php foreach ($data_tipe_kamar as $value) { ?>

                <div class="col-sm-4">
                    <div class="card shadow-sm">
                        <img src="<?php echo base_url() . $value['gambar']  ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h2 class="card-text"><?php echo $value['nama_kamar_tipe'] ?></h2>
                            <p><?php echo $value['fasilitas'] ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('datadiri') ?>" type="button"
                                class="btn btn-outline-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>
    <!-- Akhir Box -->


    <!--Fasilitas Hotel-->
    <div class="fasilitas py-5" id="fasilitas">
        <div class="container">
            <div class="row">
                <h1 class="text-center mb-3"><strong>Fasilitas</strong></h1>
            </div>
            <div class="row">

                <?php foreach ($data_fasilitashotel as $value) { ?>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="<?php echo base_url() . $value['gambar']  ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-text"><?php echo $value['nama_fasilitas_hotel'] ?></h4>
                            <div class="caption">
                                <p><?php echo $value['keterangan'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Akhir gallery -->

    <!-- Footer -->
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Keatas</a>
            </p>
            <p>Kunjungi <a href=""></a> kami untuk update info terbaru tentang Hotel Hebat
            <p>
            <p class="mb-0">Copyright &copy; 2022 Hotel Hebat. All right reserved.</p>
        </div>
    </footer>
    <!-- Akhir footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin
    \}="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>