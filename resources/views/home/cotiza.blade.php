@extends('layouts.app')

@section('css')
    <style>
        .pForm{
            font-size: 15px;
        }
        .buttonForm{
            margin-bottom: 2%;
        }
        .btnDelete{
            margin-right: 0;
            transform: translateX(0) translateY(-100%);
        }
        .btnDelete:hover{
            transform: translateY(-32px);
        }
    </style>
@endsection

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 200px; background-image: url({{ asset('img/theme/profile-cover.jpg') }}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-purple opacity-8"></span>
        <!-- Header container -->
    </div>
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Cotiza Instantáneamente en línea tus facturas</h3>
                            </div>
                        </div>
                    </div>
                    <cotiza-component></cotiza-component>
                </div>
            </div>
        </div>
    </div>
@endsection
