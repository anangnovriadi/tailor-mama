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
		                        <div class="form-group">
		                            <label>Nama Jahitan</label>
		                            <input type="text" name="nama_jahitan" class="form-control" placeholder="Nama Jahitan" />
                                </div>
		                        <div class="form-group">
                                    <label>Nama Pelanggan</label>
                                    <select class="form-control" name="pelanggan_id" size="1">
                                        @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->nama_pelanggan }}</option>
                                        @endforeach
                                    </select>
								</div>
								<div class="form-group">
		                            <label>Ongkos</label>
		                            <input type="text" name="ongkos" id="ongkos" class="form-control ongkos" placeholder="Ongkos" />
								</div>
								<div class="form-group">
		                            <label>Jumlah</label>
		                            <input type="text" name="jumlah" value="1" class="form-control ongkos" placeholder="Jumlah" />
								</div>
								<div class="form-group">
									<label>Total Harga</label>
		                            <input style="background: #ebebe4;" type="text" name="total_harga" id="total" class="form-control" placeholder="Total Harga" readonly  />
								</div>
								<div class="form-group">
		                            <label>Estimasi Selesai</label>
		                            <input type="text" name="estimasi_selesai" class="form-control" placeholder="Estimasi Selesai" />
								</div>
								<div class="form-group">
		                            <label>Tanggal Masuk</label>
		                            <input type="text" id="date" name="tanggal_masuk" class="form-control" placeholder="Tanggal Masuk" />
								</div>
								<div class="form-group">
		                            <label>Tanggal Diambil</label>
		                            <input type="text" id="dateTwo" name="tanggal_diambil" class="form-control" placeholder="Tanggal Diambil" />
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
@section('add_js')
	<script>
		$('.ongkos').keyup(function() {
			var sum = 0;
			var ongkos = $('#ongkos').val();

			$('.ongkos').each(function() {
				sum = ongkos * Number($(this).val());
			});
			$('#total').val(sum);
		});
	</script>
@endsection

@endsection