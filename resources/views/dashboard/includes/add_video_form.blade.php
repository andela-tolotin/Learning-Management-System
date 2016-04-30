<div class="card-panel hoverable">
 @include('dashboard.includes.error_or_success_message')
  <form class="col s12" method="POST" action="/dashboard/video/create">
   <div class="row">
    <div class="input-field col s8 offset-m3">
      <select>
      <option value="" selected name="category" id="category">Video Category</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>
      <label>Video Category</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s8 offset-m3">
      <input id="title" type="text" class="validate" name="title" value="{{ old('title')}}">
      <label for="name">Title</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s8 offset-m3">
      <input id="url" type="text" class="validate" name ="url" value="{{ old('title')}}">
      <label for="url">Url</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s8 offset-m3">
      <textarea id="description" class="materialize-textarea" name="description">{{ old('description')}}</textarea>
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