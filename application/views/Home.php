<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIPADI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('bizland/mb.png'); ?>" rel="icon">

  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('bizland/assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link href="<?php echo base_url('bizland/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('bizland/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('bizland/assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('bizland/assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('bizland/assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>        
        <script src="<?php echo base_url('assets/vendor/popper.js/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>                     
        <script src="<?php echo base_url('assets/vendor/datatables/datatables.js'); ?>"></script>
        <script src="<?php echo base_url('assets/vendor/mask/jquery.mask.js'); ?>"></script>
        <script src="<?php echo base_url('assets/vendor/mask/jquery.maskMoney.min.js'); ?>"></script>
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('bizland/assets/css/style.css'); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.6.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
     
    
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#info">Info Penyakit Dan Hama</a></li>
          <li><a class="nav-link scrollto" href="#petunjuk">Petunjuk</a></li>
          <li><a class="nav-link scrollto " href="<?php echo base_url('konsultasi/input_biodata'); ?>">Diagnosa</a></li>
           <li><a class="nav-link scrollto " href="<?php echo base_url('auth/login'); ?>">Login</a></li>
        </ul>
        <i class="fa fa-server mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background-image: url(<?php echo base_url('bizland/assets/img/padi.jpg'); ?>">
    <div class="container" data-aos="zoom-out" data-aos-delay="100" >
    <!--   <h1>Selamat Datang Di </h1> -->
      <p style="color:black; text-align: center; font-family:Times New Roman; font-size:30px">Sistem Pakar Diagnosis Penyakit Dan Hama Pada Padi</p>
        <p style="color:black; text-align: center; font-family:Times New Roman; font-size:20px">Solusi cepat dan tepat menangani padimu</p>
     <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            
    </div>

  </section><!-- End Hero -->

  <main id="main">
  <section id="info"><center><h3>Daftar Hama Dan Penyakit</h3></center>
    <br>
  <div class="row">
  <?php $no = 0; foreach($opr as $row): ?>
  
      <div class="col-md-3" data-aos="fade-right">
        <div class="card text-center">
         <img src="gambar/<?php echo $row->gambar;?>"  width="300px" height="200px">
          <div class="card-block">
            <h4 class="card-title"><h3 class="bg-keterangan"><?php echo $row->nama_hmp;?>
            <p>
             <a href="" data-toggle="modal" data-target="#modal_edit<?php echo $row->id;?>" class="btn btn-primary">Detail</a></p>
          </div>
        </div>
        <hr>
      </div>
       <?php endforeach; ?>

       <?php 
        foreach($edit->result_array() as $i):
            $kd_hmp=$i['kd_hmp'];
            $nama_hmp=$i['nama_hmp'];
             $deskripsi=$i['deskripsi'];
              $jenis=$i['jenis'];
               $gambar=$i['gambar'];
                   $id=$i['id'];
         
        ?>
        <div class="modal fade" id="modal_edit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Detail <?php echo $jenis;?> <?php echo $nama_hmp;?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
               
            </div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('hama_penyakit/edit'); ?>">
                <div class="modal-body">

                    <div class="form-group">
                    
                          <img src="gambar/<?php echo $gambar;?>" width="300px" height="200px">

                    </div>
                    <br>
                     <div class="form-group">
                         <p><?php echo $jenis;?> : <?php echo $nama_hmp;?> (<?php echo $kd_hmp;?>)</p>
                    </div>
             <div class="form-group">
                       <label>Deskripsi :</label>
                       <br>
                       <p><?php echo $deskripsi;?></p>
                    </div>
                     
                       <label>Gejala :</label>
                       
      <?php 
        $this->db->select('*');
        $this->db->from('basis_pengetahuan');
          $this->db->join('gejala', 'gejala.id = basis_pengetahuan.gejala_id');
         $this->db->where('penyakit_id',$id);
        $this->db->order_by('kd_bsp', 'DESC');
        $query = $this->db->get();
               
                $no = 0;  foreach ($query->result_array() as $i) :
                      $kd_bsp=$i['kd_bsp'];
                       $nama_gejala=$i['nama_gejala'];
                           
                    
              ?>

       <table id="tbl-list">
        <tr>
         <td width="30px"><?php echo ++$no; ?>.</td>
          <td><?php echo $nama_gejala; ?></td>
        </tr>
      </table>
     <?php endforeach; ?>
<br>

       <label>Solusi :</label>
                       
        <?php 
        $this->db->select('*');
        $this->db->from('solusi');
         $this->db->where('kd_hmp',$kd_hmp);
        $this->db->order_by('kd_solusi', 'DESC');
        $query = $this->db->get();
               
                $no = 0;  foreach ($query->result_array() as $i) :
                      $kd_solusi=$i['kd_solusi'];
                      $solusi=$i['solusi'];        
                    
              ?>

       <table id="tbl-list">
        <tr>
         <td width="30px"><?php echo ++$no; ?>.</td>
          <td><?php echo $solusi; ?></td>
        </tr>
      </table>
     <?php endforeach; ?>
                         
                         

                    
</div>                 <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
 <?php endforeach;?>

   </section>
   
    <section id="petunjuk">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <img  src="<?php echo base_url('bizland/assets/img/padi.jpg'); ?>" class="img-fluid" alt="">
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="100">
            <h3>Petunjuk Penggunaan Sistem Pakar </h3>
            <p  style="text-align: justify; text-indent: 0.5in;">
            </p>
          <ul>
              <li>
          
                <div>
                <p>Pilih menu diagnosa dan isi data yang diperintahkan.</p>
                  
                </div>
              </li>
              <li>
             
                <div>
                 <p>Pilih gejala yang dialami pada padi anda.</p>
               
                </div>
              </li>
              <li>
           
                <div>
                  <p>Setelah yakin atas gejala yang dipilih kemudian klik ok</p>
                
                
                </div>
              </li>
              
            </ul>
           
          
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

           
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?php echo base_url('bizland/assets/img/testimonials/steve.jpg'); ?>" class="testimonial-img" alt="">
                <h3>Steve Jobs</h3>
                
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 Jika saya mencoba yang terbaik dan gagal, setidaknya saya telah melakukan yang terbaik
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?php echo base_url('bizland/assets/img/testimonials/jack.jpg'); ?>" class="testimonial-img" alt="">
                <h3>Jack Ma</h3>
                <h4>Ceo Alibaba</h4>
              
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               Berubahlah selagi kamu dalam kondisi terbaikmu, sebelum muncul hal-hal buruk. Akan terlalu lambat untuk membetulkan atap saat musim hujan terlanjur datang. Pinjamlah payung selagi matahari masih bersinar
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?php echo base_url('bizland/assets/img/testimonials/mark.jpg'); ?>" class="testimonial-img" alt="">
                <h3>Mark Zuckerberg</h3>
                <h4>Ceo Facebook</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 Orang yang sukses adalah orang yang selalu menciptakan hal-hal baru serta mencari cara untuk membuat peningkatan
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?php echo base_url('bizland/assets/img/testimonials/jeff.jpg'); ?>" class="testimonial-img" alt="">
                <h3>Jeff Bezos</h3>
                <h4>Ceo Amazon</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Saya tahu bahwa jika saya gagal, saya takkan menyesalinya, tetapi saya tahu satu-satunya yang akan saya sesali adalah jika saya tidak mencoba
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    


   
  
  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Sistem Pakar Penyakit dan Hama Padi </span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
   
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('bizland/assets/vendor/aos/aos.js'); ?>"></script>
  <script src="<?php echo base_url('bizland/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('bizland/assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url('bizland/assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('bizland/assets/vendor/php-email-form/validate.js'); ?>"></script>
  <script src="<?php echo base_url('bizland/assets/vendor/purecounter/purecounter.js'); ?>"></script>
  <script src="<?php echo base_url('bizland/assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('bizland/assets/vendor/waypoints/noframework.waypoints.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('bizland/assets/js/main.js'); ?>"></script>

</body>

</html>
