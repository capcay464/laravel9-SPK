<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style type="text/css">
        .garis1{
            border-top:3px solid black;
            height: 2px;
            border-bottom:1px solid black;

        }

            #camat{
            text-align:center;
            }
            #nama-camat{
            margin-top:100px;
            text-align:center;
            }
            #ttd {
            position: absolute;
            bottom: 10;
            right: 20;
            }
                
    </style>
   

</head>
<body>
    <div>
        <table>
            <tr>
                <td style="padding-right: 240px; padding-left: 20px"><img src="https://4.bp.blogspot.com/-TBASjipimVM/WM-xhIQc5yI/AAAAAAAAD5o/NeSO8wMRISQMLeTCfKBFmewY4vQt1y-NQCEw/s1600/Logo%2BJakarta%2BHitam.png" width="90" height="90" ></td>
                <td>
                    <center>
                        <font size="4">RUKUN TETANGGA 004</font><br>
                        <font size="4">RUKUN WARGA 001</font><br>
                        <font size="2">KELURAHAN KRAMAT JATI KECAMATAN KRAMAT JATI</font><br>
                        <font size="2">KOTA ADMINISTRASI JAKARTA TIMUR</font><br>
                    </center>
                </td>
            </tr>
        </table>          

      <hr class="garis1"/>
      <div style="margin-top: 25px; margin-bottom: 25px;">
        <center><strong><u>LIST CRIPS / SUB KRITERIA</u></strong></center>
      </div>

      <div class="collapse show" id="listkriteria">
        <div class="card-body">
            <div class="table-responsive">
               
                <br><br>
                <table class="table table-striped table-hover" id="DataTable">
                    <thead>
                        <tr>
                            <th>Nama Alternatif</th>
                            @foreach ($kriteria as $key => $value)
                                <th>{{ $value->nama_kriteria }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($alternatif as $alt => $valt)
                            <tr>
                                <td>{{ $valt->nama_alternatif }}</td>
                                @if (count($valt->penilaian) > 0)
                                        @foreach($kriteria as $key => $value)
                                        <td> 
                                                                                                 
                                                    @foreach($value->crips as $k_1 => $v_1)
                                                    {{ $v_1->nama_crips }}
                                                    
                                                @endforeach
                                            
                                        </td>
                                        @endforeach
                               
                                @endif
                            </tr>
                        @empty
                            <tr>
                                <td>Tidak ada data!</td>
                            </tr>
                        

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="ttd" class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <p id="camat">Jakarta, {{ $tanggal }}</p>
          <p id="camat"><strong>KETUA RT 004 / RW 001</strong></p>
          <div id="nama-camat"><strong><u>AGUSTINA</u></strong><br />
        NIP. 3175044408730004</div>
      </div>
        </div>
</div>
</body>



</html>