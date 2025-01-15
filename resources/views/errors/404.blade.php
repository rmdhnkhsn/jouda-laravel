@extends('frontend.main_master')
@section('content')

@section('title')
    404
@endsection

<section class="content">
    <div class="wrapperError">
		<img src="{{asset('frontend/bundle/img/404.png')}}" class="errorImg">
		<div class="text">We are sorry, the page you've requested is not available. </div>
		<a href="{{ url('/') }}" class="btnRounded lg"><i class="fa fa-home"></i> Go To Homepage</a>
    </div>
</section>


@endsection
