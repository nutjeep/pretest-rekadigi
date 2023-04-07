@extends('frontend.main')

@section('content')
<div class="section section-1" id="feature">
  <div class="section-title">
    <h2 class="text-center">Fitur Populer</h2>
    <p class="text-center">Nikmati berbagai fitur menarik yang kami berikan</p>
  </div>
  <div class="section-content">
    @foreach ($features as $feature)
      <div class="card">
        <div class="card-body">
          <div class="image bg-warning"><img src="{{ asset('storage/' . $feature->image) }}" alt="{{ $feature->feature_title }}"></div>
        </div>
        <div class="card-footer">
          <h3>{{ $feature->feature_title }}</h3>
        </div>
      </div>
    @endforeach
  </div>
</div>

<div class="section section-2" id="category">     
  <div class="section-title">
    <h2 class="text-center">Kategori Toko</h2>
    <p class="text-center">Apapun jenis tokomu dapat bergabung bersama gas</p>
  </div>
  <div class="section-content">
    @foreach ($categories as $category)
    <div class="card">
      <div class="card-body">
        <div class="image"><img class="img-fluid" src="{{ asset('storage/' . $category->image) }}" alt=""></div>
      </div>
      <div class="card-footer">
        <h3><a href="/category/{{ $category->slug }}">{{ $category->category_title }}</a></h3>
        <p class="text-truncate"><a href="/category/{{ $category->slug }}">{!! $category->description !!}</a></p>
      </div>
    </div>
    @endforeach
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
      @foreach ($carriers as $carrier)
      <div class="column">
        <div class="image">
          <img class="img-fluid" src="{{ asset('storage/' . $carrier->image) }}" alt="">
        </div>
        <div class="text">
          <div class="title">
            <h3>{{ $carrier->carrier_title }}</h3>
            <p class="text-truncate">{!! $carrier->description !!}</p>
            <a href="/carrier/{{ $carrier->slug }}" class="btn btn-warning">Baca selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>   
</div>
@endsection