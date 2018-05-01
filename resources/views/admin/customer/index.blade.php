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
                <li class="active">Tabel</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h2>
                            Tabel Customer
                        </h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Nama Pelanggan</th>
                                    <th>Email</th>
                                    <th>No Telepon</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nama Pelanggan</th>
                                    <th>Email</th>
                                    <th>No Telepon</th>
                                    <th>Alamat</th>
                                </tr>
                            </tfoot>
                            <tbody> 
                                @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $customer->nama_pelanggan }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->no_telp }}</td>
                                    <td>{{ $customer->alamat }}</td>
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