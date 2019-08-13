
@extends('front_end.layout.master')
@section('home', 'active')

@section('content')


@extends('front_end.layout.navbar')


@if(!Auth::user()->hasRole('member')) 

    <!-- Halaman Admin -->

    @include('front_end.admin.index')

@else 

    <!-- Halaman Member -->

    @include('front_end.member.index')
    
@endsection

@endif

