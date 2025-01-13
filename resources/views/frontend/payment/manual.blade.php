@extends('frontend.main_master')
@section('content')

@section('title')
Transfer Bank Manual
@endsection

<section class="content">
    <div class="shoppingCart">
        <div class="row">
            <div class="col-md-6">
                <div class="cards">
                    <div class="headTitle">TOTAL PEMBAYARAN</div>
                    <table class="table">
                        <tr>
                            <td>Sub Total</td>
                            <td>:</td>
                            <td style="font-weight: 600">Rp {{ number_format($cartTotal, 0, '', '.') }}</td>
                        </tr>
                        @if(Session::has('coupon'))
                            <tr>
                                <td>Kupon</td>
                                <td>:</td>
                                <td style="font-weight: 600">{{ session()->get('coupon')['coupon_name'] }} ( {{ session()->get('coupon')['coupon_discount'] }} % )</td>
                            </tr>
                            <tr>
                                <td>Diskon</td>
                                <td>:</td>
                                <td style="font-weight: 600">Rp {{ number_format(session()->get('coupon')['discount_amount'], 0, '', '.') }}</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>:</td>
                                <td style="font-weight: 600">Rp {{ number_format(session()->get('coupon')['total_amount'], 0, '', '.') }}</td>
                            </tr>
                        @else
                            <tr>
                                <td>Jasa Kirim</td>
                                <td>:</td>
                                <td style="font-weight: 600">Rp {{ number_format($data['jasa_kirim'] ) }}</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>:</td>
                                <td style="font-weight: 600">Rp {{ number_format($cartTotal + $data['jasa_kirim']) }}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <form action="{{ route('manual.order') }}" method="post" id="payment-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="name" value="{{ $data['shipping_name'] }}">
                    <input type="hidden" name="email" value="{{ $data['shipping_email'] }}">
                    <input type="hidden" name="phone" value="{{ $data['shipping_phone'] }}">
                    <input type="hidden" name="post_code" value="{{ $data['post_code'] }}">
                    <input type="hidden" name="division_id" value="{{ $data['division_id'] }}">
                    <input type="hidden" name="district_id" value="{{ $data['district_id'] }}">
                    <input type="hidden" name="state_id" value="{{ $data['state_id'] }}">
                    <input type="hidden" name="address" value="{{ $data['address'] }}">

                    <div class="cards">
                        <div class="headTitle">METODE PEMBAYARAN</div>
                        <div class="labelForm">Silahkan lakukan pembayaran transfer bank pada no. rekening berikut!</div>
                        <img src="{{ asset('frontend/assets/images/payments/bri.png') }}" alt="bri" style="height: 30px;">
                        <p>029872653781</p>
                        <p>A.n. Jouda|Official.</p>
                        <div class="form-group mt-4">
                            <div class="form-group">
                                <label class="labelForm" for="foto">
                                    Unggah Bukti Pembayaran
                                </label>
                                <input type="file" id="foto" name="bukti_pembayaran" class="form-control bordered" accept="image/*" required>
                            </div>
                        </div>
                        <div class="justify-end">
                            <button type="submit" class="btnRounded">Buat Pesanan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection