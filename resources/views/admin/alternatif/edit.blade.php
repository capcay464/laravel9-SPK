@extends('layouts.app')
@section('title', 'SPK Penerima Bantuan ', $alternatif->nama_alternatif)
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#tambahkriteria" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Edit Alternatif {{ $alternatif->nama_alternatif }}</h6>
                </a>
            
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="tambahkriteria">
                <div class="card-body">
                    @if (Session::has('msg'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Infor</strong> {{ Session::get('msg') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif

                    <form action="{{ route('alternatif.update', $alternatif->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="nama">Nama Alternatif</label>
                            <input type="text" class="form-control @error ('nama_alternatif') is-invalid @enderror" name="nama_alternatif" value="{{ $alternatif->nama_alternatif }}">

                            @error('nama_alternatif')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{ route('alternatif.index') }}" class="btn btn-success">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop