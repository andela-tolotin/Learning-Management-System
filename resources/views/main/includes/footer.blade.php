<footer id="footer">
    <div class="container">
        <p class="text-left">©2016 Made with <i class="fa fa-heart-o fa-lg"></i> by <a href="https://github.com/andela-tolotin/" target="_blank"> Temitope Olotin </a></p>
    </div>
</footer>

<div class="scroll-up">
    <a href="#"><i class="fa fa-angle-up"></i></a>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="text-center"><img src="//placehold.it/110" class="img-circle"><br>Login</h2>
            </div>
            <div class="modal-body row">
                <h6 class="text-center">COMPLETE THESE FIELDS TO SIGN UP</h6>
                <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger btn-lg btn-block">Sign In</button>
                        <span class="pull-right"><a href="signup">Register</a></span><span><a href="#">Need help?</a></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <h6 class="text-center"><a href="">Privacy is important to us. Click here to read why.</a></h6>
            </div>
        </div>
    </div>
</div>
    <!--scripts loaded here-->
    <script src="{{ URL::asset('js/jquery-2.1.1.min.js') }}"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('js/scripts.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.als-1.7.min.js') }} "></script>
    <script src="{{ URL::asset('js/video_category.js') }}"></script>
    <script src="{{ URL::asset('js/materialize.min.js') }}"></script>
  </body>
</html>
