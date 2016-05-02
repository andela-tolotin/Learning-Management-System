<div class="card-panel hoverable">
 <form class="form" method="POST" action="/dashboard/profile/update">
    {{ csrf_field() }}
  <div class="row">
   <div class="col s8">
     <div class="input-field col s10">
     @include('dashboard.includes.error_or_success_message')
      <input id="username" type="text" class="validate" value="{{ Auth::user()->username }}" name="username">
      <label for="username">Username</label>
    </div>

    <div class="input-field col s10">
      <input id="email" type="email" class="validate" value="{{ Auth::user()->email }}" name="email">
      <label for="email">Email</label>
    </div>

    <div class="input-field col s10">
      <textarea id="description" class="materialize-textarea" name="profile_bio">{{ Auth::user()->profile_bio }}</textarea>
      <label for="description">Background Information</label>
    </div>

    <div class="input-field col s10">
      <button class="btn waves-effect waves-dark" type="submit" name="action">Update
       <i class="material-icons right">update</i>
     </button>
   </div>
 </div>
 <div class="col s4">
   <div class="input-field col s10">
    <img src="{{ Auth::user()->picture_url }}" title="myprofile" alt="myprofile" class="img-circle">
  </div>
  <div class="input-field col s10">
    <button class="btn waves-effect waves-light" type="submit" name="action">Upload
     <i class="material-icons right">offline_pin</i>
   </button>
 </div>
</div>
</div>
</form>
</div>
