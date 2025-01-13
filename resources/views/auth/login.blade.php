@extends('frontend.main_master')

@section('content')

@section('title')
    LOGIN
@endsection
<section class="content">
    <div class="containerLogin" style="display: none" id="loginView">
        <div class="headTitle">LOGIN AKUN</div>
        <div class="wrapperCard">
            <div class="card">
                <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                    @csrf
                    <div class="wrapperGroup">
                        <div class="title">Log In</div>
                        <div class="form-group">
                            <label class="labelForm">E-mail :</label>
                            <input type="email" id="email" name="email" class="form-control bordered" placeholder="*Masukkan email anda...">
                        </div>
                        <div class="form-group">
                            <label class="labelForm">Password :</label>
                            <input type="password" id="password" name="password" class="form-control bordered" placeholder="*Masukkan password anda...">
                        </div>
                    </div>
                    <button type="submit" class="btnRounded">LOGIN</button>
                </form>
            </div>
            <div class="card">
                <div class="wrapperGroup">
                    <div class="title">Belum Memiliki Akun?</div>
                    <label class="labelForm">Daftarkan Akun Anda Sekarang Juga</label>
                    <div class="desc">Dengan membuat akun, Anda akan dapat berbelanja lebih cepat, mengetahui status pesanan terkini, dan melacak pesanan yang telah Anda buat sebelumnya.</div>
                </div>
                <a href="{{ route('login') }}?type=register" class="btnRounded">DAFTAR</a>
            </div>
        </div>
    </div>
    <div class="containerLogin" style="display: none" id="registerView">
        <div class="headTitle">DAFTAR AKUN</div>
        <div class="wrapperCard register">
            <div class="card">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="wrapperGroup">
                        <div class="title">Data Diri Anda</div>
                        <div class="form-group">
                            <label class="labelForm">Nama :</label>
                            <input type="text" id="name" name="name"class="form-control bordered" placeholder="*Masukkan nama anda...">
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="labelForm">E-mail :</label>
                            <input type="text" id="email" name="email" class="form-control bordered" placeholder="*Masukkan email anda...">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="labelForm">Nomor Telpon :</label>
                            <input type="text" id="phone" name="phone" class="form-control bordered" placeholder="*Masukkan no telp anda...">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="labelForm">Password :</label>
                            <input type="password" id="password" name="password" class="form-control bordered" placeholder="*Masukkan password anda...">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="labelForm">Konfirmasi Password :</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control bordered" placeholder="*Masukkan konfirmasi password anda...">
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btnRounded">DAFTAR</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection