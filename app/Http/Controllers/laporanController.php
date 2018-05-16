<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Auth;
use Session;
use Charts;
use App\User;
use App\Barang;
use App\Supplier;
use App\Penjualan;
use App\Pembelian;
use App\BarangPersediaan;

class laporanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function penjualan(Request $request, Builder $htmlBuilder)
    {
        $user = $request->user();

        if ($user->hasRole('penjaga') || $user->hasRole('pemilik')) {

            return view('laporan.penjualan');
        }
    }
    public function lihatpenjualan(Request $request){
      $user = $request->user();

      if ($user->hasRole('penjaga') || $user->hasRole('pemilik')) {
        if ($user->hasRole('penjaga')) {
          $laps =  DB::table('penjualans')
                  ->whereBetween('tanggal', [$request->tanggalawal, $request->tanggalakhir])
                  ->where('createdby', Auth::user()->name)
                  ->get();        
          $harga_total =  DB::table('penjualans')
                      ->whereBetween('tanggal', [$request->tanggalawal, $request->tanggalakhir])
                      ->where('createdby', Auth::user()->name)
                      ->sum('total_harga_jual'); 
        }elseif ($user->hasRole('pemilik')) {
          $laps =  DB::table('penjualans')
                  ->whereBetween('tanggal', [$request->tanggalawal, $request->tanggalakhir])                  
                  ->get();        
          $harga_total =  DB::table('penjualans')
                      ->whereBetween('tanggal', [$request->tanggalawal, $request->tanggalakhir])                      
                      ->sum('total_harga_jual'); 
        }
        
        return view('laporan._penjualan',['laps'=>$laps,'harga_total'=>$harga_total, 'awal'=>$request->tanggalawal,'akhir'=>$request->tanggalakhir]);

      }
    }

    public function persediaan(Request $request, Builder $htmlBuilder)
    {
      $user = $request->user();
      if ($user->hasRole('penjaga') || $user->hasRole('pemilik')) {        
        return view('laporan._persediaan');
      }
    }

    public function lihatpersediaan(Request $request){
      $user = $request->user();
      if ($user->hasRole('penjaga') || $user->hasRole('pemilik')) {
        //$persediaans = Barang::orderBy('nama_barang', 'desc')->get();
        $persediaans = BarangPersediaan::select(DB::raw("nama_barang, harga_jual, tanggal_beli, stok, tanggal_jual, nama_supplier, stok_beli, stok_jual"))
                        ->join('barang', 'barang_persediaans.id_barang', '=', 'barang.id')
                        ->join('suppliers', 'barang_persediaans.id_supplier', '=', 'suppliers.id')
                        ->whereBetween('tanggal_beli', [$request->tanggalawal, $request->tanggalakhir])
                        ->orderBy('barang_persediaans.id', 'asc')->get();
        $total = count($persediaans);
        return view('laporan.persediaan',['persediaans'=>$persediaans,'total'=>$total, 'awal'=>$request->tanggalawal,'akhir'=>$request->tanggalakhir]);        
      }
    }

    public function grafikpenjualan(Request $request){
      $user = $request->user();

      if ($user->hasRole('penjaga') || $user->hasRole('pemilik')) {
        // $persediaans = Barang::orderBy('nama_barang', 'desc')->get();
        $chart = Charts::database(Penjualan::all(), 'line', 'google')
                ->title('Grafik Penjualan')
                ->elementLabel("Total")
                ->dimensions(1000, 500)
                ->responsive(false)
                ->groupByMonth('2018', true);
        return view('grafik.index',['chart'=>$chart]);

      }
    }

    public function lihatgrafik(Request $request){
      $user = $request->user();

      if ($user->hasRole('penjaga') || $user->hasRole('pemilik')) {
        // $persediaans = Barang::orderBy('nama_barang', 'desc')->get();
        // dd($request->all());
        $chart = Charts::database(DB::table('penjualans')
                  // ->whereBetween('tanggal', [$request->tanggalawal, $request->tanggalakhir])
                  // ->where('tanggal', [$request->tanggalawal, $request->tanggalakhir])
                  ->get(), 'line', 'google')
                  ->title('Grafik Penjualan')
                  ->elementLabel("Total")
                  ->dimensions(1000, 500)
                  ->responsive(false)
                  ->groupByMonth($request->tahun, true);
                  // dd($chart);
          return view('grafik.index',['chart'=>$chart]);

      }
    }

    public function cetak_penjualan(Request $request,$awal,$akhir){
      $user = $request->user();

      if ($user->hasRole('penjaga') || $user->hasRole('pemilik')) { 
        if ($user->hasRole('penjaga')) {
          $laps =  DB::table('penjualans')
                  ->whereBetween('tanggal', [$awal, $akhir])
                  ->where('createdby', Auth::user()->name)
                  ->get();        
          $harga_total =  DB::table('penjualans')
                      ->whereBetween('tanggal', [$awal, $akhir])
                      ->where('createdby', Auth::user()->name)
                      ->sum('total_harga_jual'); 
        }elseif ($user->hasRole('pemilik')) {
          $laps =  DB::table('penjualans')
                  ->whereBetween('tanggal', [$awal, $akhir])                  
                  ->get();        
          $harga_total =  DB::table('penjualans')
                      ->whereBetween('tanggal', [$awal, $akhir])                      
                      ->sum('total_harga_jual'); 
        }
        return view('laporan.cetakpenjualan',['laps'=>$laps,'harga_total'=>$harga_total, 'awal'=>$awal,'akhir'=>$akhir]);
      }
    }
        
    public function cetak_persediaan(Request $request,$awal,$akhir){
      $user = $request->user();
      if ($user->hasRole('penjaga') || $user->hasRole('pemilik')) {      
        $persediaans = BarangPersediaan::select(DB::raw("nama_barang, harga_jual, tanggal_beli, stok, tanggal_jual, nama_supplier, stok_beli, stok_jual"))
                        ->join('barang', 'barang_persediaans.id_barang', '=', 'barang.id')
                        ->join('suppliers', 'barang_persediaans.id_supplier', '=', 'suppliers.id')
                        ->whereBetween('tanggal_beli', [$awal, $akhir])
                        ->orderBy('barang_persediaans.id', 'asc')->get();        
        $total = count($persediaans);
        return view('laporan.cetakpersediaan',['persediaans'=>$persediaans,'total'=>$total, 'awal'=>$awal,'akhir'=>$akhir]);
      }
    }
}
