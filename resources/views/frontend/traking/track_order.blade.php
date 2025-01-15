@extends('frontend.main_master')
@section('content')

@section('title')
    Lacak Pesanan
@endsection

@php
    $status = ['ditunda', 'dikonfirmasi', 'dikemas', 'dikirim', 'dalam perjalanan', 'selesai'];
    $title = ['Pesanan Tertunda', 'Pesanan Di Konfirmasi', 'Pesanan Dikemas', 'Pesanan Dikirim', 'Pesanan Dalam Perjalanan', 'Pesanan Diterima'];
@endphp

<section class="content">
    <div class="orderTracking">
        <div class="headTitle">PESANAN SAYA</div>
        <div class="containerTracking">
            <div class="step line done">
                <div class="icon">
                    <i class="bx bx-check"></i>
                </div>
                <div class="text">Pesanan Tertunda</div>
            </div>

            @if($track->status == 'ditunda')
                <div class="step line">
                    <div class="icon">
                        <i class='bx bx-loader-alt loader'></i>
                    </div>
                    <div class="text">Pesanan Di Konfirmasi</div>
                </div>
            @else
                <div class="step line done">
                    <div class="icon">
                        <i class='bx bx-check'></i>
                    </div>
                    <div class="text">Pesanan Di Konfirmasi</div>
                </div>
            @endif

            @if($track->status == 'ditunda' || $track->status == 'dikonfirmasi')
                <div class="step line">
                    <div class="icon">
                        <i class='bx bx-loader-alt loader'></i>
                    </div>
                    <div class="text">Pesanan Dikemas</div>
                </div>
            @else
                <div class="step line done">
                    <div class="icon">
                        <i class='bx bx-check'></i>
                    </div>
                    <div class="text">Pesanan Dikemas</div>
                </div>
            @endif

            @if($track->status == 'ditunda' || $track->status == 'dikonfirmasi' || $track->status == 'dikemas')
                <div class="step line">
                    <div class="icon">
                        <i class='bx bx-loader-alt loader'></i>
                    </div>
                    <div class="text">Pesanan Dikirim</div>
                </div>
            @else
                <div class="step line done">
                    <div class="icon">
                        <i class='bx bx-check'></i>
                    </div>
                    <div class="text">Pesanan Dikirim</div>
                </div>
            @endif

            @if($track->status == 'ditunda' || $track->status == 'dikonfirmasi' || $track->status == 'dikemas' || $track->status == 'dikirim')
                <div class="step line">
                    <div class="icon">
                        <i class='bx bx-loader-alt loader'></i>
                    </div>
                    <div class="text">Pesanan Dalam Perjalanan</div>
                </div>
            @else
                <div class="step line done">
                    <div class="icon">
                        <i class='bx bx-check'></i>
                    </div>
                    <div class="text">Pesanan Dalam Perjalanan</div>
                </div>
            @endif

            @if($track->status == 'ditunda' || $track->status == 'dikonfirmasi' || $track->status == 'dikemas' || $track->status == 'dikirim' || $track->status == 'dalam perjalanan')
                <div class="step">
                    <div class="icon">
                        <i class='bx bx-loader-alt loader'></i>
                    </div>
                    <div class="text">Pesanan Diterima</div>
                </div>
            @else
                <div class="step done">
                    <div class="icon">
                        <i class='bx bx-check'></i>
                    </div>
                    <div class="text">Pesanan Diterima</div>
                </div>
            @endif
        </div>
    </div>
</section>

@endsection