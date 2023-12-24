<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RPP-Maker</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#page-top">RPP MAKER TOOL</a></li>
                <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
                <li class="sidebar-nav-item"><a href="#makerpp">Create RPP</a></li>
                <!-- <li class="sidebar-nav-item"><a href="#services">Services</a></li>
                <li class="sidebar-nav-item"><a href="#portfolio">Portfolio</a></li>
                <li class="sidebar-nav-item"><a href="#contact">Contact</a></li> -->
            </ul>
        </nav>
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">RPP-MAKER</h1>
                <h3 class="mb-5"><em>A Free Tools For Making RPP</em></h3>
                <a class="btn btn-primary btn-xl" href="#makerpp">Make RPP Now</a>
            </div>
        </header>
        <!-- About-->
        <section class="content-section bg-light" id="makerpp">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2>Rencana Pelaksanaan Pembelajaran (RPP)</h2>
                        <p class="lead mb-5">
                        Silahkan isi formulir pembuatan Rencana Pelaksanaan Pembelajaran (RPP) dengan teliti dibawah ini !!
                            <!-- <a href="https://unsplash.com/">Unsplash</a>
                            ! -->
                        </p>
                        
                        <form action="function.php" method="POST">
                            <fieldset>   
                                <legend class="text-center mb-3"><b>IDENTITAS NAMA</b></legend>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="namasekolah"  placeholder="Nama Sekolah">
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="mp" placeholder="Mata Pelajaran">
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="kelas" placeholder="Kelas">
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="waktu" placeholder="Alokasi Waktu (Menit)">
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="pertemuan"  placeholder="Pertemuan Ke -">
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="tahun" placeholder="Tahun Pelajaran">
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="materipokok" placeholder="Materi Pokok / Sub Materi" rows="5"></textarea>
                                    </div>
                            </fieldset>
                            </br>    
                            <fieldset>
                                    <legend class="text-center mb-3"><b>KOMPETENSI DAN INDIKATOR</b></legend>

                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="ki" placeholder="Kompetensi Inti" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="kd" placeholder="Kompetensi Dasar" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="ipk" placeholder="Indikator Pencapaian Kompetensi" rows="5"></textarea>
                                    </div>
                            </fieldset>
                            </br>
                            <fieldset>
                                    <legend class="text-center mb-3"><b>TUJUAN PEMBELAJARAN</b></legend>

                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="tujuan" placeholder="Tujuan Pembelajaran" rows="5"></textarea>
                                    </div>
                            </fieldset>
                            </br>
                            <fieldset>
                                    <legend class="text-center mb-3"><b>MATERI PEMBELAJARAN</b></legend>

                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="matpem" placeholder="Materi Pembelajaran" rows="5"></textarea>
                                    </div> 
                            </fieldset>
                            </br>
                            <fieldset> 
                                    <legend class="text-center mb-3"><b>ALAT MEDIA DAN SUMBER BELAJAR</b></legend>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="alat" placeholder="Alat dan Bahan">
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="media" placeholder="Media">
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="sumber" placeholder="Sumber Pembelajaran" rows="5"></textarea>
                                    </div>
                            </fieldset>
                            </br>
                            <fieldset>  
                                    <legend class="text-center mb-3"><b>MODEL DAN METODE PEMBELAJARAN</b></legend>

                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="model" placeholder="Model Pembelajaran" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="metode" placeholder="Metode Pembelajaran" rows="5"></textarea>
                                    </div>
                            </fieldset>
                            </br>
                            <fieldset>
                                    <legend class="text-center mb-3"><b>LANGKAH-LANGKAH KEGIATAN PEMBELAJARAN</b></legend>
                                    
                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="pendahuluan" placeholder="Kegiatan Pendahuluan" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="waktpn"  placeholder="Waktu Pendahuluan (Menit)">
                                    </div>
                                    
                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="kegiatanliterasi" placeholder="Kegiatan Literasi" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="criticalthinking" placeholder="Critical Thinking" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="collaboration" placeholder="Collaboration" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="communication" placeholder="Communication" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="creativity" placeholder="Creativity" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="waktii"  placeholder="Waktu Kegiatan Inti (Menit)">
                                    </div>

                                   
                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="penutup" placeholder="Kegiatan Penutup" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="waktpp"  placeholder="Waktu Kegiatan Penutup (Menit)">
                                    </div>
                            </fieldset>
                            </br>
                            <fieldset>
                                    <legend class="text-center mb-3"><b>PENILAIAN</b></legend>

                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="penilaians" placeholder="Penilaian Sikap" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="penilaianp" placeholder="Penilaian Pengetahuan" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <textarea class="form-control"  name="penilaiank" placeholder="Penilaian Keterampilan" rows="5"></textarea>
                                    </div>
                            </fieldset>
                            </br>
                            <fieldset>
                                    <legend class="text-center mb-3"><b>TANDA TANGAN</b></legend>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="pembuatan"  placeholder="Kota dan Tanggal RPP">
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="namakepsek"  placeholder="Nama Kepala Sekolah">
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="nipkepsek"  placeholder="Nip Kepala Sekolah">
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control"  name="namaguru" placeholder="Nama Guru">
                                    </div>
                                    <div class="form-group mb-3 justify-content-center">
                                        <input type="text" class="form-control" name="nipguru"  placeholder="Nip Guru">
                                    </div>
                            </fieldset>
                            <div class="form-group mb-3 justify-content-center">
                            <input class="btn btn-primary btn-xl js-scroll-trigger" type="submit" value="Print"/></td>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; Your Website 2023</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        

    </body>
</html>
