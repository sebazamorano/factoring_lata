@extends('layouts.app')



@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 200px; background-image: url({{asset('img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-purple opacity-8"></span>
        <!-- Header container -->

    </div>
    <administradores-create :regiones="{{ $regiones }}"></administradores-create>
@endsection


@section('script')
    <script>
        (function () {
           $("#region").on('change', function (e) {
               let region_id = $("#region").val();
               if (region_id !== '') {
                   axios.get('/api/regiones/' + region_id + '/comunas')
                       .then(function (response) {
                           $("#comuna").find('option').remove();
                            for(comuna of response.data){
                                $("#comuna").append('<option value="'+comuna.id+'">'+comuna.comuna+'</option>');
                            }
                        });
               }
           })
        })();

    </script>
@endsection
