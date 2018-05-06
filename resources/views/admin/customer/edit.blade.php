@extends('admin.layout.app')

@section('pageTitle', 'Customer')

@section('content')
<section>
	<div class="content-wrapper">
	    <div class="container-fluid">
	        <div class="page-header">
	            <h2>Pelanggan</h2>
	            <ol class="breadcrumb">
	                <li><a href="../../index.html">Pelanggan</a></li>
	                <li class="active">Forms</li>
	            </ol>
	        </div>
	        <div class="row clearfix">
		        <div class="col-md-6">
		            <div class="card">
		                <div class="card-header">
		                    <h2>
		                        Edit Pelanggan
		                    </h2>
		                </div>
		                <div class="body">
		                    <form action="{{ route('customer.update', $customer->id) }}" method="post"> 
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
		                        <div class="form-group">
		                            <label>Nama Pelanggan</label>
                                <input type="text" name="nama_pelanggan" class="form-control" value="{{ $customer->nama_pelanggan }}" placeholder="Nama Pelanggan" />
		                        </div>
		                        <div class="form-group">
		                            <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $customer->email }}" placeholder="Email" />
		                        </div>
		                        <div class="form-group">
		                            <label>No Telepon</label>
                                <input type="text" name="no_telp" class="form-control" value="{{ $customer->no_telp }}" placeholder="No Telepon" />
		                        </div>
		                        <div class="form-group">
		                            <label>Alamat</label>
                                <textarea class="form-control" name="alamat" rows="5">{{ $customer->alamat }}</textarea>
		                        </div>
		                        <button type="submit" class="btn btn-primary waves-effect">Tambah</button>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
	    </div>
	</div>
</section>
@endsection