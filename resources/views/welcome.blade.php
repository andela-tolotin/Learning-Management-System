<!doctype html>
<html lang="en">
  <head>
    @include('dashboard.includes.links_and_metadata')
    <!-- Uses a transparent header that draws on top of the layout's background -->
  </head>
  <body>
  <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
   @include('main.includes.nav_bar')
  <main class="mdl-layout__content">
    <div class="page-content">
       <div class="mdl-grid layout-transparent">
         <div class="background">
           <div class="bg-img"></div>
           <div class="overlay"></div>
         </div>
      <div class="mdl-cell mdl-cell--12-col content">
          <div class="float_header">
             <h1>Learning made easy</h1>
             <h6>We have simplified our courseware so that you can learn fast and become more proficient</h6>
             <div class="signup">
                <a href="/login" title="Let's start from here">
                  <div class="signup_btn">LET'S START FROM HERE</div>
                </a>
             </div>
          </div>
      </div>
    </div>
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--3-col">4</div>
      <div class="mdl-cell mdl-cell--3-col">4</div>
      <div class="mdl-cell mdl-cell--3-col">4</div>
      <div class="mdl-cell mdl-cell--3-col">4</div>
    </div>
  </main>
</div>
<script src="{{ URL::asset('js/material.min.js') }}"></script>
</body>
</html>

