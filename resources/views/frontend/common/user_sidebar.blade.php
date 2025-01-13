@php

$id = Auth::user()->id;
$user = App\Models\User::find($id);

@endphp

<div class="containerNav">
    <img class="navAccountImg" src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" height="100%" width="100%">
    <div class="navAccount">
        <a href="{{ route('dashboard') }}" class="link">Beranda</a>
        <a href="{{ route('user.profile') }}" class="link">Profil Saya</a>
        <a href="{{ route('change.password') }}" class="link">Ubah Kata Sandi</a>
        <a href="{{ route('my.orders') }}" class="link">Data Transaksi</a>
        <a href="{{ route('cancel.orders') }}" class="link">Pembatalan</a>
        <a href="{{ route('return.order.list') }}" class="link">Pengembalian</a>
        <!-- <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Keluar</a> -->
    </div>
</div>