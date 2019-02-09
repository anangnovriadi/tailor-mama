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
							<form action="{{ route('tailor.store') }}" method="post"> 
							
							@if(session('alert'))
								<div class="alert alert-success alert-dismissible">
									{{ session('alert') }}
								</div>	
							@endif

							{{ csrf_field() }}
		                        <div class="form-group has-feedback{{ $errors->has('nama_jahitan') ? ' has-error' : '' }}">
		                            <label>Nama Jahitan</label>
		                            <input type="text" name="nama_jahitan" class="form-control" placeholder="Nama Jahitan" />
									@if($errors->first('nama_jahitan'))
										<span class="help-block">
											<p>{{ $errors->first('nama_jahitan') }}</p>
										</span>
									@endif
								</div>
		                        <div class="form-group">
                                    <label>Nama Pelanggan</label>
                                    <select class="form-control" name="pelanggan_id" size="1">
                                        @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->nama_pelanggan }}</option>
                                        @endforeach
                                    </select>
								</div>
								<div class="form-group has-feedback{{ $errors->has('ongkos') ? ' has-error' : '' }}">
		                            <label>Ongkos</label>
		                            <input type="text" name="ongkos" id="ongkos" class="form-control ongkos" placeholder="Ongkos" />
									@if($errors->first('ongkos'))
										<span class="help-block">
											<p>{{ $errors->first('ongkos') }}</p>
										</span>
									@endif
								</div>
								<div class="form-group">
		                            <label>Jumlah</label>
		                            <input type="text" name="jumlah" value="1" class="form-control ongkos" placeholder="Jumlah" />
								</div>
								<div class="form-group">
									<label>Total Harga</label>
		                            <input style="background: #ebebe4;" type="text" name="total_harga" id="total" class="form-control" placeholder="Total Harga" readonly  />
								</div>
								<div class="form-group has-feedback{{ $errors->has('estimasi_selesai') ? ' has-error' : '' }}">
		                            <label>Estimasi Selesai</label>
		                            <input type="text" name="estimasi_selesai" class="form-control" placeholder="Estimasi Selesai" />
									@if($errors->first('estimasi_selesai'))
										<span class="help-block">
											<p>{{ $errors->first('estimasi_selesai') }}</p>
										</span>
									@endif
								</div>
								<div class="form-group has-feedback{{ $errors->has('tanggal_masuk') ? ' has-error' : '' }}"">
		                            <label>Tanggal Masuk</label>
		                            <input type="text" id="date" name="tanggal_masuk" class="form-control" placeholder="Tanggal Masuk" />
									@if($errors->first('tanggal_masuk'))
										<span class="help-block">
											<p>{{ $errors->first('tanggal_masuk') }}</p>
										</span>
									@endif
								</div>
								<input type="hidden" name="verification_type" class="form-control" placeholder="Type" value="0" />
		                        <button type="submit" class="btn btn-primary waves-effect">Tambah</button>
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