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
		                        Add Pelanggan
		                    </h2>
		                </div>
		                <div class="body">
							<form action="{{ route('customer.store') }}" method="post">
							
							@if(session('alert'))
								<div class="alert alert-success alert-dismissible">
									{{ session('alert') }}
								</div>	
							@endif
								
							{{ csrf_field() }}
		                        <div class="form-group has-feedback{{ $errors->has('nama_pelanggan') ? ' has-error' : '' }}">
		                            <label>Nama Pelanggan</label>
									<input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan" value="{{ old('nama_pelanggan') }}" />
									@if($errors->first('nama_pelanggan'))
										<span class="help-block">
											<p>{{ $errors->first('nama_pelanggan') }}</p>
										</span>
									@endif
		                        </div>
		                        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
		                            <label>Email</label>
									<input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" />
									@if($errors->first('email'))
										<span class="help-block">
											<p>{{ $errors->first('email') }}</p>
										</span>
									@endif
		                        </div>
		                        <div class="form-group has-feedback{{ $errors->has('no_telp') ? ' has-error' : '' }}">
		                            <label>No Telepon</label>
									<input type="text" name="no_telp" class="form-control" placeholder="No Telepon" value="{{ old('no_telp') }}" />
									@if($errors->first('no_telp'))
										<span class="help-block">
											<p>{{ $errors->first('no_telp') }}</p>
										</span>
									@endif
		                        </div>
		                        <div class="form-group has-feedback{{ $errors->has('alamat') ? ' has-error' : '' }}">
		                            <label>Alamat</label>
									<textarea class="form-control" name="alamat" rows="5">{{ old('alamat') }}</textarea>
									@if($errors->first('alamat'))
										<span class="help-block">
											<p>{{ $errors->first('alamat') }}</p>
										</span>
									@endif
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