@extends('layouts.admin.app')
@section('content')
	<div class="main-content">
	  <section class="section">
	    <div class="section-header">
	    	<h1>List Booking User</h1>
	    </div>
	    <div class="section-body">
	    	<div>
	    		@if(session('status'))
	    		  <div class="alert alert-primary alert-has-icon">
	    		    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
	    		    <div class="alert-body">
	    		      <div class="alert-title">{{ session('status') }}</div>
	    		    </div>
	    		  </div>
	    		@endif
	    	</div>
	    	<div class="card">
	    	  <div class="card-header">
	    	    <h4>List Booking User</h4>
	    	  </div>
	    	  <div class="card-body p-0">
	    	    <div class="table-responsive">
	    	      <table class="table table-striped table-md">
	    	        <tr>
	    	          <th>#</th>
	    	          <th>Name</th>
	    	          <th>Tanggal Pemesanan</th>
	    	          <th>Status</th>
	    	          <th>Action</th>
	    	        </tr>
	    	        @foreach($bookings as $booking)
	    	        <tr>
	    	        	<td>{{ $loop->iteration }}</td>
	    	        	<td>{{ $booking->nama }}</td>
	    	        	<td>{{ $booking->tgl_pemesanan }}</td>
	    	        	@if ($booking->status == "Not Accepted")
	    	        		<td>
	    	        			<div class="badge badge-danger">Not Accepted</div>
	    	        		</td>
	    	        	@else
	    	        		<td>
	    	        			<div class="badge badge-success">Accepted</div>
	    	        		</td>
	    	        	@endif
	    	        	<td>
	    	        		<a href="{{ route('booking.edit', $booking->id)}}" class="btn btn-info">Edit</a>
	    	        		<form class="d-inline ml-2" action="{{ route('booking.destroy', $booking->id) }}" method="POST">
	    	        			@csrf
	    	        			@method('DELETE')
	    	        			<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah ingin dihapus?')">Delete</button>
	    	        		</form>
	    	        	</td>
	    	        </tr>
	    	        @endforeach
	    	      </table>
	    	    </div>
	    	  </div>
	    	  <div class="card-footer text-right">
	    	    <nav class="d-inline-block">
	    	      <ul class="pagination mb-0">
	    	        <li class="page-item disabled">
	    	          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
	    	        </li>
	    	        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
	    	        <li class="page-item">
	    	          <a class="page-link" href="#">2</a>
	    	        </li>
	    	        <li class="page-item"><a class="page-link" href="#">3</a></li>
	    	        <li class="page-item">
	    	          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
	    	        </li>
	    	      </ul>
	    	    </nav>
	    	  </div>
	    	</div>
	    </div>
	  </section>
	</div>
@endsection