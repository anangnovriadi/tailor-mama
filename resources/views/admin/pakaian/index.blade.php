@extends('admin.layout.app')

@section('pageTitle', 'Pakaian')

@section('add_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<meta name="_token" content="{{ csrf_token() }}"/>
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
                            <button type="button" class="btn bg-blue waves-effect" id="addModal">Add Pakaian</button>
                        </div>
                    </div>
                    <div class="body">
                        <table id="formPakaian" class="table table-bordered table-striped table-hover basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Pakaian</th>
                                    <th>Model Pakaian</th>
                                    <th>Harga Satuan</th>
                                    <th>Stok Pakaian</th>
                                    <th>Actions</th>
                                </tr>
                                {{ csrf_field() }}
                            </thead>
                            <tbody>
                                @php $key = 1; @endphp
                                @foreach ($pakaians as $pakaian)
                                <tr class="item-pakaian{{ $pakaian->id }}">
                                    <td>{{ $key }}</td>
                                    <td>{{ $pakaian->nama_pakaian }}</td>
                                    <td>{{ $pakaian->model_pakaian }}</td>
                                    <td>{{ $pakaian->harga }}</td>
                                    <td>{{ $pakaian->stok_pakaian }}</td>
                                    <td style="display: flex;">
                                        <div style="margin-right: 4%;">
                                        <button type="button" id="editModal" data-id="{{ $pakaian->id }}" data-key="{{ $key }}" data-nama_pakaian="{{ $pakaian->nama_pakaian }}" data-model_pakaian="{{ $pakaian->model_pakaian }}" data-harga="{{ $pakaian->harga }}" data-stok_pakaian="{{ $pakaian->stok_pakaian }}" class="btn btn-primary waves-effect">
                                            <i class="material-icons">mode_edit</i>                                        
                                        </button>
                                        </div>
                                        <div class="delt">
                                        <button type="button" id="deleteModal" data-id="{{ $pakaian->id }}" data-key="{{ $key }}" data-nama_pakaian="{{ $pakaian->nama_pakaian }}" data-model_pakaian="{{ $pakaian->model_pakaian }}" data-harga="{{ $pakaian->harga }}" data-stok_pakaian="{{ $pakaian->stok_pakaian }}" class="btn btn-danger waves-effect">
                                            <i class="material-icons">delete</i>
                                        </button>
                                        </div>  
                                    </td>
                                </tr>
                                @php $key++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- Add Modal --}}
        <div class="modal fade" id="addPakaian" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body">
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
                                    <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga" />
                                </div>
                                <p class="errorHarga alert alert-info hidden"></p>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="number" id="stok_pakaian" name="stok_pakaian" class="form-control" placeholder="Stok" />
                                </div>
                                <p class="errorStok alert alert-info hidden"></p>
                                <div class="btn-modal">
                                    <button type="submit" id="btn-add" class="btn btn-primary waves-effect" data-dismiss="modal">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End And Modal --}}

        {{-- Edit Modal --}}
        <div class="modal fade" id="editPakaian" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="body">
                                <input type="text" id="id_pakaian" name="id_pakaian" class="form-control hidden" placeholder="ID Pakaian" disabled />
                                <div class="form-group">
                                    <label>No</label>
                                    <input type="number" id="key_edit" name="key" class="form-control" placeholder="No" disabled />
                                </div>
                                <div class="form-group">
                                    <label>Nama Pakaian</label>
                                    <input type="text" id="nama_pakaian_edit" name="nama_pakaian" class="form-control" placeholder="Nama Pakaian" />
                                </div>
                                <p class="errorName alert alert-info hidden"></p>
                                <div class="form-group">
                                    <label>Model Pakaian</label>
                                    <input type="text" id="model_pakaian_edit" name="model_pakaian" class="form-control" placeholder="Model Pakaian" />
                                </div>
                                <p class="errorModel alert alert-info hidden"></p>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="number" id="harga_edit" name="harga" class="form-control" placeholder="Harga" />
                                </div>
                                <p class="errorHarga alert alert-info hidden"></p>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="number" id="stok_pakaian_edit" name="stok_pakaian" class="form-control" placeholder="Stok" />
                                </div>
                                <p class="errorStok alert alert-info hidden"></p>
                                <div class="btn-modal">
                                    <button type="submit" id="btn-edit" class="btn btn-primary waves-effect" data-dismiss="modal">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Edit Modal --}}

    </div>
</div>   
</section>

@section('add_js')
<!-- toastr notifications -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js') }}"></script>
<script>
    $('#harga').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precission:0});
</script>
<script type="text/javascript">
    $(document).on('click', '#addModal', function() {
        $('.modal-title').text('Add Pakaian');
        $('#addPakaian').modal('show');
    });
    $('.btn-modal').on('click', '#btn-add', function() {
        var key = {{ $count }} + 1;
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
                        + key +
                        "</td><td>"
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
                    $('#addPakaian').modal('hide');
                }
            }
        });
    });

    $(document).on('click', '#editModal', function() {
        $('.modal-title').text('Edit Pakaian');
        $('#id_pakaian').val($(this).data('id'));
        $('#key_edit').val($(this).data('key'));
        $('#nama_pakaian_edit').val($(this).data('nama_pakaian'));
        $('#model_pakaian_edit').val($(this).data('model_pakaian'));
        $('#harga_edit').val($(this).data('harga'));
        $('#stok_pakaian_edit').val($(this).data('stok_pakaian'));
        id = $('#id_pakaian').val();   
        $('#editPakaian').modal('show');
    });
    $('.btn-modal').on('click', '#btn-edit', function() {
        var key = $('#key_edit').val();
        $.ajax({
            type: 'PUT',
            url: 'pakaian/'+ id,
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('#id_pakaian').val(),
                // 'key': $('#key_edit').val(),
                'nama_pakaian': $('#nama_pakaian_edit').val(),
                'model_pakaian': $('#model_pakaian_edit').val(),
                'harga': $('#harga_edit').val(),
                'stok_pakaian': $('#stok_pakaian_edit').val()
            },
            success: function(data) {
                $('.errorName').addClass('hidden');
                $('.errorModel').addClass('hidden');
                $('.errorHarga').addClass('hidden');
                $('.errorStok').addClass('hidden');

                if((data.errors)) {
                    setTimeout(function() {
                        $('#editModal').modal('show');
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
                    toastr.success('Success Update!', 'Succes Alert', {timeout: 5000});
                    $('.item-pakaian'+ data.id).replaceWith(
                        "<tr><td>"
                        + key +
                        "</td><td>"
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
                    $('#editPakaian').modal('hide');
                }
            }
        });
    });

    $('.delt').on('click', '#deleteModal', function() {
        id = $(this).data('id');
        $.ajax({
            type: 'DELETE',
            url: 'pakaian/'+ id,
            data: { '_token': $('input[name=_token]').val() },
            success : function(data) {
                toastr.success('Success Delete!', 'Succes Alert', {timeout: 5000});
                $('.item-pakaian'+ data['id']).remove();
            }
        });    
    });
</script>
@endsection

@endsection