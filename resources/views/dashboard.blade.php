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
            <div class="col-md-4">
                @include('frontend.common.user_sidebar')
            </div>
            <div class="col-md-8">
                <div class="justify-center" style="min-height: 50vh">
                    <div class="text text-center">Selamat Datang <span>{{ Auth::user()->name }}</span> Di Toko Kami </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection