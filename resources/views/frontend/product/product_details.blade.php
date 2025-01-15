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
        </div>
        <div class="navDetailBtn">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="details">
            <div class="fixedDetail">
                <div class="title" id="pname">{{ $product->product_name }}</div>
                <div class="price"><span>Rp. </span> {{ number_format($product->product_price, 0, '', '.') }}</div>
                @if ($product->product_discount)
                    <div class="discount"><span>Rp. </span> {{ number_format($product->product_discount, 0, '', '.') }}</div>
                @endif
                @php
                    $reviewcount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();
                    $avarage = App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
                @endphp
                
                <div class="rate">
                    @if($avarage == 0)
                        <div class="text">Tidak Ada Ulasan</div>
                    @elseif($avarage == 1 || $avarage < 2) 
                        <div class="star">
                            <i class='bx bxs-star'></i> 
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    @elseif($avarage == 2 || $avarage < 3) 
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    @elseif($avarage == 3 || $avarage < 4)
                        <div class="star"> 
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    @elseif($avarage == 4 || $avarage < 5) 
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    @elseif($avarage == 5 || $avarage < 5) 
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    @endif
                    <div class="text">|</div>
                    <div class="text"><span>2</span> Review</div>
                </div>
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
                <div class="wrapperNavTab">
                    <div class="containerNav">
                        <a href="javascript:void(0)" class="navLink active" onclick="navOpen(event, 'deskripsi');">Deskripsi</a>
                        <a href="javascript:void(0)" class="navLink" onclick="navOpen(event, 'ukuran');">Ukuran</a>
                        <a href="javascript:void(0)" class="navLink" onclick="navOpen(event, 'tambah_ulasan');">Beri Ulasan</a>
                        <a href="javascript:void(0)" class="navLink" onclick="navOpen(event, 'ulasan_produk');">Ulasan Produk</a>
                    </div>

                    <div id="deskripsi" class="containerTab">
                        <div class="text">{!! $product->product_long_desc !!}</div>
                    </div>

                    <div id="ukuran" class="containerTab" style="display:none">
                        <div class="text medium">Ukuran Dibuat Dalam Inchi</div>
                        <div class="text medium">ATAS</div>
                        <table class="sizeChart">
                            <tr>
                                <td width="30%">Deskripsi</td>
                                <td>XS</td>
                                <td>S</td>
                                <td>M</td>
                                <td>L</td>
                                <td>XL</td>
                            </tr>
                            <tr>
                                <td>Bahu</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                            </tr>
                            <tr>
                                <td>Dada</td>
                                <td>39</td>
                                <td>41</td>
                                <td>43</td>
                                <td>45</td>
                                <td>48</td>
                            </tr>
                            <tr>
                                <td>Pinggang</td>
                                <td>40</td>
                                <td>42</td>
                                <td>44</td>
                                <td>46</td>
                                <td>49</td>
                            </tr>
                            <tr>
                                <td>Panjang Lengan</td>
                                <td>23</td>
                                <td>23</td>
                                <td>24</td>
                                <td>24</td>
                                <td>24</td>
                            </tr>
                            <tr>
                                <td>Panjang (Depan)</td>
                                <td>28</td>
                                <td>28</td>
                                <td>29</td>
                                <td>29</td>
                                <td>30</td>
                            </tr>
                        </table>
                        <div class="text medium">BAWAH</div>
                        <table class="sizeChart">
                            <tr>
                                <td width="30%">Deskripsi</td>
                                <td>XS</td>
                                <td>S</td>
                                <td>M</td>
                                <td>L</td>
                                <td>XL</td>
                            </tr>
                            <tr>
                                <td>Pinggang</td>
                                <td>27-28</td>
                                <td>28-29</td>
                                <td>30-31</td>
                                <td>32-33</td>
                                <td>34-35</td>
                            </tr>
                            <tr>
                                <td>Paha</td>
                                <td>24</td>
                                <td>26</td>
                                <td>27</td>
                                <td>27</td>
                                <td>28</td>
                            </tr>
                            <tr>
                                <td>Panjang</td>
                                <td>39</td>
                                <td>39</td>
                                <td>40</td>
                                <td>41</td>
                                <td>41</td>
                            </tr>
                            <tr>
                                <td>Lingkar Kaki</td>
                                <td>16</td>
                                <td>16</td>
                                <td>17</td>
                                <td>17</td>
                                <td>17.5</td>
                            </tr>
                        </table>
                    </div>

                    <div id="tambah_ulasan" class="containerTab" style="display:none">
                        @guest
                            <div class="text">Untuk menambahkan ulasan. Anda harus login terlebih dahulu <a href="{{ route('login') }}">Login disini</a></div> 
                        @else
                            <div class="text medium">BERI ULASAN</div>
                            <div class="product-add-review">
                                <div class="review-form">
                                    <form role="form" class="cnt-form" method="post"
                                        action="{{ route('review.store') }}">
                                        @csrf

                                        <input type="hidden" name="product_id"
                                            value="{{ $product->id }}">
                                        <table class="sizeChart">
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>1 STAR</td>
                                                <td>2 STARS</td>
                                                <td>3 STARS</td>
                                                <td>4 STARS</td>
                                                <td>5 STARS</td>
                                            </tr>
                                            <tr>
                                                <td>RATING</td>
                                                <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                <td><input type="radio" name="quality" class="radio" value="5"></td>
                                            </tr>
                                        </table>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputReview" class="labelForm">Ulasan *</label>
                                                    <textarea class="form-control txt txt-review bordered"
                                                        name="comment" id="exampleInputReview" rows="4"
                                                        placeholder="Bagaimana pengalaman anda setelah menggunakan produk ini ?"></textarea>
                                                </div><!-- /.form-group -->
                                            </div>
                                        </div><!-- /.row -->
                                        <div class="justify-end">
                                            <button type="submit" class="btnRounded">Kirim Ulasan</button>
                                        </div><!-- /.action -->
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>

                    <div id="ulasan_produk" class="containerTab" style="display:none">
                        <div class="text medium">Ulasan Pembeli</div>
                        @php
                            $reviews = App\Models\Review::where('product_id',$product->id)->latest()->limit(5)->get();
                        @endphp
                        <div class="reviewProduct">
                            @foreach($reviews as $item)
                                @if($item->status == 1)
                                    <div class="review">
                                        <div class="reviewHeader">
                                            <img src="{{ (!empty($item->user->profile_photo_path))? url('upload/user_images/'.$item->user->profile_photo_path):url('upload/no_image.jpg') }}">
                                            <div class="titleDesc">
                                                <div class="name">{{ $item->user->name }}</div>
                                                <div class="dttm">
                                                    <i class='bx bxs-calendar'></i>
                                                    <div class="date">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</div>
                                                </div>
                                                <div class="star">
                                                    @if($item->rating == 1)
                                                        <i class='bx bxs-star'></i> 
                                                        <i class='bx bx-star'></i>
                                                        <i class='bx bx-star'></i>
                                                        <i class='bx bx-star'></i>
                                                        <i class='bx bx-star'></i>
                                                    @elseif($item->rating == 2)
                                                        <i class='bx bxs-star'></i> 
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bx-star'></i>
                                                        <i class='bx bx-star'></i>
                                                        <i class='bx bx-star'></i>
                                                    @elseif($item->rating == 3)
                                                        <i class='bx bxs-star'></i> 
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bx-star'></i>
                                                        <i class='bx bx-star'></i>
                                                    @elseif($item->rating == 4)
                                                        <i class='bx bxs-star'></i> 
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bx-star'></i>
                                                    @elseif($item->rating == 5)
                                                        <i class='bx bxs-star'></i> 
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                    @endif
                                                </div>
                                                <div class="desc">"{{ $item->comment }}"</div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pageShop relatedProduct">
        <div class="headTitle">PRODUK TERKAIT</div>
        <div class="swiper swiperRelatedProduct">
            <div class="swiper-wrapper">
                @foreach($relatedProduct as $product)
                    <div class="swiper-slide content">
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
    </div>
</section>
<script>
function navOpen(evt, type) {
  var i, x, tablinks;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("navLink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(type).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
@endsection