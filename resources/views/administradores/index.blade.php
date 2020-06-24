@extends('layouts.app')

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 200px; background-image: url({{asset('img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-green opacity-8"></span>
        <!-- Header container -->

    </div>

    <administradores :admins="{{ $administradores->toJson() }}"></administradores>
@endsection
