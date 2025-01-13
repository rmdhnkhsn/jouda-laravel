@extends('frontend.main_master')
@section('content')

@section('title')
    Data Transaksi
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
                            <th style="text-align: left">Tanggal</th>
                            <th style="text-align: left">Invoice</th>
                            <th style="text-align: left">Pembayaran</th>
                            <th style="text-align: center">Total Belanja</th>
                            <th style="text-align: center">Status</th>
                            <th style="text-align: center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>
                                {{ $order->order_date }} <br>
                            </td>
                            <td>{{ $order->invoice_no }}</td>
                            {{-- <td>{{ $order->invoice_number }}/00{{ $order->id }}/00{{ $order->user_id }}
                            </td> --}}
                            <td>{{ $order->payment_method }}</td>
                            <td class="text-right">
                                Rp {{ number_format($order->amount, 2, ',', '.') }}
                            </td>
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
                                
                                @if($order->return_order == 1) 
                                    <span class="badge red" style="margin-top: 15px">Permintaan Pengembalian </span>
                                @endif
                        
                                @if ($order->cancel_order == 1)
                                    <span class="badge red" style="margin-top: 15px">Permintaan Pembatalan </span>
                                @elseif ($order->cancel_order == 2)
                                    <span class="badge red" style="margin-top: 15px">Batal</span>
                                @endif
                            </td>
                            <td class="text-center"><a href="{{ url('user/order_details/' . $order->id) }}"
                                    class="btnRounded">
                                    <i class="fa fa-print"></i> Detail
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


@endsection