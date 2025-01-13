@extends('frontend.main_master')
@section('content')

@section('title')
Wishlist
@endsection

<section class="content">
    <div class="shoppingCart">
        <div class="headTitle">WHISLIST</div>
        <div class="listCart">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-left">Produk</th>
                        <th class="text-left">Nama Produk</th>
                        <th class="text-center">Total</th>
                        <th colspan="2" class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody id="wishlist">
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection