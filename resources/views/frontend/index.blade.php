@extends('frontend.main_master')

@section('content')

@section('title')
M SHOP|Official
@endsection

<section class="content" id="web">
    <div class="containerBanner">
        <div class="swiper swiperBanner">
            <div class="swiper-wrapper">
                <div class="swiper-slide content">
                    <div class="bannerSwiper">
                        <a href="#">
                            <img src="{{ asset('frontend/bundle/img/banners/banner_1.png') }}">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide content">
                    <div class="bannerSwiper">
                        <a href="#">
                            <img src="{{ asset('frontend/bundle/img/banners/banner_2.png') }}">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide content">
                    <div class="bannerSwiper">
                        <a href="#">
                            <img src="{{ asset('frontend/bundle/img/banners/banner_3.png') }}">
                        </a>
                    </div>
                </div>
            </div>
            <div class="news-pagination"></div>
        </div>
        <div class="navNewsBtn">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="announceProduct">
        <div class="containerImg first">
            <img src="{{ asset('frontend/bundle/img/product/ubaidah.png') }}">
            <div class="title">ubaidah</div>
            <div class="title">series</div>
        </div>
        <div class="containerImg second">
            <div class="title">salman</div>
            <div class="title">series</div>
            <img src="{{ asset('frontend/bundle/img/product/salman.png') }}">
        </div>
        <div class="containerWording">
            <div class="containerTitle">
                <div class="title">salman series</div>
                <div class="desc">Hadirkan kehangatan dan kepercayaan diri dalam setiap langkah Anda dengan Baju Koko Salman Series. Koleksi ini dirancang untuk pria modern yang cerdas dan kreatif, menggabungkan estetika tradisional dengan sentuhan desain kontemporer.</div>
            </div>
            <div class="containerTitle second">
                <div class="title">ubaidah series</div>
                <div class="desc">Temukan kenyamanan dan gaya modern dengan Baju Koko Ubaidah Series. Dirancang khusus untuk pria cerdas, inovatif, dan penuh optimisme, seri ini memadukan desain elegan dengan sentuhan kekinian yang tetap menghormati nilai tradisional.</div>
            </div>
        </div>
    </div>
    @foreach($products as $item)
        @php
            if ($item->id == 13) {
                $idJafar = $item->id;
                $slugJafar = $item->product_slug;
            } elseif ($item->id == 14) {
                $idHudzaifah = $item->id;
                $slugHudzaifah = $item->product_slug;
            } elseif ($item->id == 15) {
                $idUmar = $item->id;
                $slugUmar = $item->product_slug;
            } elseif ($item->id == 16) {
                $idUbaidah = $item->id;
                $slugUbaidah = $item->product_slug;
            } elseif ($item->id == 17) {
                $idSalman = $item->id;
                $slugSalman = $item->product_slug;
            } elseif ($item->id == 18) {
                $idNuaiman = $item->id;
                $slugNuaiman = $item->product_slug;
            }
        @endphp
    @endforeach
    <div class="showProduct">
        <div class="containerTitle left">
            <div class="text">
                <div class="title">hudzaifah series</div>
                <div class="desc">Tampilkan karakter kuat dengan Baju Koko Hudzaifah Series, yang dirancang untuk pria dengan integritas tinggi dan kepribadian yang ramah. Koleksi ini menggabungkan nilai-nilai keteguhan hati dengan desain modern yang nyaman dan stylish.</div>
            </div>
            <a href="{{ url('product/details/'.$idHudzaifah.'/'.$slugHudzaifah) }}" class="btnDetail">Detail</a>
        </div>
        <div class="containerImg">
            <img src="{{ asset('frontend/bundle/img/product/group.png') }}">
            <div class="containerTitle bot">
                <div class="text">
                    <div class="title">nu'aiman series</div>
                    <div class="desc">Temukan kenyamanan dan gaya dalam Baju Koko Nu'aiman, pilihan sempurna untuk pria yang menginginkan tampilan ceria, humanis, dan tetap santai. Dengan desain modern yang terinspirasi dari keceriaan kehidupan sehari-hari, baju koko ini menggabungkan nuansa tradisional dengan sentuhan kontemporer.</div>
                </div>
                <a href="{{ url('product/details/'.$idNuaiman.'/'.$slugNuaiman) }}" class="btnDetail">Detail</a>
            </div>
        </div>
        <div class="containerTitle right">
            <div class="text">
                <div class="title">umar series</div>
                <div class="desc">Tampil berwibawa dan penuh kekuatan dengan Baju Koko Umar Series. Koleksi ini dirancang untuk pria yang menghargai kesederhanaan tanpa mengurangi kekuatan karakter dan citra diri. Dengan desain yang elegan dan sederhana, Umar Series mencerminkan kepribadian powerfull dan penuh integritas.</div>
            </div>
            <a href="{{ url('product/details/'.$idUmar.'/'.$slugUmar) }}" class="btnDetail">Detail</a>
        </div>
    </div>
    <div class="bannerBottom">
        <img src="{{ asset('frontend/bundle/img/product/groups.png') }}">
    </div>
</section>
<section class="content" id="mobile">
    <a href="{{ url('product/details/'.$idUbaidah.'/'.$slugUbaidah) }}" class="containerProduct">
        <img src="{{ asset('frontend/bundle/img/product/ubaidah.png') }}">
    </a>
    <a href="{{ url('product/details/'.$idNuaiman.'/'.$slugNuaiman) }}" class="containerProduct">
        <img src="{{ asset('frontend/bundle/img/product/nuaiman.png') }}">
    </a>
    <a href="{{ url('product/details/'.$idSalman.'/'.$slugSalman) }}" class="containerProduct">
        <img src="{{ asset('frontend/bundle/img/product/salman.png') }}">
    </a>
    <div class="productDetail">
        <a href="{{ url('product/details/'.$idHudzaifah.'/'.$slugHudzaifah) }}" class="containerProduct">
            <img src="{{ asset('frontend/bundle/img/product/hudzaifah.png') }}">
        </a>
        <div class="containerTitle">
            <div class="text">
                <div class="title">Hudzaifah Series</div>
                <div class="desc">Tampilkan karakter kuat dengan Baju Koko Hudzaifah Series, yang dirancang untuk pria dengan integritas tinggi dan kepribadian yang ramah. Koleksi ini menggabungkan nilai-nilai keteguhan hati dengan desain modern yang nyaman dan stylish.</div>
            </div>
            <a href="{{ url('product/details/'.$idHudzaifah.'/'.$slugHudzaifah) }}" class="btnShop">Check Out<i class='bx bx-cart-alt'></i></a>
        </div>
    </div>
</section>
@endsection