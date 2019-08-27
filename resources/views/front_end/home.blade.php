@if(Auth::user()->hasRole('member')) 

    <!-- Halaman member -->
    @include('front_end.layout.navbar')
    @include('front_end.member.index')

@else 

    <!-- Halaman admin -->
    @include('front_end.admin.index')

@endif

