<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/weather-icon/css/weather-icons.min.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/weather-icon/css/weather-icons-wind.min.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/summernote/summernote-bs4.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('stisla/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <h2>Booking Travel Pulau Harapan</h2>
            </div>
            <div class="text-right">
              @if(Auth::check())
                <h4>
                  <a href="{{ route('booking.index') }}">Back to Dashboard</a>
                </h4>
              @else
                <h4>
                  <a href="/">Back to Home</a>
                </h4>
              @endif
            </div>
            @if(session('status'))
              <div class="alert alert-primary alert-has-icon">
                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                <div class="alert-body">
                  <div class="alert-title">{{ session('status') }}</div>
                </div>
              </div>
            @endif
            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="{{route('booking.store')}}">
                  @csrf
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama">Name</label>
                      <input id="nama" type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" name="nama" autofocus="autofocus" value="{{old('nama')}}" required="required">
                      @error('nama')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-group col-6">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{old('email')}}" required="required">
                      @error('email')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="no_handphone">No HP</label>
                      <input id="no_handphone" type="number" class="form-control {{ $errors->has('no_handphone') ? 'is-invalid' : '' }}" name="no_handphone" value="{{old('no_handphone')}}" required="required">
                      @error('no_handphone')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-group col-6">
                      <label for="jumlah_orang">Jumlah Orang</label>
                      <input id="jumlah_orang" type="number" class="form-control {{ $errors->has('jumlah_orang') ? 'is-invalid' : '' }}" name="jumlah_orang" value="{{old('jumlah_orang')}}" required="required">
                      @error('jumlah_orang')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="tgl_pemesanan">Tanggal Pemesanan</label>
                      <input id="tgl_pemesanan" type="date" class="form-control {{ $errors->has('tgl_pemesanan') ? 'is-invalid' : '' }}" name="tgl_pemesanan" value="{{old('tgl_pemesanan')}}" required="required">
                      @error('tgl_pemesanan')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-group col-6">
                      <label>Paket Wisata</label>
                      <select class="form-control selectric" name="paket_wisata">
                        <option value="2 Hari 1 Malam">2 Hari 1 Malam</option>
                        <option value="3 Hari 2 Malam">3 Hari 2 Malam</option>
                      </select>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div> -->

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('stisla/assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/popper.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('stisla/assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{asset('stisla/assets/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/chart.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('stisla/assets/js/page/index-0.js')}}"></script>
  
  <!-- Template JS File -->
  <script src="{{asset('stisla/assets/js/scripts.js')}}"></script>
  <script src="{{asset('stisla/assets/js/custom.js')}}"></script>
</body>
</html>