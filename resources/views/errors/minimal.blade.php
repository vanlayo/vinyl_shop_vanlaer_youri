@extends('layouts.template')

@section('main')
    <h3 class="text-center my-5">@yield('code') | <span class="text-black-50">@yield('title')</span></h3>
    <p>@yield('message')</p>

    <p class="text-center my-5">
        <a href="/" class="btn btn-outline-secondary btn-sm mr-2">
            <i class="fas fa-home mr-1"></i>home
        </a>
        <a href="#!" class="btn btn-outline-secondary btn-sm ml-2" id="back">
            <i class="fas fa-undo mr-1"></i>back
        </a>
    </p>

@endsection

@section('script_after')
    <script>
        // Go back to the previous page
        $('#back').click(function () {
            window.history.back();
        });
        $('nav .ml-auto').hide();
    </script>
@endsection