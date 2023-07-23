<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Penilaian;
use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Crips;
use Carbon\Carbon;
use DB;
use PDF;



class PenilaianController extends Controller
{
    public function index(){
        $alternatif = Alternatif::with('penilaian.crips')->get();
      
        $kriteria = Kriteria::with('crips')->orderBy('id','ASC')->get();
        //return response()->json($alternatif);
        return view('admin.penilaian.index', compact('alternatif','kriteria'));
    }

    public function store(Request $request)
    {
        // return response()->json($request);
       try {
            DB::select("TRUNCATE penilaian");
            foreach ($request->crips_id as $key => $value) {
                foreach ($value as $key_1 => $value_1) {
                    Penilaian::create([
                        'alternatif_id' => $key,
                        'crips_id'      => $value_1
                    ]);
                }
            }

            return back()->with('msg', 'Berhasil Disimpan!');
       } catch (Exception $e) {
            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            die("Gagal");
        }
    }

    public function downloadPDF() {
        setlocale(LC_ALL, 'IND');
        $tanggal = Carbon::now()->formatLocalized('%A, %d %B %Y');
        $penilaian = Kriteria::get();
        $alternatif = Alternatif::with('penilaian.crips')->get();
        $kriteria = Kriteria::with('crips')->get();

        $pdf = PDF::loadView('admin.penilaian.penilaian-pdf',compact('kriteria','tanggal','alternatif','penilaian'));
        $pdf->setPaper('A3', 'potrait');
        return $pdf->stream('penilaian.pdf');
    }
}
