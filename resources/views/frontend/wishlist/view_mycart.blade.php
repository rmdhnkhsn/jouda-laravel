@extends('frontend.main_master')
@section('content')

@section('title')
Keranjang
@endsection


<section class="content">
    <div class="shoppingCart">
        <div class="headTitle">KERANJANG BELANJA ANDA</div>
        <div class="listCart">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-left">Nama Barang</th>
                        <th class="text-center">Qty</th>
                        <th class="text-center" id="resize">Harga Barang</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody id="cartPage">
                </tbody>
            </table>
        </div>
        @if(!Session::has('coupon'))
            <div class="coupon">
                <div class="formGroup">
                    <label class="labelForm">Masukkan Kode :</label>
                    <input type="text" class="form-control bordered"id="coupon_name" placeholder="*Masukkan kode anda...">
                </div>
                <button type="submit" class="btnRounded" style="height: 40px" onclick="applyCoupon()">GUNAKAN</button>
            </div>
        @endif
        <div class="paymentInfo" id="couponCalField">
            
        </div>
        <div class="justify-end">
            <a href="{{ route('checkout') }}" class="btnRounded mt-5" style="height: 40px">LANJUTKAN PEMBAYARAN</a>
        </div>
    </div>
</section>

@endsection