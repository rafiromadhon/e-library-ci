<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
        <!-- Bootstrap Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
        <!-- My CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/style_user.css" />
        <title>Perpustakaan Online | Dashboard</title>
    </head>
    <body id="home">
    <!-- NavBar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>Perpustakaan Online</strong></a>
            <a href="<?= base_url(); ?>index.php/login"><button type="button" class="btn btn-primary">Admin Login</button></a>
        </div>
    </nav>

    <!-- Akhir NavBar -->
    <!-- Jumbotron -->
    <section class="jumbotron text-center">
        <h1 class="display-1"><strong>Perpustakaan Online</strong></h1>
        <p class="lead">Buku adalah jendela Ilmu</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,224L48,202.7C96,181,192,139,288,144C384,149,480,203,576,224C672,245,768,235,864,240C960,245,1056,267,1152,266.7C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2 class="display-3">About Us</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center text-secondary">
                <div class="col-4">
                    <p>
                    Karena setiap lembarnya mengalir berjuta cahaya karena setiap aksara membuka jendela dunia
                    </p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#CFFFDC" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,224C384,235,480,213,576,176C672,139,768,85,864,101.3C960,117,1056,203,1152,240C1248,277,1344,267,1392,261.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir About -->

    <!-- Buku -->
    <section id="projects">
        <div class="container">
            <div class="row text-center mb-5 mt-5">
                <div class="col">
                    <h2 class="display-2"><strong>Asupan Bacaan Terhitz</strong></h2>
                </div>
            </div>
            
            <div class="row row-cols-1 row-cols-md-4 g-2">
                <?php
                $id_num = 1;
                foreach($info_buku as $value){ 
                ?>
                
                <div class="col" style="padding-bottom: 8px">
                    <div class="card text-dark bg-light border-info mb-2">
                        <img src="<?= base_url(); ?>assets/images_dashboard/Book-cover.png" class="card-img-top" alt="..." style="padding: 10px" />
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= $value['judul']; ?></h5>
                                <p class="card-text text-center"><?= $value['kategori_buku']; ?></p>

                                <!-- @MODAL LURRR -->

                                <div class="modal fade" id="exampleModal<?= $id_num ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body col align-self-center">
                                                <div class="card mb-3" style="max-width: 1000px">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="<?= base_url(); ?>assets/images_dashboard/Book-cover.png" class="img-fluid rounded-start" alt="book" />
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h3 class="card-title"><?= $value['judul']; ?></h3>
                                                                <p class="card-text"><?= $value['sinopsis_buku']; ?></p>
                                                                <table width="60%">
                                                                    <tr>
                                                                        <td><b>ISBN</b></td>
                                                                        <td align="right"><?= $value['isbn'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><b>Tahun</b></td>
                                                                        <td align="right"><?= $value['tahun_buku'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><b>Penerbit</b></td>
                                                                        <td align="right"><?= $value['penerbit'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><b>Penulis</b></td>
                                                                        <td align="right"><?= $value['penulis'] ?></td>
                                                                    </tr>
                                                                </table>
                                                                <!-- <ul class="list-group list-group-horizontal-sm">
                                                                    <li class="list-group-item">An item</li>
                                                                    <li class="list-group-item">A second item</li>
                                                                </ul>
                                                                <ul class="list-group list-group-horizontal-md">
                                                                    <li class="list-group-item">An item</li>
                                                                    <li class="list-group-item">A second item</li>
                                                                </ul>
                                                                <ul class="list-group list-group-horizontal-lg">
                                                                    <li class="list-group-item">An item</li>
                                                                    <li class="list-group-item">A second item</li>
                                                                </ul> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- @ ENTEK MODALE LURRR  -->

                                <div class="text-center"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $id_num ?>">Selengkapnya</button></div>
                        </div>
                    </div>
                </div>
                    
                <?php 
                $id_num++;
            } ?>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffffff" fill-opacity="1" d="M0,256L48,234.7C96,213,192,171,288,165.3C384,160,480,192,576,208C672,224,768,224,864,192C960,160,1056,96,1152,90.7C1248,85,1344,139,1392,165.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Buku -->

    <!-- Request -->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Request Buku</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" />
                        </div>
                        <div class="mb-3">
                            <label for="Pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="Pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0dcaf0 " fill-opacity="1" d="M0,160L48,181.3C96,203,192,245,288,218.7C384,192,480,96,576,96C672,96,768,192,864,234.7C960,277,1056,267,1152,234.7C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Request -->

    <!-- Footer -->
    <footer class="bg-info text-white text-center pb-2">
        <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="#" class="text-white fw-bold">Harry N Friends</a></p>
    </footer>
    <!-- Akhir Foother -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>
