@extends('layouts.admin.app')

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Edit Booking User</h1>
      </div>

      <div class="section-body">
      	<div class="row">
      		<div class="col-12 col-md-12 col-lg-12">
      			<div class="card">
      			  <form method="POST" action="{{ route('booking.update', $booking->id) }}">
      			    @csrf
                    @method('PUT')
                    <div class="card-header">
      			    <h4>Edit Booking User</h4>
      			    </div>
      			    <div class="card-body">
                  <div class="form-group row">
      			        <label class="col-sm-3 col-form-label text-right" for="nama">Nama</label>
      			        <div class="col-sm-9">
                        <input type="text" id="nama" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" required="required" value="{{ $booking->nama }}" name="nama">
                        @error('nama')
                            <div>
                              <p class="text-danger">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
      			      </div>
      			      <div class="form-group row">
      			        <label class="col-sm-3 col-form-label text-right" for="email">Email</label>
      			        <div class="col-sm-7">
                        <input type="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" required="required" value="{{ $booking->email }}" name="email">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
      			      </div>
      			      <div class="form-group row">
      			        <label class="col-sm-3 col-form-label text-right" for="no_handphone">No HP</label>
      			        <div class="col-sm-7">
                        <input type="number" id="no_handphone" class="form-control {{ $errors->has('no_handphone') ? 'is-invalid' : '' }}" required="required" value="{{ $booking->no_handphone }}" name="no_handphone">
                        @error('no_handphone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
      			      </div>
      			      <div class="form-group row">
      			        <label class="col-sm-3 col-form-label text-right" for="jumlah_orang">Jumlah Orang</label>
      			        <div class="col-sm-7">
                        <input type="number" id="jumlah_orang" class="form-control {{ $errors->has('jumlah_orang') ? 'is-invalid' : '' }}" required="required" value="{{ $booking->jumlah_orang }}" name="jumlah_orang">
                        @error('jumlah_orang')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
      			      </div>
      			      <div class="form-group row">
      			        <label class="col-sm-3 col-form-label text-right" id="tgl_pemesanan">Tanggal Pemesanan</label>
      			        <div class="col-sm-7">
                        <input type="date" id="tgl_pemesanan" class="form-control {{ $errors->has('tgl_pemesanan') ? 'is-invalid' : '' }}" required="required" value="{{ $booking->tgl_pemesanan }}" name="tgl_pemesanan">
                    </div>
      			      </div>
      			      <div class="form-group row">
      			        <label class="col-sm-3 col-form-label text-right">Paket Wisata</label>
      			        <div class="col-sm-7">
                        <select class="form-control selectric" name="paket_wisata">
                          @foreach($paket_wisata as $pw)
                            @if($pw == $booking->paket_wisata)
                                <option selected="selected" value="{{ $pw }}">{{ $pw }}</option>
                            @else
                                <option value="{{ $pw }}">{{ $pw }}</option>
                            @endif
                          @endforeach
                        </select>
                    </div>
      			      </div>
      			      <div class="form-group row">
      			        <label class="col-sm-3 col-form-label text-right">Status</label>
      			        <div class="col-sm-7">
                        <select class="form-control selectric" name="status">
                          @foreach($statuses as $status)
                            @if($status == $booking->status)
                                <option selected="selected" value="{{$status}}">{{$status}}</option>
                            @else
                                <option value="{{$status}}">{{$status}}</option>
                            @endif
                          @endforeach
                        </select>
                    </div>
      			      </div>
      			    </div>
      			    <div class="card-footer">
      			      <div class="form-group row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-7 text-right">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                  </div>
      			    </div>
      			  </form>
      			</div>
      		</div>
      	</div>
      </div>
    </section>
  </div>
@endsection
