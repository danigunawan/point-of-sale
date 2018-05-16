@extends('vendor.cetak')

@section('judul')
Laporan Penjualan
@endsection

@section('print')
  <table>
    <tr>
      <td><h3>Nama Penjaga</h3></td>
      <td><h3>&nbsp;: {{Auth::user()->name}}</h3></td>
    </tr>
    <tr>
      <td><h3>Periode</h3></td>
      <td><h3>&nbsp;: {{date("d F Y",strtotime($awal))}} <strong>Sampai</strong> {{date("d F Y",strtotime($akhir))}} </h3></td>
    </tr>
  </table>
  @php
    $i=1;
  @endphp
  <table class="table table-bordered" width="100%">
    <thead>
      <th class="text-center">Nomor</th>
      <th class="text-center">Tanggal</th>
      <th class="text-center">No. Penjualan</th> 
      <th class="text-center">Nama Penjaga</th>           
      <th class="text-center">Total Harga Jual</th>
      <th class="text-center">Jumlah bayar</th>
      <th class="text-center">Kembalian</th> 
    </thead>                                    
    <tbody>
    @php
      $i=1;
    @endphp
    @foreach ($laps as $penjualan)
    <tr>
      <td class="text-center">{{$i++}}</td>
      <td class="text-center">{{$penjualan->tanggal}}</td>
      <td class="text-center">{{$penjualan->kode_penjualan}}</td> 
      <td class="text-center">{{$penjualan->createdby}}</td>           
      <td class="text-center">Rp. {{$penjualan->total_harga_jual}}</td>
      <td class="text-center">Rp. {{$penjualan->total_bayar}}</td> 
      <td class="text-center">Rp. {{$penjualan->total_kembalian}}</td>      
    </tr>
  @endforeach
  </tbody>
  </table>
  <table class="table table-bordered">
    <td>Total</td>
    <td width="20%" style="text-align: right;">Rp.&nbsp; {{number_format($harga_total,0,',','.')}}</td>
  </table>
  <br>
  <h3><span class="pull-right">Disetujui Oleh</span></h3>
  <h3><span class="pull-left">Diterima Oleh</span></h3>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
@endsection
