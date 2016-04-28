<div class="row">
 <div class="input-field col s8 offset-m3">
   @if (count($errors) > 0)
   <!-- Form Error List -->
   <div class="card-panel deep-orange accent-4 danger">
    <strong>Whoops! Something went wrong!</strong>
    <br>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @elseif (session('status') == 'Sucessfully created!') 
  <div class="card-panel teal darken-4 success">
    <strong> {{ session('status') }}</strong>
  </div>
  @elseif (session('status') == 'Category already exists!')
  <div class="card-panel deep-orange accent-4 danger">
    <strong> {{ session('status') }}</strong>
  </div>
  @endif
</div>
</div>