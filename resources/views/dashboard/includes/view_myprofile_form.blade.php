<div class="card-panel hoverable">
  <form class="form" method="POST">
    <div class="row">
     <div class="col s8">
     <div class="input-field col s10">
        <input id="username" type="text" class="validate">
        <label for="username">Username</label>
      </div>

      <div class="input-field col s10">
        <input id="email" type="email" class="validate">
        <label for="email">Email</label>
      </div>

      <div class="input-field col s10">
        <textarea id="description" class="materialize-textarea"></textarea>
        <label for="description">Biodata</label>
      </div>

      <div class="input-field col s10">
        <button class="btn waves-effect waves-dark" type="submit" name="action">Update
         <i class="material-icons right">update</i>
       </button>
     </div>
   </div>
   <div class="col s4">
     <div class="input-field col s10">
        <img src="{{ URL::to('/') }}/images/user.jpg" title="myprofile" alt="myprofile" class="img-circle">
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
