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
                <form method="post" action="{{ route('user.profile.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row px-3 py-4 ">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="labelForm">Nama</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label class="labelForm">Email</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label class="labelForm">Nomor Telepon</label>
                                <input type="text" id="phone" name="phone" class="form-control"
                                    value="{{ $user->phone }}">
                            </div>
                            <div class="form-group">
                                <label class="labelForm">Kode Pos</label>
                                <input type="text" id="post_code" name="post_code" class="form-control"
                                    value="{{ $user->post_code }}" placeholder="40973">
                            </div>
                            <div class="form-group">
                                <label class="labelForm">Alamat <span> </span></label>
                                <textarea name="address" id="alamat" class="form-control"
                                    placeholder="Jl. Babakantiga No.82 Ciwidey" cols="10"
                                    rows="5">{!! $user->address !!}</textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <img id="showImage" class="img-fluid my-3 mx-auto d-block"
                                    src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}"
                                    style="width: 100%">
                                </div>
                            <div class="form-group" style="margin-top: 10px">
                                <input type="file" id="profileImage" name="profile_photo_path" class="form-control bordered" style="margin-top: 15px;">
                            </div>
                            <div class="form-group" style="margin-top: 10px">
                                <button type="submit" class="btnRounded">Edit Profil</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection