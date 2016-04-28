<header>
  <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons">menu</i></a></div>
  <ul id="nav-mobile" class="side-nav fixed">
    <li class="logo">
      <a id="logo-container" href="#" class="brand-logo">
        <img src="{{ URL::to('/') }}/images/user.jpg" title="myprofile" alt="myprofile">
      </a>
    </li>
    <li class="search">
      <div class="search-wrapper card">
        <input id="search" spellcheck="false" ginger_software_editor="true" class="GINGER_SOFTWARE_control" style="position: relative; font-size: 16px; white-space: pre-wrap; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAAAtCAYAAAAUVlZkAAABYklEQVR4Xu3UAQkAAAwCwdm/9HI83BLITdw5AgQIRAQWySkmAQIEzmApAQECGQGDlXmVoAQIGCwdIEAgI2CwMq8SlAABg6UDBAhkBAxW5lWCEiBgsHSAAIGMgMHKvEpQAgQMlg4QIJARMFiZVwlKgIDB0gECBDICBivzKkEJEDBYOkCAQEbAYGVeJSgBAgZLBwgQyAgYrMyrBCVAwGDpAAECGQGDlXmVoAQIGCwdIEAgI2CwMq8SlAABg6UDBAhkBAxW5lWCEiBgsHSAAIGMgMHKvEpQAgQMlg4QIJARMFiZVwlKgIDB0gECBDICBivzKkEJEDBYOkCAQEbAYGVeJSgBAgZLBwgQyAgYrMyrBCVAwGDpAAECGQGDlXmVoAQIGCwdIEAgI2CwMq8SlAABg6UDBAhkBAxW5lWCEiBgsHSAAIGMgMHKvEpQAgQMlg4QIJARMFiZVwlKgIDB0gECBDICD8vVAC7n0gpLAAAAAElFTkSuQmCC&quot;) !important; background-attachment: local !important; background-position: 15px 23px !important; background-repeat: no-repeat !important;"><i class="material-icons">search</i>
        <div class="search-results"></div>
      </div>
    </li>
    <li class="bold"><a href="/dashboard" class="waves-effect waves-teal"><i class="material-icons"></i> Home</a></li>
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Video Category <i class="material-icons">video_library</i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="/dashboard/add-category">Add Category</a></li>
              <li><a href="/dashboard/view-categories">View Category</a></li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Courseware 
          <i class="material-icons">note_add</i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="/dashboard/add-video">Add video </a></li>
              <li><a href="/dashboard/view-videos">View Videos</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
  </ul>
</header>