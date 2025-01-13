@extends('frontend.main_master')
@section('content')

@section('title')
{{ $product->product_name }} Detail Produk
@endsection

<section class="content">
    <div class="detailProduct">
        <div class="wrapperImg">
            @foreach($multiImag as $img)
                <img src="{{ asset($img->photo_name ) }}">
            @endforeach
        </div>
        <div class="slideImg">
            <div class="swiper swiperImgDetail">
                <div class="swiper-wrapper">
                    @foreach($multiImag as $img)
                        <div class="swiper-slide content">
                            <div class="bannerSwiper">
                                <img src="{{ asset($img->photo_name ) }}">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="navDetailBtn">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div class="details">
            <div class="fixedDetail">
                <div class="title" id="pname">{{ $product->product_name }}</div>
                <div class="price"><span>Rp. </span> {{ number_format($product->product_price, 0, '', '.') }}</div>
                @if ($product->product_discount)
                    <div class="discount"><span>Rp. </span> {{ number_format($product->product_discount, 0, '', '.') }}</div>
                @endif
                <div class="descProduct">
                    <div class="desc">Berat <span id="pweight">{{ $product->product_weight }}</span> gram</div>
                    <div class="desc">|</div>
                    <div class="desc">Stok {{ $product->product_qty }}</div>
                </div>
                <div class="descText">{!! $product->product_short_desc !!}</div>
                <div class="containerForm">
                    <div class="form-group">
                        <select class="form-control bordered" id="color">
                            <option selected="" disabled="">--Pilih Warna--</option>
                            @foreach($product_color as $color)
                                <option value="{{ $color }}">{{ ucwords($color) }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if($product->product_size)
                        <div class="form-group">
                            <select class="form-control bordered" id="size">
                                <option selected="" disabled="">--Pilih Ukuran--</option>
                                @foreach($product_size as $size)
                                    <option value="{{ $size }}">{{ ucwords($size) }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="number" class="form-control bordered" id="qty" value="1" min="1">
                    </div>
                    <input type="hidden" id="product_id" value="{{ $product->id }}">
                </div>
                <div class="justify-center" style="gap: 12px; margin-bottom: 6rem">
                    <a href="{{ route('wishlist') }}" class="btnRounded lg"
                        data-toggle="tooltip" data-placement="right" title="Wishlist"
                        href="#">
                        <!-- <i class="fa fa-heart"></i> -->
                         WHISLIST
                    </a>
                    <button type="submit" onclick="addToCart()" class="btnRounded lg"> KERANJANG</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection