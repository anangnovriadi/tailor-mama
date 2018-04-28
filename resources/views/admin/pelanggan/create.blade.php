@extends('admin.layout.app')

@section('pageTitle', 'Pelanggan')

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
		                        Pelanggan
		                    </h2>
		                </div>
		                <div class="body">
		                    <form />
		                        <div class="form-group">
		                            <label>Nama Pelanggan</label>
		                            <input type="text" class="form-control" placeholder="Nama Pelanggan" />
		                        </div>
		                        <div class="form-group">
		                            <label>Email</label>
		                            <input type="email" class="form-control" placeholder="Email" />
		                        </div>
		                        <div class="form-group">
		                            <label>No Telepon</label>
		                            <input type="text" class="form-control" placeholder="No Telepon" />
		                        </div>
		                        <div class="form-group">
		                            <label>Alamat</label>
		                            <textarea class="form-control" rows="5"></textarea>
		                        </div>
		                        <button type="button" class="btn btn-primary waves-effect">Tambah</button>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
	    </div>
	</div>
</section>
@endsection