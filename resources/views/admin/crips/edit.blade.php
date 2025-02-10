@extends('layouts.app')
@section('title', 'SPK Penerima Bantuan | Crips')
@section('topbar', 'Data Crips')
@section('css')

<!-- Custom styles for this page -->
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@stop
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#tambahcrips" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Crips</h6>
                </a>
            
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="tambahcrips">
                <div class="card-body">
                    @if (Session::has('msg'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Infor</strong> {{ Session::get('msg') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif

                    <form action="{{ route('crips.update', $crips->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="nama">Nama Crips</label>
                            <input type="text" class="form-control @error ('nama_crips') is-invalid @enderror" name="nama_crips" value="{{ $crips->nama_crips }}">

                            @error('nama_crips')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                         <div class="form-group">
                            <label for="bobot">Bobot Crips</label>
                            <input type="text" class="form-control @error ('bobot') is-invalid @enderror" name="bobot" value="{{ $crips->bobot }}">

                            @error('bobot')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{ route('kriteria.index') }}" class="btn btn-success">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

       
    </div>
    </div>




@stop
    