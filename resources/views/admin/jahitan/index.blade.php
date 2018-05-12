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
                <li class="active">Tabel</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h2>
                            Tabel Jahitan
                        </h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Nama Jahitan</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Ongkos Jahitan</th>
                                    <th>Jumlah Jahitan</th>
                                    <th>Total Harga</th>
                                    <th>Estimasi Selesai</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Tanggal Diambil</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($tailors as $tailor)
                                <tr>
                                    <td>{{ $tailor->nama_jahitan }}</td>
                                    <td>{{ $tailor->customer->nama_pelanggan }}</td>
                                    <td>{{ $tailor->ongkos_jahitan }}</td>
                                    <td>{{ $tailor->jumlah_jahitan }}</td>
                                    <td>{{ $tailor->total_harga }}</td>
                                    <td>{{ $tailor->estimasi_selesai }}</td>
                                    <td>{{ $tailor->tgl_masuk }}</td>
                                    <td>{{ $tailor->tgl_diambil }}</td>
                                    <td style="display: flex;">
                                        <button type="button" class="btn btn-primary waves-effect">
                                            <a style="color: white;" href="">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                        </button>
                                        <form class="" style="padding-left: 5px;" method="post" action="">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger waves-effect">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection