@extends('frontend.main_master')
@section('content')

@section('title')
    Lacak Pesanan
@endsection

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
            <div class="step line done">
                <div class="icon">
                    <i class="bx bx-check"></i>
                </div>
                <div class="text">Pesanan Di Konfirmasi</div>
            </div>
            <div class="step line">
                <div class="icon">
                    <i class='bx bx-loader-alt loader'></i>
                </div>
                <div class="text">Pesanan Dikemas</div>
            </div>
            <div class="step line">
                <div class="icon">
                    <i class='bx bx-loader-alt loader'></i>
                </div>
                <div class="text">Pesanan Dikirim</div>
            </div>
            <div class="step line">
                <div class="icon">
                    <i class='bx bx-loader-alt loader'></i>
                </div>
                <div class="text">Pesanan Dalam Perjalanan</div>
            </div>
            <div class="step">
                <div class="icon">
                    <i class='bx bx-loader-alt loader'></i>
                </div>
                <div class="text">Pesanan Diterima</div>
            </div>
        </div>
    </div>
</section>

@endsection