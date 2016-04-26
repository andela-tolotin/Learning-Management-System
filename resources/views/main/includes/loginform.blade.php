
<div class="row">
<form class="col-lg-6 col-lg-offset-3 bg-white login_form" method="POST" action="{{ url('/login') }}">
   <h2 class="text-center">LOG IN</h2>
    {!! csrf_field() !!}
    <div class="form-group">
        <input type="text" class="form-control input-lg" placeholder="Username" name="name" value="">
        </div>
        <div class="form-group">
            <input type="password" class="form-control input-lg" placeholder="Password" name="password"value="">
        </div>
        <div class="form-group">
            <button class="btn btn-danger btn-lg btn-block">Log In</button>
        </div>
        <div class="form-group">
            <a href="{{ url('/auth/facebook') }}" class="btn btn-md btn-primary btn-block btn-social btn-facebook">
         <i class="fa fa-facebook"></i> Facebook
      </a>
      <a href="{{ url('/auth/twitter') }}" class="btn btn-md btn-primary btn-block btn-social btn-twitter">
          <i class="fa fa-twitter"></i> Twitter
       </a>
       <a href="{{ url('/auth/github') }}" class="btn btn-md btn-default btn-block btn-social btn-github">
          <i class="fa fa-github"></i> Github
       </a>
        </div>
</form>
</div>