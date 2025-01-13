@extends('frontend.main_master')
@section('content')

@section('title')
    Detail Transaksi
@endsection

<section class="content">
    <div class="shoppingCart">
        <div class="row">
            <div class="col-md-8">
                <div class="cards">
                    <div class="headTitle">DETAIL TRANSAKSI</div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="text-align: left">Foto Produk</th>
                                <th style="text-align: left">Nama Produk</th>
                                <th style="text-align: left">Detail Produk</th>
                                {{--<th style="text-align: left">Kode Produk</th>--}}
                                <th style="text-align: center">Qty</th>
                                <th style="text-align: center">Harga</th>
                                <th style="text-align: center">Total</th>
                                @if ($order->status == 'selesai')
                                <th style="text-align: center">Opsi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orderItem as $item)
                                <tr>
                                    <td>
                                        <img src="{{ (!empty($item->product->product_thambnail))? asset($item->product->product_thambnail) : url('upload/no_image.jpg') }}" class="cartImg">
                                    </td>
                                    <td style="vertical-align: middle">
                                        {{ $item->product ? $item->product->product_name : '-'  }}
                                    </td>
                                    <td style="vertical-align: middle">
                                        {{ $item->size }} | {{ $item->color }}
                                    </td>
                                    {{--<td style="vertical-align: middle">{{ $item->product->product_code }}</td>--}}
                                    <td style="text-align: center; vertical-align: middle">{{ $item->qty }}</td>
                                    <td style="text-align: center; vertical-align: middle; font-weight: 600">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                    <td style="text-align: center; vertical-align: middle; font-weight: 600">Rp {{ number_format($item->price * $item->qty, 0, ',', '.') }}</td>
                                    @if ($order->status == 'selesai')
                                        <td style="text-align: center; vertical-align: middle">
                                            <a title="Keranjang" data-toggle="modal" data-target="#exampleModal" id="{{ $item->product->id }}"
                                                onclick="productView(this.id)" class="btnRounded" style="margin-top: 0">Beli Lagi
                                            </a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if($order->status === "ditunda" || $order->status === "di konfirmasi" || $order->status === "dikemas")
                    @php
                        $order_cancel = App\Models\Order::where('id',$order->id)->where('cancel_order','=',NULL)->first();
                        $cancel = App\Models\Order::where('id',$order->id)->where('cancel_order','=',1)->first();
                    @endphp

                    @if($order_cancel)
                        <div class="cards">
                            <div class="headTitle">PEMBATALAN PESANAN</div>
                            <form action="{{ route('cancel.order',$order->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="label" class="labelForm"> Alasan Pembatalan Pesanan :</label>
                                    <textarea name="cancel_reason" id="" class="form-control bordered" cols="30" rows="05">Tulis alasan</textarea>
                                </div>
                                <button type="submit" class="btnRounded">Kirim</button>
                            </form>
                        </div>
                    @elseif($cancel)
                        <div class="badge red">Anda telah mengirim permintaan pembatalan untuk produk ini </div>
                    @else
                    @endif
                @endif

                @if($order->status == "selesai")
                    @php
                        $order = App\Models\Order::where('id',$order->id)->where('return_reason','=',NULL)->first();
                    @endphp

                    @if($order)
                        <div class="cards">
                            <div class="headTitle">PENGEMBALIAN PESANAN</div>
                            <form action="{{ route('return.order',$order->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="label" class="labelForm"> Alasan Pengembalian Pesanan :</label>
                                    <textarea name="return_reason" id="" class="form-control bordered" cols="30" rows="05">Tulis alasan</textarea>
                                </div>
                                <button type="submit" class="btnRounded">Kirim</button>
                            </form>
                        </div>
                    @else
                        <div class="badge red">Anda telah mengirim permintaan pengembalian untuk produk ini </div>
                    @endif
                @endif
            </div>
            <div class="col-md-4">
                <div class="cards">
                    <div class="headTitle">RINCIAN PEMBAYARAN</div>
                    <table class="table">
                        <tr>
                            <td width="40%">Status Pesanan</td>
                            <td>:</td>
                            <td style="font-weight: 600">
                                @if($order->status == 'ditunda')
                                    <span class="badge red"> Ditunda</span>
                                @elseif($order->status == 'di konfirmasi')
                                    <span class="badge blue"> Dikonfirmasi</span>

                                @elseif($order->status == 'dikemas')
                                    <span class="badge blue"> Dikemas</span>

                                @elseif($order->status == 'dikirim')
                                    <span class="badge blue"> Dalam Pengiriman </span>

                                @elseif($order->status == 'dalam perjalanan')
                                    <span class="badge blue"> Dalam perjalanan </span>

                                @elseif($order->status == 'selesai')
                                    <span class="badge blue"> Selesai</span>
                                @endif
                                
                                @if($order->return_order == 1)
                                    <span class="badge red">Pengembalian</span>

                                @endif

                                @if($order->cancel_order == 2)
                                    <span class="badge red">Batal</span>

                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td width="40%">Invoice No</td>
                            <td>:</td>
                            <td style="font-weight: 600">
                                @if ($order->status == 'selesai')
                                    <a href="{{ url('user/invoice_download/' . $order->id) }}" target="_blank"
                                        class="btnRounded">
                                        <i class="fa fa-print"></i>
                                        {{ $order->invoice_no }}
                                    </a>
                                @else
                                    {{ $order->invoice_no }}
                                @endif
                            </td>
                        </tr>
                        @if ($order->status == 'dikirim' || $order->status == 'dalam perjalanan' || $order->status == 'selesai')
                            <tr>
                                <td width="40%">Kurir</td>
                                <td>:</td>
                                <td style="font-weight: 600">{{ $order->kurir }}</td>
                            </tr>
                            <tr>
                                <td width="40%">Resi</td>
                                <td>:</td>
                                <td style="font-weight: 600">{{ $order->resi }}</td>
                            </tr>
                        @endif
                        <tr>
                            <td width="40%">Tanggal Pembelian</td>
                            <td>:</td>
                            <td style="font-weight: 600">{{ $order->order_date }}</td>
                        </tr>
                        <tr>
                            <td width="40%">Metode Pembayaran</td>
                            <td>:</td>
                            <td style="font-weight: 600">{{ $order->payment_method }}</td>
                        </tr>
                        <tr>
                            <td width="40%">Total Belanja</td>
                            <td>:</td>
                            <td style="font-weight: 600">Rp {{ number_format($order->amount, 2, ',', '.') }}</td>
                        </tr>
                    </table>
                    @if($order->status == "dalam perjalanan")
                        <div class="justify-end">
                            <a href="{{ route('user.shipped.delivered',$order->id) }}" class="btnRounded" id="delivered">
                                Pesanan Diterima
                            </a>
                        </div>
                    @endif
                </div>
                <div class="cards">
                    <div class="headTitle">INFO PENGIRIMAN</div>
                    <table class="table">
                        <tr>
                            <td width="40%">Nama</td>
                            <td>:</td>
                            <td style="font-weight: 600">{{ $order->name }}</td>
                        </tr>
                        <tr>
                            <td width="40%">No Telpon</td>
                            <td>:</td>
                            <td style="font-weight: 600">{{ $order->phone }}</td>
                        </tr>
                        <tr>
                            <td width="40%">Email</td>
                            <td>:</td>
                            <td style="font-weight: 600">{{ $order->email }}</td>
                        </tr>
                        <tr>
                            <td width="40%">Alamat</td>
                            <td>:</td>
                            <td style="font-weight: 600">{{ $order->address }} <br> {{ $order->subdistrict }}, {{ $order->district }}, <br> {{ $order->division }}, {{ $order->post_code }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection