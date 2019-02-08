@extends('admin.layout.app')

@section('pageTitle', 'Laporan')

@section('content')
<section>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="page-header">
            <h2>Jahitan</h2>
            <ol class="breadcrumb">
                <li><a href="../../index.html">Laporan</a></li>
                <li class="active">Cetak</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body text-center">
						<h4>Cetak Laporan Jahitan</h4>
						<div style="padding-top: 8px;">
							<a href="{{ route('cetak.pdf', ['download' => 'cetak.pdf']) }}" class="btn btn-info btn-rounded waves-effect">Cetak</a>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection