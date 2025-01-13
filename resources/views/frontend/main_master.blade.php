<!DOCTYPE html>
<html lang="en">
@php
$seo = App\Models\Seo::find(1);
@endphp

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="{{ $seo->meta_description }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="{{ $seo->meta_author }}">
    <meta name="keywords" content="{{ $seo->meta_keyword }}">
    <meta name="robots" content="all">
    <link rel="icon" href="{{ asset('frontend/bundle/img/logo.svg') }}">

    <!-- /// Google Analytics Code // -->
    <!-- <script>
        {{ $seo->google_analytics }}
    </script> -->
    <!-- /// Google Analytics Code // -->

    <title>@yield('title') </title>

    <!-- Bootstrap Core CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}"> -->

    <!-- Customizable CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/blue.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/rateit.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/navbar.css') }}">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.css') }}">

    <!-- NEW -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Reem+Kufi:wght@400..700&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/bundle/css/font/poppins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/bundle/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/bundle/css/icon/boxicon/boxicon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/bundle/css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/bundle/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/bundle/css/swiper.css') }}">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <script src="https://js.stripe.com/v3/"></script>
</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    @include('frontend.body.header')

    <!-- ============================================== HEADER : END ============================================== -->
    @yield('content')
    <!-- /#top-banner-and-menu -->

    <!-- ============================================================= FOOTER ============================================================= -->
    @include('frontend.body.footer')
    <!-- ============================================================= FOOTER : END============================================================= -->

   <!-- NEW -->
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend/bundle/js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('frontend/bundle/js/bootstrap-5.3.2.min.js') }}"></script>
    <script src="{{ asset('frontend/bundle/js/script.js') }}"></script>

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <!-- <script src="{{ asset('frontend/assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script> -->
    <script src="{{ asset('frontend/assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/echo.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.easing-1.3.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.rateit.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scripts.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch (type) {
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
        @endif
    </script>



    <!-- Keranjang Product Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" style="max-width: 800px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong><span id="pname"></span> </strong></h5>
                    <button type="button" onclick="closeModal()" class="close" data-dismiss="modal" aria-label="Close" id="closeModel">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-4">

                            <div class="card" style="width: 18rem;">

                                <img src=" " class="card-img-top" alt="..." style="height: 200px; width: 200px;"
                                    id="pimage">

                            </div>

                        </div><!-- // end col md -->


                        <div class="col-md-4">

                            <table class="table">
                                <tr>
                                    <td>Harga </td>
                                    <td>:</td>
                                    <td>
                                        <strong class="text-danger">Rp<span id="pprice"></span></strong>
                                        <del id="oldprice">Rp</del>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kode Produk</td>
                                    <td>:</td>
                                    <td>
                                        <strong id="pcode"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td>:</td>
                                    <td>
                                        <strong id="pcategory"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Merk</td>
                                    <td>:</td>
                                    <td>
                                        <strong id="pbrand"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Berat</td>
                                    <td>:</td>
                                    <td>
                                        <strong id="pweight"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>:</td>
                                    <td id="stokStatus">
                                        <!-- <span class="badge blue" id="aviable"></span>
                                        <span class="badge red" id="stockout"></span> -->
                                    </td>
                                </tr>
                            </table>

                        </div><!-- // end col md -->


                        <div class="col-md-4">

                            <div class="form-group">
                                <label class="labelForm" for="color">Pilih Warna</label>
                                <select class="form-control" id="color" name="color">


                                </select>
                            </div> <!-- // end form group -->


                            <div class="form-group" id="sizeArea">
                                <label class="labelForm" for="size">Pilih Ukuran</label>
                                <select class="form-control" id="size" name="size">
                                    <option>1</option>

                                </select>
                            </div> <!-- // end form group -->

                            <div class="form-group">
                                <label class="labelForm" for="qty">Atur Jumlah</label>
                                <input type="number" class="form-control" id="qty" value="1" min="1">
                            </div> <!-- // end form group -->

                            <input type="hidden" id="product_id">
                            <div class="justify-end">
                                <button type="submit" class="btnRounded" onclick="addToCart()">Keranjang</button>
                            </div>


                        </div><!-- // end col md -->


                    </div> <!-- // end row -->



                </div> <!-- // end modal Body -->

            </div>
        </div>
    </div>
    <!-- End Keranjang Product Modal -->

    <script>
        $(document).ready(function () {
            $('#profileImage').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        function numberformat(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        // Start Product View with Modal 

        function productView(id) {
            // alert(id)
            $.ajax({
                type: 'GET',
                url: '/product/view/modal/' + id,
                dataType: 'json',
                success: function (data) {
                    console.log(data)
                    $('#pname').text(data.product.product_name);
                    $('#price').text(data.product.product_price);
                    $('#pcode').text(data.product.product_code);
                    $('#pcategory').text(data.product.category.category_name);
                    $('#pbrand').text(data.product.brand.brand_name);
                    $('#pweight').text(data.product.product_weight);
                    $('#pimage').attr('src', '/' + data.product.product_thambnail);

                    $('#product_id').val(id);
                    $('#qty').val(1);

                    // Product Price 
                    if (data.product.product_discount == null) {
                        $('#pprice').text('');
                        $('#oldprice').text('');
                        $('#pprice').text(data.product.product_price);


                    } else {
                        $('#pprice').text(data.product.product_discount);
                        $('#oldprice').text(data.product.product_price);

                    } // end prodcut price 

                    // Start Stock opiton
                    $('#stokStatus').html('')
                    if (data.product.product_qty > 0) {
                        $('#stokStatus').append('<span class="badge blue">Tersedia</span>');
                        // $('#aviable').text('');
                        // $('#stockout').text('');
                        // $('#aviable').text('tersedia');

                    } else {
                        $('#stokStatus').append('<span class="badge blue">Tidak Tersedia</span>');
                        // $('#aviable').text('');
                        // $('#stockout').text('');
                        // $('#stockout').text('tidak tersedia');
                    } // end Stock Option 

                    // Color
                    $('select[name="color"]').empty();
                    $.each(data.color, function (key, value) {
                        $('select[name="color"]').append('<option value=" ' + value + ' ">' +
                            value + ' </option>')
                    }) // end color

                    // Size
                    $('select[name="size"]').empty();
                    $.each(data.size, function (key, value) {
                        $('select[name="size"]').append('<option value=" ' + value + ' ">' + value +
                            ' </option>')
                        if (data.size == "") {
                            $('#sizeArea').hide();
                        } else {
                            $('#sizeArea').show();
                        }

                    }) // end size

                    $('#exampleModal').modal('show')

                }

            })


        }
        // Eend Product View with Modal 

        function closeModal() {
            $('#exampleModal').modal('hide')
        }

        // Start Keranjang Product 

        function addToCart() {
            var product_name = $('#pname').text();
            var product_weight = $('#pweight').text();
            var id = $('#product_id').val();
            var color = $('#color option:selected').text();
            var size = $('#size option:selected').text();
            var quantity = $('#qty').val();
            $.ajax({
                type: "POST",
                dataType: 'json',
                data: {
                    color: color,
                    size: size,
                    quantity: quantity,
                    product_weight: product_weight,
                    product_name: product_name
                },
                url: "/cart/data/store/" + id,
                success: function (data) {

                    miniCart()
                    $('#closeModel').click();
                    // console.log(data)

                    // Start Message 
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            title: data.success
                        })

                    } else {
                        Toast.fire({
                            type: 'error',
                            title: data.error
                        })

                    }

                    // End Message 
                }
            })

        }

        // End Keranjang Product 
    </script>

    <script type="text/javascript">
        function numberformat(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function miniCart() {
            $.ajax({
                type: 'GET',
                url: '/product/mini/cart',
                dataType: 'json',
                success: function (response) {

                    $('span[id="cartSubTotal"]').text(response.cartTotal);
                    $('#cartQty').text(response.cartQty);
                    $('#whistListQty').text(response.whistListQty);
                    var miniCart = ""

                    $.each(response.carts, function (key, value) {
                        miniCart += `<div class="cart-item product-summary">
          <div class="row">
            <div class="col-xs-4">
              <div class="image"> <a href="#"><img src="/${value.options.image}" alt=""></a> </div>
            </div>
            <div class="col-xs-7">
              <h3 class="name"><a href="#">${value.name}</a></h3>
              <div class="price"> Rp${numberformat(value.price)} X ${value.qty} </div>
            </div>
            <div class="col-xs-1 action"> 
            <button type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"><i class="fa fa-trash"></i></button> </div>
          </div>
        </div>
        <!-- /.cart-item -->
        <div class="clearfix"></div>
        <hr>`
                    });

                    $('#miniCart').html(miniCart);
                }
            })

        }
        miniCart();

        /// mini cart remove Start 
        function miniCartRemove(rowId) {
            $.ajax({
                type: 'GET',
                url: '/minicart/product-remove/' + rowId,
                dataType: 'json',
                success: function (data) {
                    miniCart();

                    // Start Message 
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            title: data.success
                        })

                    } else {
                        Toast.fire({
                            type: 'error',
                            title: data.error
                        })

                    }

                    // End Message 

                }
            });

        }

        //  end mini cart remove 
    </script>

    <!--  /// Start Add Wishlist Page  //// -->

    <script type="text/javascript">
        
        function addToWishList(product_id) {
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "/add-to-wishlist/" + product_id,

                success: function (data) {

                    // Start Message 
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })

                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })

                    }

                    // End Message 


                }

            })

        }
    </script>

    <!--  /// End Add Wishlist Page  ////   -->

    <!-- /// Load Wishlist Data  -->


    <script type="text/javascript">
        function numberformat(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
        function wishlist() {
            $.ajax({
                type: 'GET',
                url: '/user/get-wishlist-product',
                dataType: 'json',
                success: function (response) {

                    var rows = ""
                    $.each(response, function (key, value) {
                        rows += `<tr>
                                    <td>
                                        <img src="/${value.product.product_thambnail}" class="cartImg">
                                    </td>
                                    <td style="vertical-align: middle">
                                        <div class="name">${value.product.product_name}</div>
                                    </td>
                                    <td class="text-center" style="vertical-align: middle">
                                        ${value.product.product_discount == null ? 
                                            `Rp ${numberformat(value.product.product_price)}` :
                                            `Rp ${numberformat(value.product.product_discount)}
                                                <span>Rp ${numberformat(value.product.product_price)}</span>`
                                        }
                                    </td>
                                    <td class="text-center" style="vertical-align: middle">
                                        <button class="btnQty blue" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="${value.product_id}" onclick="productView(this.id)"> <i class='bx bx-shopping-bag'></i> </button>
                                        <button type="button" class="btnQty red" title="Delete" id="${value.id}" onclick="wishlistRemove(this.id)"><i class='bx bx-x'></i></button>
                                    </td>
                                </tr>`
                    });

                    $('#wishlist').html(rows);
                }
            })

        }
        wishlist();



        ///  Wishlist remove Start 
        function wishlistRemove(id) {
            $.ajax({
                type: 'GET',
                url: '/user/wishlist-remove/' + id,
                dataType: 'json',
                success: function (data) {
                    wishlist();

                    // Start Message 
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })

                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })

                    }

                    // End Message 

                }
            });

        }

        // End Wishlist remove   
    </script>


    {{-- Cart Page --}}
    <script type="text/javascript">
        function numberformat(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function cart() {
            $.ajax({
                type: 'GET',
                url: '/user/get-cart-product',
                dataType: 'json',
                success: function (response) {

                    var rows = ""
                    $.each(response.carts, function (key, value) {
                        rows +=
                            `<tr>
                                <td>
                                    <img src="/${value.options.image}" class="cartImg">
                                    <div class="name">${value.name}</div>
                                    <div class="detail">
                                        <div class="desc">${value.options.color}</div>
                                        <div class="desc">|</div>
                                        <div class="desc">${value.options.size}</div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="wrapperQty">
                                        ${value.qty > 1 ? `<button type="submit" class="btnQty" id="${value.rowId}" onclick="cartDecrement(this.id)" ><i class='bx bx-minus'></i></button> ` : `<button type="submit" class="btnQty" disabled ><i class='bx bx-minus'></i></button> `}
                                        <input type="text" class="formQty" value="${value.qty}" min="1" max="100" disabled="">  
                                        <button type="submit" class="btnQty" id="${value.rowId}" onclick="cartIncrement(this.id)" ><i class='bx bx-plus'></i></button>    
                                    </div>
                                </td>
                                <td class="text-center" id="resize">Rp. ${numberformat(value.price)}</td>
                                <td class="text-center">Rp. ${numberformat(value.subtotal)}</td>
                                <td class="text-center">
                                    <button type="submit" class="btnQty red" id="${value.rowId}" onclick="cartRemove(this.id)"><i class='bx bx-x'></i></button>
                                </td>
                            </tr>`
                    });
                    $('#cartPage').html(rows);
                }
            })
        }

        cart();

        // Remove Cart
        function cartRemove(id) {
            $.ajax({
                type: 'GET',
                url: '/user/cart-remove/' + id,
                dataType: 'json',
                success: function (data) {
                    couponCalculation();
                    cart();
                    miniCart();
                    $('#couponField').show();
                    $('#coupon_name').val('');

                    // Start Message 
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })

                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })

                    }

                    // End Message 

                }
            });

        }

        // Cart Increment
        function cartIncrement(rowId) {
            $.ajax({
                type: 'GET',
                url: "/cart-increment/" + rowId,
                dataType: 'json',
                success: function (data) {
                    couponCalculation();
                    cart();
                    miniCart();
                }
            });
        }

        // Cart Decrement
        function cartDecrement(rowId) {
            $.ajax({
                type: 'GET',
                url: "/cart-decrement/" + rowId,
                dataType: 'json',
                success: function (data) {
                    couponCalculation();
                    cart();
                    miniCart();
                }
            });
        }
    </script>

    {{-- Coupon Apply --}}
    <script type="text/javascript">
        function applyCoupon() {
            var coupon_name = $('#coupon_name').val();
            $.ajax({
                type: 'POST',
                dataType: 'json',
                data: {
                    coupon_name: coupon_name
                },
                url: "{{ url('/coupon-apply') }}",
                success: function (data) {
                    couponCalculation();
                    if (data.validity == true) {
                        $('#couponField').hide();
                    }

                    // Start Message 
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })


                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })

                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })
                    } // End Message 
                }
            })
        }

        function couponCalculation() {
            $.ajax({
                type: 'GET',
                url: "{{ url('/coupon-calculation') }}",
                dataType: 'json',
                success: function (data) {
                    $('#couponCalField').html('')
                    
                    if (data.total) {
                        $('#couponCalField').html(
                            `
                            <div class="containers">
                                <div class="text">Sub Total :</div>
                                <div class="text price">Rp. ${numberformat(data.total)}</div>
                            </div>
                            <div class="containers">
                                <div class="text">Total :</div>
                                <div class="text price">Rp. ${numberformat(data.total)}</div>
                            </div>`
                        )

                    } else {

                        $('#couponCalField').html(
                            `
                            <div class="containers">
                                <div class="text">Sub Total :</div>
                                <div class="text price">Rp. ${numberformat(data.subtotal)}</div>
                            </div>
                            <div class="containers">
                                <div class="text">Kupon :</div>
                                <div class="text price">${data.coupon_name} <button type="submit" class="btnTransparent" onclick="couponRemove()"><i class="bx bx-x"></i>  </button> </div>
                            </div>
                            <div class="containers">
                                <div class="text">Diskon :</div>
                                <div class="text price">Rp. ${numberformat(data.discount_amount)}</div>
                            </div>
                            <div class="containers">
                                <div class="text">Total :</div>
                                <div class="text price">Rp. ${numberformat(data.total_amount)}</div>
                            </div>`
                        )
                    }
                }
            });
        }
        couponCalculation();
    </script>

    {{-- Remove Coupon --}}
    <script type="text/javascript">
        function couponRemove() {
            $.ajax({
                type: 'GET',
                url: "{{ url('/coupon-remove') }}",
                dataType: 'json',
                success: function (data) {
                    couponCalculation();
                    $('#couponField').show();
                    $('#coupon_name').val('');

                    // Start Message 
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })

                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })

                    } // End Message 
                }
            });
        }
    </script>

</body>

</html>