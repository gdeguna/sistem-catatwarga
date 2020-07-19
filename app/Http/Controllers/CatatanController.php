<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCatatan;
use App\ModelWarga;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class CatatanController extends Controller
{

	public function index(){
        $emailuser = Session::get('email');
        // $hasilkuh = ModelWarga::find($email);
        $hasildata = ModelWarga::where('email', '=', $emailuser)->first();
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
        return redirect('/daftarjalan')->with('alert','Pengajuan disimpan.');

    }

    public function indexdata(){
        $emailuser = Session::get('email');
        // $hasilkuh = ModelWarga::find($email);
        // $dataanda = ModelWarga::leftJoin('tb_warga','tb_catatan')->where('email', '=', $email)->get();
        $dataanda = DB::table('tb_warga')
                    ->leftJoin('tb_catatan', 'tb_warga.nik', '=', 'tb_catatan.nik')
                    ->where('email', '=', $emailuser)
                    ->get();

        if(!Session::get('loginsatgas')){
            return back()->with('alert','Anda Harus Login Dulu.');
        }
        else{
            return view('catatansaya', ['dataanda'=>$dataanda]);
        }

    }

    public function alldatakeluar(){

        // $hasilkuh = ModelWarga::find($email);
        // $dataanda = ModelWarga::leftJoin('tb_warga','tb_catatan')->where('email', '=', $email)->get();
        $dataall = DB::table('tb_warga')
                    ->rightJoin('tb_catatan', 'tb_warga.nik', '=', 'tb_catatan.nik')
                    ->where('status', '!=', 'Dibatalkan')
                    ->get();
        $dataditerima = DB::table('tb_warga')
                    ->leftJoin('tb_catatan', 'tb_warga.nik', '=', 'tb_catatan.nik')
                    ->where('status', '=', 'Diterima')
                    ->get();
        $dataditolak = DB::table('tb_warga')
                    ->leftJoin('tb_catatan', 'tb_warga.nik', '=', 'tb_catatan.nik')
                    ->where('status', '=', 'Ditolak')
                    ->get();
        $todaydata = DB::table('tb_warga')
                    ->leftJoin('tb_catatan', 'tb_warga.nik', '=', 'tb_catatan.nik')
                    ->where('status', '!=', 'Dibatalkan')
                    ->whereDate('tb_catatan.created_at', Carbon::today())
                    ->get();

        if(!Session::get('loginsatgas')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('datakeluar', ['dataall'=>$dataall , 'dataditolak'=>$dataditolak , 'dataditerima'=>$dataditerima, 'todaydata'=>$todaydata], []);
        }

    }

    public function allmenunggu(){

        // $hasilkuh = ModelWarga::find($email);
        // $dataanda = ModelWarga::leftJoin('tb_warga','tb_catatan')->where('email', '=', $email)->get();
        $datamenunggu = DB::table('tb_warga')
                    ->leftJoin('tb_catatan', 'tb_warga.nik', '=', 'tb_catatan.nik')
                    ->where('status', '=', 'Menunggu')
                    ->get();

        if(!Session::get('loginsatgas')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('permintaan', ['datamenunggu'=>$datamenunggu]);
        }

    }

    public function terimapermintaan($id){
        
        DB::table('tb_catatan')->where('kode_unik', $id)->update([
        'status' => 'Diterima'
        ]);
        return back()->with('success','Permintaan diterima');
    }

    public function tolakpermintaan($id){
        
        DB::table('tb_catatan')->where('kode_unik', $id)->update([
        'status' => 'Ditolak'
        ]);
        return redirect('/permintaan')->with('success','Permintaan ditolak');
    }

    public function postpjbatal($id){
        
        DB::table('tb_catatan')->where('kode_unik', $id)->update([
        'status' => 'Dibatalkan'
        ]);
        return redirect('/daftarjalan')->with('success','Permintaan ditolak');
    }

    //warga halaman

    public function public_index($email){

        // $hasilkuh = ModelWarga::find($email);
        $hasildata = ModelWarga::where('email', '=', $email)->first();
        return view('public_formcatatan', ['hasildata'=>$hasildata]);
    }

    public function simpancatatanwarga(Request $request){
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

        if(!Session::get('loginuser')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
        else{
            return redirect('/dashboardwarga')->with('alert','Pengajuan disimpan.');
        }

    }

    public function publicindexdata($email){

        // $hasilkuh = ModelWarga::find($email);
        // $dataanda = ModelWarga::leftJoin('tb_warga','tb_catatan')->where('email', '=', $email)->get();
        $dataanda = DB::table('tb_warga')
                    ->leftJoin('tb_catatan', 'tb_warga.nik', '=', 'tb_catatan.nik')
                    ->where('email', '=', $email)
                    ->get();
        return view('public_catatansaya', ['dataanda'=>$dataanda]);
    }
}
