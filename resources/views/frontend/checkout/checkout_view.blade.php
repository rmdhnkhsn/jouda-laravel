@extends('frontend.main_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('title')
Chekout
@endsection


<section class="content">
    <div class="shoppingCart">
        <form class="register-form" action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="cards">
                        <div class="headTitle">ALAMAT PENERIMA</div>
                        <div class="form-group">
                            <label class="labelForm">Nama</label>
                            <input type="text" class="form-control bordered" id="shipping_name" name="shipping_name" value="{{ Auth::user()->name }}" placeholder="*Masukkan nama anda...">
                        </div>
                        <div class="form-group">
                            <label class="labelForm">Email</label>
                            <input type="text" class="form-control bordered" id="shipping_email" name="shipping_email" value="{{ Auth::user()->email }}" placeholder="*Masukkan email anda...">
                        </div>
                        <div class="form-group">
                            <label class="labelForm">No Telpon</label>
                            <input type="number" class="form-control bordered" id="shipping_phone" name="shipping_phone" value="{{ Auth::user()->phone }}" placeholder="*Masukkan no telp anda...">
                        </div>
                        
                        <div class="form-group">
                            <label class="labelForm">Provinsi</label>
                            <select class="form-control bordered" id="division_id" name="division_id">
                                <option selected="" disabled="">--Pilih Provinsi--</option>
                                @foreach ($divisions->rajaongkir->results as $item )
                                    <option value="{{$item->province_id}}" alias="{{ $item->province }}">{{ $item->province }}</option>
                                @endforeach
                                {{--@foreach($divisions as $item)
                                    <option value="{{ $item->id }}">{{ $item->division_name }}</option>
                                @endforeach--}}
                            </select>
                            @error('division_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="labelForm">Kota/Kabupaten</label>
                            <select class="form-control bordered" id="district_id" name="district_id" onchange="getCost();getSubDistrict()">
                                <option selected="" disabled="">--Pilih Kota/Kabupaten--</option>
                            </select>
                            @error('district_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- <div class="form-group">
                            <label class="labelForm">Kecamatan</label>
                            <select class="form-control bordered" id="subdistrict_id" name="subdistrict_id">
                                <option selected="" disabled="">--Pilih Kecamatan--</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label class="labelForm">Kecamatan</label>
                            <input type="text" class="form-control bordered" id="subdistrict" name="subdistrict" value="" placeholder="*Masukkan kecamatan anda..." required>
                        </div>
                        <div class="form-group">
                            <label class="labelForm">Kode Pos</label>
                            <input type="number" class="form-control bordered" id="post_code" name="post_code" value="{{ Auth::user()->post_code }}" placeholder="*Masukkan kode pos anda..." required>
                        </div>
                        <div class="form-group">
                            <label class="labelForm">Layanan Kurir</label>
                            <select class="form-control bordered" id="courier" name="courier" onchange="calculateCost()" required>
                                <option selected="" disabled="">--Pilih Kurir--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="labelForm">Alamat</label>
                            <textarea class="form-control" cols="30" rows="5" placeholder="Alamat" name="address" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="cards">
                        <div class="headTitle">METODE PEMBAYARAN</div>
                        <div class="form-group">
                            <input type="radio" name="payment_method" id="payment_method" value="transfer" required>
                            <label for="payment_method" class="labelForm">Transfer</label>
                            <div class="paymentImg">
                                <img src="{{ asset('frontend/assets/images/payments/bri.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="headTitle">KERANJANG BELANJA ANDA</div>
                        <div class="listCart">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-left">Foto Produk</th>
                                        <th class="text-left">Nama Produk</th>
                                        <th class="text-center">Qty</th>
                                        <th class="text-center">Warna</th>
                                        <th class="text-center">Ukuran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total_weight = 0;
                                    @endphp
                                    @foreach($carts as $item)
                                        @php
                                            $total_weight += $item->weight;
                                        @endphp
                                        <tr>
                                            <td>
                                                <img src="{{ asset($item->options->image) }}" class="cartImg" style="height: 50px">
                                            </td>
                                            <td style="vertical-align: middle">{{ $item->name }}</td>
                                            <td style="vertical-align: middle" class="text-center">{{ $item->qty }}</td>
                                            <td style="vertical-align: middle" class="text-center">{{ $item->options->color }}</td>
                                            <td style="vertical-align: middle" class="text-center">{{ $item->options->size }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="paymentInfo">
                            <input type="hidden" id="total_weight" name="total_weight" value="{{$total_weight}}">
                            <input type="hidden" id="jasa_kirim" name="jasa_kirim" value="" required>
                            <input type="hidden" id="division" name="division" value="" required>
                            <input type="hidden" id="district" name="district" value="" required>
                            <div class="containers">
                                <div class="text">Sub Total :</div>
                                <div class="text price">Rp. <span>{{ number_format($cartTotal, 0, '', '.') }}</span></div>
                            </div>
                            @if(Session::has('coupon'))
                                <div class="containers">
                                    <div class="text">Kupon :</div>
                                    <div class="text price">Rp. {{ session()->get('coupon')['coupon_name'] }} ( {{ session()->get('coupon')['coupon_discount'] }} % )</div>
                                </div>
                                <div class="containers">
                                    <div class="text">Diskon :</div>
                                    <div class="text price">Rp. {{ number_format(session()->get('coupon')['discount_amount'], 0, '', '.') }}</div>
                                </div>
                                <div class="containers">
                                    <div class="text">Total :</div>
                                    <div class="text price">Rp. {{ number_format(session()->get('coupon')['total_amount'], 0, '', '.') }}</div>
                                </div>
                            @else
                                <div class="containers">
                                    <div class="text">Jasa Kirim :</div>
                                    <div class="text price">Rp. <span id="cost">0</span></div>
                                </div>
                                <div class="containers">
                                    <div class="text">Total :</div>
                                    <div class="text price">Rp. <span id="total">{{ number_format($cartTotal, 0, '', '.') }}</span></div>
                                </div>
                            @endif
                            <button type="submit" class="btnRounded mt-5" style="height: 40px">LANJUTKAN BELANJA</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script type="text/javascript">
    var cartTotal = '{{$cartTotal}}';

    $(document).ready(function () {
        $('select[name="division_id"]').on('change', function () {
            let division_id = $(this).val();

            var selectedOption = $('#division_id').find(':selected');
            let division = selectedOption.attr('alias');
            $('#division').val(division)
            if (division_id) {
                $.ajax({
                    url: "{{  url('/district-get/ajax') }}/" + division_id,
                    type: "GET",
                    dataType: "json",
                    success: function (res) {
                        let data = res.rajaongkir.results;
                        // console.log(data)
                        $('select[name="state_id"]').html('');
                        $('select[name="district_id"]').html('');
                        $.each(data, function (key, value) {
                            // console.log(value)
                            $('select[name="district_id"]').append(
                                '<option value="' + value.city_id + '" alias="' + value.city_name + '">' + value.city_name + '</option>');
                        });

                        getCost()
                        calculateCost()
                    },
                });
            } else {
                alert('danger');
            }
        });

    });

    function getCost() {
        let division_id = $('#division_id').val();
        let district_id = $('#district_id').val();
        let total_weight = $('#total_weight').val();

        var selectedOption = $('#district_id').find(':selected');
        let district = selectedOption.attr('alias');
        $('#district').val(district)

        if (district_id) {
            $.ajax({
                url: "{{  url('/cost-get/ajax') }}/" + division_id + '/' + district_id + '/' + total_weight,
                type: "GET",
                dataType: "json",
                success: function (res) {
                    // console.log(res)
                    let data = res.rajaongkir.results[0].costs;
                    // console.log(data)
                    $('select[name="courier"]').html('');
                    $('select[name="courier"]').html('<option value="0" disabled selected>Pilih Kurir</option>');
                    $.each(data, function (key, value) {
                        // console.log(value)
                        $('select[name="courier"]').append('<option value="' + value.cost[0].value + '">' + value.description + '</option>');
                    });

                    calculateCost()
                },
            });
        } else {
            alert('danger');
        }
    }

    function calculateCost() {
        let courier = $('#courier').val();

        if (courier) {
            $('#jasa_kirim').val(courier);
            $('#cost').html(numberformat(parseFloat(courier)));
            $('#total').html(numberformat(parseFloat(courier) + parseFloat(cartTotal)));
            
        } else {
            $('#jasa_kirim').val(0);
            $('#cost').html(numberformat(0));
            $('#total').html(numberformat(parseFloat(cartTotal)));
            
        }
    }
</script>

@endsection