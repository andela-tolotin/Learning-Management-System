<div class="card-panel hoverable">
  <form class="col s12" method="POST">
   <div class="row">
    <div class="input-field col s8 offset-m3">
      <select>
      <option value="" selected>Video Category</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>
      <label>Video Category</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s8 offset-m3">
      <input id="title" type="text" class="validate">
      <label for="name">Title</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s8 offset-m3">
      <textarea id="description" class="materialize-textarea"></textarea>
      <label for="description">Description</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s8 offset-m3">
      <button class="btn waves-effect waves-dark" type="submit" name="action">Create
       <i class="material-icons right">send</i>
     </button>
   </div>
 </div>
</form>
</div>