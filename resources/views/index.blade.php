<!doctype html>
<html lang="en">
  <head>
    @include('dashboard.includes.links_and_metadata')
  </head>
  <body>
  <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
  @include('dashboard.includes.top_nav')
  @include('dashboard.includes.side_nav')
  </div>
  <main class="mdl-layout__content mdl-color--grey-100">
      <div class="mdl-grid demo-content">
          <div class="demo-cards mdl-cell mdl-cell--8-col mdl-cell--4-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Updates</h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                Non dolore elit adipisicing ea reprehenderit consectetur culpa.
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Read More</a>
              </div>
            </div>
            <div class="demo-separator mdl-cell--1-col"></div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <script src="{{ URL::asset('js/material.min.js') }}"></script>
  </body>
</html>
