@extends('admin.layout.app')

@section('pageTitle', 'Jahitan')

@section('content')
<section>
	<div class="content-wrapper">
	    <div class="container-fluid">
	        <div class="page-header">
	            <h2>Jahitan</h2>
	            <ol class="breadcrumb">
	                <li><a href="../../index.html">Jahitan</a></li>
	                <li class="active">Forms</li>
	            </ol>
	        </div>
	        <div class="row clearfix">
		        <div class="col-md-6">
		            <div class="card">
		                <div class="card-header">
		                    <h2>
		                        Add Jahitan
		                    </h2>
		                </div>
		                <div class="body">
		                    <form action="{{ route('tailor.update', $tailor->id ) }}" method="post"> 
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
		                        <div class="form-group">
		                            <label>Nama Jahitan</label>
                                    <input type="text" name="nama_jahitan" class="form-control" placeholder="Nama Jahitan" value="{{ $tailor->nama_jahitan }}" />
                                </div>
		                        <div class="form-group">
                                    <label>Nama Pelanggan</label>
                                    <select class="form-control" name="pelanggan_id" size="1">
                                        @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}" @if($customer->id == $tailor->id_pelanggan) selected @endif>{{ $customer->nama_pelanggan }}</option>
                                        @endforeach
                                    </select>
								</div>
								<div class="form-group">
		                            <label>Ongkos</label>
                                    <input type="text" name="ongkos" id="ongkos" class="form-control ongkos" placeholder="Ongkos" value="{{ $tailor->ongkos_jahitan }}" />
								</div>
								<div class="form-group">
		                            <label>Jumlah</label>
                                    <input type="text" name="jumlah" class="form-control ongkos" placeholder="Jumlah" value="{{ $tailor->jumlah_jahitan }}" />
								</div>
								<div class="form-group">
		                            <label>Total Harga</label>
		                            <input style="background: #ebebe4;" type="text" name="total_harga" id="total" class="form-control" placeholder="Total Harga" value="{{ $tailor->total_harga }}" readonly />
								</div>
								<div class="form-group">
		                            <label>Estimasi Selesai</label>
		                            <input type="text" name="estimasi_selesai" class="form-control" placeholder="Estimasi Selesai" value="{{ $tailor->estimasi_selesai }}" />
								</div>
								<div class="form-group">
		                            <label>Tanggal Masuk</label>
		                            <input type="text" id="date" name="tanggal_masuk" class="form-control" placeholder="Tanggal Masuk" value="{{ $tailor->tgl_masuk }}" />
								</div>
								<div class="form-group">
									<label>Type</label>
									<select class="form-control" name="verification_type" size="1">
										@if($tailor->verification_type == null)
											<option value="0" selected>Belum Diambil</option>
											<option value="1">Sudah Diambil</option>
										@else
											<option value="0">Belum Diambil</option>
											<option value="1" selected>Sudah Diambil</option>
										@endif
									</select>
								</div>
								<div class="form-group">
		                            <label>Tanggal Diambil</label>
		                            <input type="text" id="dateTwo" name="tanggal_diambil" class="form-control" placeholder="Tanggal Diambil" value="{{ $tailor->tgl_diambil }}" />
								</div>
		                        <button type="submit" class="btn btn-primary waves-effect">Edit</button>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
	    </div>
	</div>
</section>
@section('add_js')
	<script src="{{ asset('admin/assets/js/custom/script.js') }}"></script>
@endsection

@endsection