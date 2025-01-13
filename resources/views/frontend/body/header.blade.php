<nav class="navbar">
    <div class="nav-blank">_blank</div>
    <div class="nav-toggle nav">
        <i class="bx bx-menu"></i>
    </div>
    <a href="{{ url('/') }}" class="nav-logo">
        <img src="{{ asset('frontend/bundle/img/logo.svg') }}">
        <div class="title">JOUDA</div>
        <div class="sub-title">INDONESIA</div>
      </a>
    <div class="nav-end">
      @auth
        <a href="{{ route('dashboard') }}" class="auth">PROFILE</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" class="auth" onclick="event.preventDefault(); this.closest('form').submit();">
                LOGOUT
            </a>
        </form>
      @else
        <a href="{{ route('login') }}" class="auth">LOGIN</a>
        <a href="{{ route('login') }}?type=register" class="auth">REGISTER</a>
      @endauth
      <button type="button" class="searchPanel">
          <i class='bx bx-search'></i>
      </button>
      <a href="{{ route('mycart') }}">
        <div class="cartIcon">
          <i class='bx bx-shopping-bag'></i>
          <div class="countCart" id="cartQty">0</div>
        </div>
      </a>
      <!-- <div class="nav-cart">
          <div class="containerCart">
              <div class="cartIcon">
                  <i class='bx bx-shopping-bag'></i>
                  <div class="countCart" id="cartQty">0</div>
              </div>
              <div class="detail-cart">
                  <div class="empty">Keranjang Anda Masih Kosong !!</div>
              </div>
          </div>
      </div> -->
    </div>
</nav>
<div id="backdrop" class="">
    <button class="hideBar"></button>
</div>
<div class="sidebar close">
    <div class="nav-toggle side">
        <i class="bx bx-menu"></i>
    </div>
    <ul class="nav-links">
        <li class="nav-menu menu-link">
            <a href="{{ url('/') }}">
                <span class="link_name">beranda</span>
            </a>
        </li>
        @php
          $categories = App\Models\Category::orderBy('category_name','ASC')->get();
        @endphp

        @foreach($categories as $category)
          <li class="nav-menu menu-down">
            <div class="arrow-link">
              <a href="#">
                  <div class="nav-name">
                      <div class="link_name">{{ $category->category_name }}</div>
                      <i class='bx bxs-chevron-down arrow'></i>
                  </div>
              </a>
            </div>
            <ul class="submenu">
              @php
                $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name','ASC')->get();
              @endphp
              @foreach($subcategories as $subcategory)
                <li class="submenu-link">
                  <a href="{{ url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug ) }}">{{ $subcategory->subcategory_name }}</a>
                </li>
                @php
                  $subsubcategories = App\Models\SubSubCategory::where('subcategory_id',$subcategory->id)->orderBy('subsubcategory_name','ASC')->get();
                @endphp

                @foreach($subsubcategories as $subsubcategory)
                  <li class="submenu-link">
                    <a href="{{ url('subsubcategory/product/'.$subsubcategory->id.'/'.$subsubcategory->subsubcategory_slug ) }}">{{ $subsubcategory->subsubcategory_name }}</a>
                  </li>
                @endforeach
              @endforeach
            </ul>
          </li>
        @endforeach
        <li class="nav-menu menu-link">
            <a href="{{ route('shop.page') }}">
                <span class="link_name">belanja</span>
            </a>
        </li>
        <li class="nav-menu menu-link">
            <a href="{{ route('wishlist') }}">
                <span class="link_name">Whislist</span>
            </a>
        </li>
        <li class="nav-menu menu-link">
          <a href="#" type="button" onclick="ordertraking('show')">
            <span class="link_name">Order Traking</span>
          </a>
        </li>
        <li class="nav-menu menu-link auth">
            <a href="{{ route('login') }}">
                <span class="link_name">login</span>
            </a>
        </li>
        <li class="nav-menu menu-link auth">
            <a href="{{ route('login') }}?type=register">
                <span class="link_name">register</span>
            </a>
        </li>
    </ul>
</div>

<div class="containerSearch">
    <div class="closeSearch">
      <div class="containers">
        <div>TUTUP</div>
        <i class='bx bx-x-circle'></i>
      </div>
    </div>
    <div class="content">
      <form method="post" action="{{ route('product.search') }}">
        @csrf
        <div class="title">Cari Produk</div>
        <div class="form-group">
            <input type="text" class="form-control search" id="search" name="search" placeholder="Cari Sesuatu..." onfocus="search_result_show()" onblur="search_result_hide()">
            <button type="submit" class="actSearch">
                <i class='bx bx-search-alt'></i>
            </button>
        </div>
      </form>
      <div id="searchProducts"></div>
    </div>
</div>

<div class="modal fade" id="ordertraking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lacak Pesanan </h5>
                <button type="button" onclick="ordertraking('hide')" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('order.tracking') }}">
                    @csrf
                    <label class="labelForm">Nomor Invoice</label>
                    <input type="text" name="code" required="" class="form-control bordered"
                        placeholder="Masukkan Kode Invoice">
                    <button class="btnRounded" type="submit"> Cari </button>
                </form>


            </div>

        </div>
    </div>
</div>

<style>
    .search-area {
        position: relative;
    }

    #searchProducts {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #ffffff;
        z-index: 999;
        border-radius: 8px;
        margin-top: 5px;
    }
</style>
<script>
    function search_result_hide() {
        $("#searchProducts").slideUp();
    }

    function search_result_show() {
        $("#searchProducts").slideDown();
    }

    function ordertraking(type) {
        $("#ordertraking").modal(type);
    }
</script>