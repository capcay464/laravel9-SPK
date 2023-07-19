<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Penilaian;
use App\Models\Alternatif;
use App\Models\Kriteria;
use DB;

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
}
