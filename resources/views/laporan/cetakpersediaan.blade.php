@extends('vendor.cetak')

@section('judul')
Laporan Persediaan
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
    <thead >
      <th style="text-align: center;">Nomor</th>
      <th style="text-align: center;">Tanggal</th>                            
      <th style="text-align: center;">Nama Supplier</th>    
      <th style="text-align: center;">Nama Barang</th>              
      <th style="text-align: center;">Harga Jual</th>
      <th style="text-align: center;">Stok Beli</th>
      <th style="text-align: center;">Stok Jual</th>
      <th style="text-align: center;">Jumlah Stok</th>
    </thead>
    @php
      $i=1;
    @endphp
    @foreach ($persediaans as $persediaan)
    <tr>
      <td style="text-align: center;">{{$i++}}</td>
      <td style="text-align: center;">
          <?php if (!is_null($persediaan->tanggal_beli)): ?>
            {{date("d F Y",strtotime($persediaan->tanggal_beli))}}
            <?php else: ?>
              -
          <?php endif ?>
      </td>
      <td style="text-align: center;">{{$persediaan->nama_supplier}}</td>
      <td>{{$persediaan->nama_barang}}</td>                                    
      <td style="text-align: center;">
          <?php if (!is_null($persediaan->harga_jual)): ?>
            Rp. {{$persediaan->harga_jual}}
            <?php else: ?>
              Rp. 0
          <?php endif ?>           
      </td>
      <td style="text-align: center;">
          <?php if (!is_null($persediaan->stok_beli)): ?>
            {{$persediaan->stok_beli}}
            <?php else: ?>
              0
          <?php endif ?>
      </td>
      <td style="text-align: center;">
          <?php if (!is_null($persediaan->stok_jual)): ?>
            {{$persediaan->stok_jual}}
            <?php else: ?>
              0
          <?php endif ?>
      </td>
      <td style="text-align: center;">
          <?php if (!is_null($persediaan->stok)): ?>
            {{$persediaan->stok}}
            <?php else: ?>
              0
          <?php endif ?>
      </td>
    </tr>
  @endforeach
  </table>
  <table class="table table-bordered text-uppercase">
    <td>Total</td>
    <td width="20%" align="right">{{$total}} Barang</td>
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
