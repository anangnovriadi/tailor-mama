@extends('admin.layout.app')

@section('pageTitle', 'Pakaian')

@section('add_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('content')
<section>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="page-header">
            <h2>Pakaian</h2>
            <ol class="breadcrumb">
                <li><a href="../../index.html">Pakaian</a></li>
                <li class="active">Tabel</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h2>
                            List Pakaian
                        </h2>
                        <div style="padding-top: 24px;">
                            <button type="button" class="btn bg-blue waves-effect" id="btn-pakaian">Add Pakaian</button>
                        </div>
                    </div>
                    <div class="body">
                        <table id="formPakaian" class="table table-bordered table-striped table-hover basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Nama Pakaian</th>
                                    <th>Model Pakaian</th>
                                    <th>Harga Satuan</th>
                                    <th>Stok Pakaian</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($pakaians as $pakaian)
                                <tr>
                                    <td>{{ $pakaian->nama_pakaian }}</td>
                                    <td>{{ $pakaian->model_pakaian }}</td>
                                    <td>{{ $pakaian->harga }}</td>
                                    <td>{{ $pakaian->stok_pakaian }}</td>
                                    <td style="display: flex;">
                                        <button type="button" class="btn btn-primary waves-effect" style="margin-right: 4%;">
                                            <a style="color: white;" href="">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                        </button>
                                        <button type="submit" class="btn btn-danger waves-effect">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="addPakaian" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="card">
                                <div class="body">
                                <div class="form-group">
                                    <label>Nama Pakaian</label>
                                    <input type="text" id="nama_pakaian" name="nama_pakaian" class="form-control" placeholder="Nama Pakaian" />
                                </div>
                                <p class="errorName alert alert-info hidden"></p>
                                <div class="form-group">
                                    <label>Model Pakaian</label>
                                    <input type="text" id="model_pakaian" name="model_pakaian" class="form-control" placeholder="Model Pakaian" />
                                </div>
                                <p class="errorModel alert alert-info hidden"></p>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="number" id="harga" name="harga" class="form-control" placeholder="Harga" />
                                </div>
                                <p class="errorHarga alert alert-info hidden"></p>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="number" id="stok_pakaian" name="stok_pakaian" class="form-control" placeholder="Stok" />
                                </div>
                                <p class="errorStok alert alert-info hidden"></p>
                                <div class="btn-add-modal">
                                    <button type="submit" id="btn-submit" class="btn btn-primary waves-effect" data-dismiss="modal">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>   
</section>

@section('add_js')
<!-- toastr notifications -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script type="text/javascript">
    $(document).on('click', '#btn-pakaian', function() {
        $('.modal-title').text('Add Pakaian');
        $('#addPakaian').modal('show');
    });
    $('.btn-add-modal').on('click', '#btn-submit', function() {
        $.ajax({
            type: 'POST',
            url: 'pakaian',
            data: {
                '_token': $('input[name=_token]').val(),
                'nama_pakaian': $('#nama_pakaian').val(),
                'model_pakaian': $('#model_pakaian').val(),
                'harga': $('#harga').val(),
                'stok_pakaian': $('#stok_pakaian').val()
            },
            success: function(data) {
                $('.errorName').addClass('hidden');
                $('.errorModel').addClass('hidden');
                $('.errorHarga').addClass('hidden');
                $('.errorStok').addClass('hidden');

                if((data.errors)) {
                    setTimeout(function() {
                        $('#addPakaian').modal('show');
                        toastr.error('Validation Error!', 'Error Alert', {timeout: 5000});
                    }, 500);

                    if(data.errors.nama_pakaian) {
                        $('.errorName').removeClass('hidden');
                        $('.errorName').text(data.errors.nama_pakaian);
                    }

                    if(data.errors.model_pakaian) {
                        $('.errorModel').removeClass('hidden');
                        $('.errorModel').text(data.errors.model_pakaian);
                    }

                    if(data.errors.harga) {
                        $('.errorHarga').removeClass('hidden');
                        $('.errorHarga').text(data.errors.harga);
                    }

                    if(data.errors.stok_pakaian) {
                        $('.errorStok').removeClass('hidden');
                        $('.errorStok').text(data.errors.stok_pakaian);
                    }
                } else {
                    toastr.success('Success Add!', 'Succes Alert', {timeout: 5000});
                    $('#formPakaian').append(
                        "<tr><td>"
                        + data.nama_pakaian +
                        "</td><td>"
                        + data.model_pakaian +
                        "</td><td>"
                        + data.harga +
                        "</td><td>"
                        + data.stok_pakaian +
                        "</td><td>"
                        + "<button type='button' class='btn btn-primary waves-effect' style='margin-right: 4%'><a style='color: white' href=''><i class='material-icons'>mode_edit</i></a></button><button type='button' class='btn btn-danger waves-effect'><i class='material-icons'>delete</i></button>" +
                        "</td></tr>"
                    );
                }
            }
        });
    });
</script>
@endsection

@endsection