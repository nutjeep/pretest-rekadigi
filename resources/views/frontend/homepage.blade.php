@extends('frontend.main')

@section('content')
<div class="section section-1" id="feature">
  <div class="section-title">
    <h2 class="text-center">Fitur Populer</h2>
    <p class="text-center">Nikmati berbagai fitur menarik yang kami berikan</p>
  </div>
  <div class="section-content">
    <div class="card">
      <div class="card-body">
        <div class="image bg-warning"><img src="img/kasir.png" alt="Mesin kasir"></div>
      </div>
      <div class="card-footer">
        <h3>Mesin kasir</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="image bg-warning"><img src="img/barcode.png" alt="Scan Barcode"></div>
      </div>
      <div class="card-footer">
        <h3>Scan Barcode</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="image bg-warning"><img src="img/kurir.png" alt="Daftar Kurir"></div>
      </div>
      <div class="card-footer">
        <h3>Daftar Kurir</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="image bg-warning"><img src="img/opname.png" alt="Stock Opname"></div>
      </div>
      <div class="card-footer">
        <h3>Stock Opname</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="image bg-warning"><img src="img/thermal.png" alt="Print Thermal"></div>
      </div>
      <div class="card-footer">
        <h3>Print Thermal</h3>
      </div>
    </div>
  </div>
</div>

<div class="section section-2" id="category">     
  <div class="section-title">
    <h2 class="text-center">Kategori Toko</h2>
    <p class="text-center">Apapun jenis tokomu dapat bergabung bersama gas</p>
  </div>
  <div class="section-content">
    <div class="card">
      <div class="card-body">
        <div class="image"><img class="img-fluid" src="img/section2-kelontong.jpg" alt=""></div>
      </div>
      <div class="card-footer">
        <h3><a href="">Toko Kelontong</a></h3>
        <p class="text-truncate"><a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, cum.</a></p>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="image"><img class="img-fluid" src="img/section2-bangunan.jpg" alt=""></div>
      </div>
      <div class="card-footer">
        <h3><a href="">Toko Bangunan</a></h3>
        <p class="text-truncate"><a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, cum.</a></p>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="image"><img class="img-fluid" src="img/section2-pakaian.jpg" alt=""></div>
      </div>
      <div class="card-footer">
        <h3><a href="">Toko Pakaian</a></h3>
        <p class="text-truncate"><a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, cum.</a></p>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="image"><img class="img-fluid" src="img/section2-warung.jpg" alt=""></div>
      </div>
      <div class="card-footer">
        <h3><a href="">Warung Makanan</a></h3>
        <p class="text-truncate"><a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, cum.</a></p>
      </div>
    </div>
  </div>
</div>

<div class="section section-3" id="maps">
  <div class="section-title">
    <h2 class="text-center">Fitur Maps</h2>
    <p class="text-center">Aplikasi Gas akan membantumu dalam memantau stok produk tokomu dan menjangkau customer yang lebih luas</p>
  </div>
  <div class="section-content bg-white p-5 d-flex justify-content-center">
    <div class="image"><img class="img-fluid" src="img/section3-map.png" alt=""></div>
  </div>
</div>

<div class="section section-4" id="promotion"> 
  <div class="raw raw-1">
    <div class="col-lg-6 col-md-6">
      <div class="image">
        <img class="img-fluid" src="img/section4-promotion-1.png" alt="">
      </div>            
    </div>
    <div class="col-lg-6 col-md-6">
      <div class="promotion-tagline">
        <button class="btn btn-warning btn-lg mb-3 shadow shadow-md"><a class="text-decoration-none text-dark" href="">Daftar Toko</a></button>
        <h2>Daftarkan<br>Tokomu Segera!</h2>
        <div class="download promotion-download mt-3">
          <div class="fw-semibold">Unduh</div>
          <div><a href="" class="text-decoration-none"><img class="img-fluid google-play" src="img/google-play.png" alt="GAS Apps"></a></div>
        </div>
      </div>
    </div>
  </div>
   
  <div class="raw raw-2">
    <div class="col-lg-6 col-md-6">
      <div class="promotion-tagline">
        <button class="btn btn-warning btn-lg mb-3 shadow shadow-md"><a class="text-decoration-none text-dark" href="">Daftar Toko</a></button>
        <h2>Download<br>Sekarang!</h2>
        <div class="download promotion-download mt-3">
          <div class="fw-semibold">Unduh</div>
          <div><a href="" class="text-decoration-none"><img class="img-fluid google-play" src="img/google-play.png" alt="GAS Apps"></a></div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6">
      <div class="image">
        <img class="img-fluid" src="img/section4-promotion-2.png" alt="">
      </div>
    </div>
  </div>    
</div>

<div class="section section-5 d-flex flex-column justify-content-center" id="about"> 
  <div class="section-title">
    <h2 class="text-center">Tentang Kami</h2>
    <p class="text-center">GAS adalah aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli lebih luas. <br> Melalui gerakan <span style="color: rgb(214, 139, 0);">#AyoBelanjaTokoTetangga</span> <br> GAS mengajak untuk menjelajah dan mendukung usaha-usaha di sekitarmu.</p>
  </div>
  <div class="social-media d-flex justify-content-center">
    <a href=""><i class="bi bi-instagram"></i></a>
    <a href=""><i class="bi bi-facebook"></i></a>
  </div>   
</div>

<div class="section section-6" id="carrier">      
  <div class="section-title">
    <h2 class="text-center">Temukan Karir Impianmu</h2>
    <p class="text-center">Mari bergabung bersama kami. <br> Jadilah bagian dari kami dan kembangkan bakat, ide kreatifmu dalam GAS</p>
  </div>  
  <div class="section-content">
    <div class="raw">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="image">
          <img class="img-fluid" src="img/section6-image1.png" alt="">
        </div>
        <div class="text">
          <div class="title">
            <h3>Marketing Communication</h3>
            <p>Ayo nikmati beragam fitur yang dapat memberikan kemudahan untuk tokomu, dan mulai mengembangkan bisnis toko online bersama kami.</p>
            <a href="" class="btn btn-warning">Baca selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="image">
          <img class="img-fluid" src="img/section6-image2.png" alt="">
        </div>
        <div class="text">
          <div class="title">
            <h3>Marketing Communication</h3>
            <p>Ayo nikmati beragam fitur yang dapat memberikan kemudahan untuk tokomu, dan mulai mengembangkan bisnis toko online bersama kami.</p>
            <a href="" class="btn btn-warning">Baca selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    <div class="raw">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="image">
          <img class="img-fluid" src="img/section6-image3.png" alt="">
        </div>
        <div class="text">
          <div class="title">
            <h3>Marketing Communication</h3>
            <p>Ayo nikmati beragam fitur yang dapat memberikan kemudahan untuk tokomu, dan mulai mengembangkan bisnis toko online bersama kami.</p>
            <a href="" class="btn btn-warning">Baca selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="image">
          <img class="img-fluid" src="img/section6-image4.png" alt="">
        </div>
        <div class="text">
          <div class="title">
            <h3>Marketing Communication</h3>
            <p>Ayo nikmati beragam fitur yang dapat memberikan kemudahan untuk tokomu, dan mulai mengembangkan bisnis toko online bersama kami.</p>
            <a href="" class="btn btn-warning">Baca selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>   
</div>
@endsection