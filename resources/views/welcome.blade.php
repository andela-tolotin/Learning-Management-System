@include('main.includes.header')
@include('main.includes.nav_bar')
@include('main.includes.top_section')
<section class="container-fluid" id="section2">
<h4 align="center">Video Categories</h4>
<div class="divider"></div>
@include('main.includes.video_category_slide')
<div class="divider"></div>
<h4 align="center">Featured Videos</h4>
@include('main.includes.learning_content')
</section>

@include('main.includes.footer')