<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

use App\Kas;

class kasController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
      $user = $request->user();

      if ($user->hasRole('penjaga') || $user->hasRole('pemilik')) {
          $kases = Kas::orderBy('tanggal','desc')->paginate(10);
          return view('kas.index',['kases'=>$kases]);
      }
    }

    public function lihat_tanggal(Request $request){
      $user = $request->user();
      $tanggal = $request->tanggal;

      if ($user->hasRole('penjaga') || $user->hasRole('pemilik')) {
        $kases = Kas::where('tanggal', $request->tanggal)
                               ->orderBy('tanggal', 'desc')
                               ->get();
        $kases =  DB::table('kas')
                  ->whereBetween('tanggal', [$request->tanggalawal, $request->tanggalakhir])
                  ->get();
        $kas_total =  DB::table('kas')
                      ->whereBetween('tanggal', [$request->tanggalawal, $request->tanggalakhir])
                      ->sum('debit');        

        // return view('laporan._penjualan',['laps'=>$laps,'harga_total'=>$harga_total, 'awal'=>$request->tanggalawal,'akhir'=>$request->tanggalakhir]);
                      // dd($kases, $kas_total);
        return view('kas.lihatdata',['kases'=>$kases,'kas_total'=>$kas_total, 'awal'=>$request->tanggalawal,'akhir'=>$request->tanggalakhir]);

      }
    }

    public function cetak(Request $request,$id){
      $user = $request->user();

      if ($user->hasRole('penjaga') || $user->hasRole('pemilik')) {
        $kases = Kas::where('tanggal', $id)
                               ->orderBy('tanggal', 'desc')
                               ->get();        
         $total = DB::table('kas')
                ->where('tanggal',$id)
                ->sum('debit');

        return view('kas.cetak',['kases'=>$kases,'total'=>$total]);
      }
    }

    public function cetak_kas(Request $request,$awal,$akhir){
      $user = $request->user();

      if ($user->hasRole('penjaga') || $user->hasRole('pemilik')) {
        $kases =  DB::table('kas')
                  ->whereBetween('tanggal', [$awal, $akhir])
                  ->get();
        $kas_total =  DB::table('kas')
                      ->whereBetween('tanggal', [$awal, $akhir])
                      ->sum('debit'); 
// dd($kases, $kas_total);
// dd($awal, $akhir);
        return view('kas.cetak',['kases'=>$kases,'kas_total'=>$kas_total, 'awal'=>$awal,'akhir'=>$akhir]);

      }
    }
}
