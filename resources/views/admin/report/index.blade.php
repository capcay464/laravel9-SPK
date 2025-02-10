@extends('layouts.app')
@section('title', 'SPK Penerima Bantuan')
@section('topbar', 'Laporan')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Download Laporan</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Penilaian Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ URL::to('download-penilaian-pdf') }}" target="_blank">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Penilaian</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-bell fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

             <!-- SPK Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ URL::to('download-perhitungan-pdf') }}" target="_blank">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Hasil SPK</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-book fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- warga Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ URL::to('download-alternatif-pdf') }}" target="_blank">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Data Warga/Alternative</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Kriteria Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ URL::to('download-kriteria-pdf') }}" target="_blank">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Data Kriteria</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-code fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    </div>

    <div class="row">

        <!-- Penilaian Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ URL::to('download-user-pdf') }}" target="_blank">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Data User</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>

</div>
@endsection