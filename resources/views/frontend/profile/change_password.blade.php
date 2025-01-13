@extends('frontend.main_master')
@section('content')

@section('title')
    Dashboard
@endsection

@php
$id = Auth::user()->id;
$user = App\Models\User::find($id);
@endphp

<section class="content">
    <div class="dashboardAccount">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.common.user_sidebar')
            </div>
            <div class="col-md-9">
                <form method="post" action="{{ route('user.password.update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="labelForm" for="exampleInputEmail1">Kata Sandi</label>
                        <input type="password" id="current_password" name="oldpassword" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="labelForm" for="exampleInputEmail1">Kata Sandi Baru</label>
                        <input type="password" id="password" name="password" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label class="labelForm" for="exampleInputEmail1">Konfirmasi Kata Sandi</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btnRounded">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection