@extends('frontend.main_master')
@section('content')

@section('title')
    Belanja
@endsection

<section class="content">
    <div class="pageShop">
        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-6">
                    @php
                        $amount = $product->product_price - $product->product_discount;
                        $discount = ($amount/$product->product_price) * 100;
                    @endphp

                    <div class="containerImg">
                        @if ($product->product_discount)
                            <div class="label">Discount {{ round($discount) }}%</div>
                        @else
                            <div class="label">Baru</div>
                        @endif
                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}">
                            <img src="{{ asset($product->product_thambnail) }}" alt="">
                        </a>
                    </div>
                    <div class="containerDesc">
                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}" class="title">
                            {{ $product->product_name }} 
                        </a>
                        @if ($product->product_discount)
                            <div class="price discount"><span>Rp </span> {{ number_format($product->product_discount, 0, '', '.') }}</div>
                        @endif
                        <div class="price"><span>Rp </span> {{ number_format($product->product_price, 0, '', '.') }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection