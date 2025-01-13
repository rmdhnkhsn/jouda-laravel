@extends('frontend.main_master')
@section('content')

@section('title')
    Transaksi Dibatalkan
@endsection

@php
$id = Auth::user()->id;
$user = App\Models\User::find($id);
@endphp

<section class="content">
    <div class="dashboardAccount">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.common.user_sidebar')
            </div>
            <div class="col-md-9">
                <table class="table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Total Belanja</th>
                                <th>Metode Pembayaran</th>
                                <th>Invoice</th>
                                <th>Alasan Pembatalan</th>
                                <th>Status Pesanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>
                                    {{ $order->order_date }} <br>
                                </td>
                                <td class="text-right">
                                    Rp {{ number_format($order->amount, 2, ',', '.') }}
                                </td>
                                <td>{{ $order->payment_method }}</td>
                                <td>{{ $order->invoice_no }}</td>
                                <td>{{ $order->cancel_reason }}</td>
                                <td class="text-center">
                                    @if($order->status == 'ditunda')        
                                    <span class="badge red"> Ditunda </span>
                                    @elseif($order->status == 'di konfirmasi')
                                    <span class="badge blue"> Dikonfirmasi </span>
                            
                                    @elseif($order->status == 'dikemas')
                                    <span class="badge blue"> Di proses </span>
                            
                                    @elseif($order->status == 'dikirim')
                                    <span class="badge blue"> Dikirim </span>
                            
                                    @elseif($order->status == 'dalam perjalanan')
                                    <span class="badge blue"> Di Perjalanan </span>
                            
                                    @elseif($order->status == 'selesai')
                                    <span class="badge blue"> Selesai </span>
                                        @endif
                                    @if($order->cancel_order == 0)
                                        <span class="badge blue">Tidak ada permintaan </span>
                                    @elseif($order->cancel_order == 1)
                                        <span class="badge blue"> Ditunda </span>
                                        <span class="badge blue">Permintaan Pembatalan </span>
                                    @elseif($order->cancel_order == 2)
                                        <span class="badge red">Berhasil Dibatalkan </span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                    </table>
            </div>
        </div>
    </div>
</section>


@endsection