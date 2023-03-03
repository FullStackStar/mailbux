@extends('super-admin.office')
@section('content')


    @switch($tab)

        @case('payment_gateways')
            @include('super-admin.settings.payment-gateways')
            @break

        @case('general')
            @include('super-admin.settings.general')
            @break

        @case('users')
            @include('super-admin.settings.users')
            @break

        @case('user')
            @include('super-admin.settings.user')
            @break

        @case('about')
            @include('super-admin.settings.about')
            @break

    @endswitch


@endsection

@section('scripts')
    <script>
        (function(){
            "use strict";
            window.addEventListener('DOMContentLoaded', () => {

            });
        })();
    </script>
@endsection
