<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Crips;
use App\Models\Penilaian;
use PDF;
use Carbon\Carbon;

class KriteriaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $data['kriteria'] = Kriteria::orderBy('id','ASC')->paginate(10);
        return view('admin.kriteria.index',$data);

    }

    public function store(Request $request){
        $this->validate($request, [

            'nama_kriteria' => 'required|string',
            'attribut'      => 'required|string',
            'bobot'         => 'required|numeric'

        ]);

        try {

            $kriteria = new Kriteria();
            $kriteria->nama_kriteria = $request->nama_kriteria;
            $kriteria->attribut = $request->attribut;
            $kriteria->bobot = $request->bobot;
            $kriteria->save();
            return back()->with('msg','Berhasil Menambahkan Data');

        } catch (Exception $e) {
            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            die("Gagal");
        }

    }


    public function edit($id)
    {
        $data['kriteria'] = Kriteria::findOrFail($id);
        return view('admin.kriteria.edit', $data);
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [

            'nama_kriteria' => 'required|string',
            'attribut'      => 'required|string',
            'bobot'         => 'required|numeric'

        ]);

        try {

            $kriteria = Kriteria::findOrFail($id);
            $kriteria->update([
                'nama_kriteria' => $request->nama_kriteria,
                'attribut'      => $request->attribut,
                'bobot'         => $request->bobot
            ]);
            return back()->with('msg','Berhasil Mengubah Data');

        } catch (Exception $e) {
            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            die("Gagal");
        }
    }

    public function destroy($id){

        try {

            $kriteria = Kriteria::findOrFail($id);
            $kriteria->delete();
            Penilaian::truncate();

        } catch (Exception $e) {
            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            die("Gagal");
        }

    }

    public function show($id)
    {
        $data['crips'] = Crips::where('kriteria_id', $id)->paginate(10);
        $data['kriteria'] = Kriteria::findOrFail($id);
        return view('admin.kriteria.show', $data);
    }

    public function downloadPDF() {
        setlocale(LC_ALL, 'IND');
        $tanggal = Carbon::now()->formatLocalized('%A, %d %B %Y');
        $kriteria = Kriteria::get();

        $pdf = PDF::loadView('admin.kriteria.kriteria-pdf',compact('kriteria','tanggal'));
        $pdf->setPaper('A3', 'potrait');
        return $pdf->stream('kriteria.pdf');
    }

    public function downloadCripsPDF($id) {
        setlocale(LC_ALL, 'IND');
        $tanggal = Carbon::now()->formatLocalized('%A, %d %B %Y');
        $kriteria = Kriteria::with('crips')->findOrFail($id);
        $crips = Crips::where('kriteria_id', $id)->get();
        

        $pdf = PDF::loadView('admin.kriteria.crips-pdf',compact('kriteria','tanggal','crips'));
        $pdf->setPaper('A3', 'potrait');
        return $pdf->stream('crips.pdf');
    }
}
