@include('dashboard.includes.links_and_metadata')
<div class="container">
    <div class="content">
    @include('dashboard.includes.nav_bar')
        @yield('content')
    </div>
</div>
