<?php 
    $store_description = DB::table('config')->select('value')->where('key','store_description')->first()->value;                        
    $store_name = DB::table('config')->select('value')->where('key','store_name')->first()->value;
 ?>
<html moznomarginboxes mozdisallowselectionprint>
<link href="{{ mix('/css/light-bootstrap-dashboard.css') }}" rel="stylesheet">
    <head>
        <title>
            {{$store_name}} - Cetak Nota
        </title>
        <style type="text/css">
            html {
                font-family: "Verdana";
            }
            .content {
                width: 95mm;
                font-size: 12px;
                padding: 5px;
            }
            .content .title {
                text-align: center;
            }
            .content .head-desc {
                margin-top: 5px;
                display: table;
                width: 100%;
            }
            .content .head-desc > div {
                display: table-cell;
            }
            .content .head-desc .user {
                text-align: right;
            }
            .content .nota {
                text-align: center;
                margin-top: 5px;
                margin-bottom: 5px;
            }
            .content .separate {
                margin-top: 10px;
                margin-bottom: 15px;
                border-top: 1px dashed #000;
            }
            .content .transaction-table {
                width: 100%;
                font-size: 12px;
            }
            .content .transaction-table .name {
                width: 185px;
            }
            .content .transaction-table .qty {
                text-align: center;
            }
            .content .transaction-table .sell-price, .content .transaction-table .final-price {
                text-align: right;
                width: 100px;
            }
            .content .transaction-table tr td {
                vertical-align: top;
            }
            .content .transaction-table .price-tr td {
                padding-top: 7px;
                padding-bottom: 7px;
            }
            .content .transaction-table .discount-tr td {
                padding-top: 7px;
                padding-bottom: 7px;
            }
            .content .transaction-table .separate-line {
                height: 1px;
                border-top: 1px dashed #000;
            }
            .content .thanks {
                margin-top: 15px;
                text-align: center;
            }
            .content .azost {
                margin-top:5px;
                text-align: center;
                font-size:10px;
            }
            @media print {
                @page  { 
                    width: 80mm;
                    margin: 0mm;
                }
            }

        </style>
    </head>
    <body onload="window.print();">
        <div class="content">
            <div class="title">
                <?php 
                    echo htmlspecialchars($store_name);
                    echo "<br>";
                    echo htmlspecialchars($store_description);
                    echo "<br>";
                    echo "Transaksi Pembelian";
                    echo ": {$pembelians->kode_pembelian}";
                ?>
            </div>

            <div class="head-desc">
                <div class="date">
                    Tanggal : {{date("d F Y",strtotime($pembelians->tanggal))}}
                </div>                                
                <div class="user">
                    User : {{$pembelians->createdby}}
                </div>
            </div>  
            <div class="head-desc">
                <div class="Supplier">
                  Supplier : {{$nama_supplier}}
                </div>                
            </div>                                 
            <div class="separate"></div>
             @php
              $i=1;
            @endphp
            <div class="transaction">
                <table class="transaction-table" cellspacing="0" cellpadding="0">                    
                    <thead>
                      <!-- <td style="width: 5%; text-align: center;">Nomor</td> -->
                      <td style="text-align: center; width: 40%;">Nama </td>
                      <td style="text-align: center;">Harga</td>
                      <td style="text-align: center;">qty</td>
                      <td style="text-align: right;">Sub Total</td>                            
                    </thead> 
                    <tr class="discount-tr">
                        <td colspan="4">
                            <div class="separate-line"></div>
                        </td>
                    </tr>                   
                    <tbody>                    
                      @foreach ($detailPembelian as $value)
                      <tr>
                        <!-- <td style="text-align: center;">{{$i++}}</td>         -->
                        <td>{{$value->nama_barang}}</td>
                        <td style="text-align: center;">{{$value->harga_beli}}</td>
                        <td style="text-align: center;">{{$value->jumlah_beli}}</td>
                        <td style="text-align: right;">{{$value->sub_total_harga}}</td>
                      </tr>
                    @endforeach
                    </tbody>
                    <tr class="discount-tr">
                        <td colspan="4">
                            <div class="separate-line"></div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" class="final-price">
                            TOTAL
                        </td>
                        <td class="final-price">
                             Rp. {{$pembelians->total_harga_beli}}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="final-price">
                            BAYAR
                        </td>
                        <td class="final-price">
                            Rp. {{$pembelians->total_bayar}}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="final-price">
                            KEMBALI
                        </td>
                        <td class="final-price">
                            Rp. {{$pembelians->total_kembalian}}
                        </td>
                    </tr>
                </table>
            </div>
            <div class="thanks">
                ~~~ Terima Kasih ~~~
            </div>
            <div class="azost">
                www.facebook.com/people/Aisyah-Simpur/100009237373350
            </div>
        </div>
        <div class="col-md-8">            
            <div class="col-md-2">
                <button type="button" onclick="printInvoice()" class="btn btn-fill btn-info pull-right hidden-print">Cetak</button> 
            </div>
            <div class="col-md-2">
                <a href="{{ url('penjaga/pembelian/tambah') }}" type="button" class="btn btn-fill btn-info pull-right hidden-print">Pembelian Baru</a>
            </div>
        </div>
    </body>
</html>
<script>
function printInvoice() {
    window.print();
}
</script>