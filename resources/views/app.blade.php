@include('main.includes.header')
<style type="text/css">
body,html {
  background-image: none !important;
  background: #ccc;
}

</style>
@include('main.includes.nav_bar')
<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>
@include('main.includes.footer')

