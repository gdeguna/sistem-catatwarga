<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCatatan;
use App\ModelWarga;
use Illuminate\Support\Facades\DB;

class CatatanController extends Controller
{

	public function index($email){

        // $hasilkuh = ModelWarga::find($email);
        $hasildata = ModelWarga::where('email', '=', $email)->first();
        return view('formcatatan', ['hasildata'=>$hasildata]);
    }


     public function simpancatatan(Request $request){
        $this->validate($request, [
            'nik' => 'required|min:16',
            'tempat_tujuan' => 'required|min:4' ,
            'keperluan' => 'required',
            'kode_unik' => 'required|unique:tb_catatan',
            'status' => 'required',
            'tgl_pengajuan' => 'required'
        ]);

        $datacatatan = new ModelCatatan();
        $datacatatan->nik = $request->nik;
        $datacatatan->tempat_tujuan = $request->tempat_tujuan;
        $datacatatan->keperluan = $request->keperluan;
        $datacatatan->kode_unik = $request->kode_unik;
        $datacatatan->status = $request->status;
        $datacatatan->tgl_pengajuan = $request->tgl_pengajuan;
        $datacatatan->save();
        return redirect('/dashboard')->with('alert','Pengajuan disimpan.');

    }

    public function indexdata($email){

        // $hasilkuh = ModelWarga::find($email);
        // $dataanda = ModelWarga::leftJoin('tb_warga','tb_catatan')->where('email', '=', $email)->get();
        $dataanda = DB::table('tb_warga')
                    ->leftJoin('tb_catatan', 'tb_warga.nik', '=', 'tb_catatan.nik')
                    ->where('email', '=', $email)
                    ->get();
        return view('catatansaya', ['dataanda'=>$dataanda]);
    }

    public function alldatakeluar(){

        // $hasilkuh = ModelWarga::find($email);
        // $dataanda = ModelWarga::leftJoin('tb_warga','tb_catatan')->where('email', '=', $email)->get();
        $dataall = DB::table('tb_warga')
                    ->rightJoin('tb_catatan', 'tb_warga.nik', '=', 'tb_catatan.nik')
                    ->get();
        $dataditerima = DB::table('tb_warga')
                    ->leftJoin('tb_catatan', 'tb_warga.nik', '=', 'tb_catatan.nik')
                    ->where('status', '=', 'Diterima')
                    ->get();
        $dataditolak = DB::table('tb_warga')
                    ->leftJoin('tb_catatan', 'tb_warga.nik', '=', 'tb_catatan.nik')
                    ->where('status', '=', 'Ditolak')
                    ->get();
        return view('datakeluar', ['dataall'=>$dataall , 'dataditolak'=>$dataditolak , 'dataditerima'=>$dataditerima], []);
    }

    public function allmenunggu(){

        // $hasilkuh = ModelWarga::find($email);
        // $dataanda = ModelWarga::leftJoin('tb_warga','tb_catatan')->where('email', '=', $email)->get();
        $datamenunggu = DB::table('tb_warga')
                    ->leftJoin('tb_catatan', 'tb_warga.nik', '=', 'tb_catatan.nik')
                    ->where('status', '=', 'Menunggu')
                    ->get();
        return view('permintaan', ['datamenunggu'=>$datamenunggu]);
    }
}
