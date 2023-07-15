@extends('layouts.app')
@section('title', 'SPK Penerima Bantuan ', $kriteria->nama_kriteria)
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#tambahkriteria" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Edit Kriteria {{ $kriteria->nama_kriteria }}</h6>
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

                    <form action="{{ route('kriteria.update', $kriteria->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="nama">Nama Kriteria</label>
                            <input type="text" class="form-control @error ('nama_kriteria') is-invalid @enderror" name="nama_kriteria" value="{{ $kriteria->nama_kriteria }}">

                            @error('nama_kriteria')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="nama">Attribut Kriteria</label>
                            <select name="attribut" id="" class="form-control" required>
                                <option {{ $kriteria->attribut == 'Benefit' ? 'selected' : '' }}>Benefit</option>
                                <option {{ $kriteria->attribut == 'Cost' ? 'selected' : '' }}>Cost</option>
                            </select>

                            @error('attribut')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                         <div class="form-group">
                            <label for="bobot">Bobot Kriteria</label>
                            <input type="text" class="form-control @error ('bobot') is-invalid @enderror" name="bobot"
                            value="{{ $kriteria->bobot }}">

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

@stop