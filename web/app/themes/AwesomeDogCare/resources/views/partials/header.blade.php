<header class="banner">
  <div class="container">
    <div class="row pt-4 mt-4 pb-3">
      <div class="col-md-3">
      <a class="brand" href="{{ home_url('/') }}">
        <span class="sr-only">{{ get_bloginfo('name', 'display') }}</span>
        <img class="position-absolute" src="http://localhost/app/uploads/2020/09/logo.png" alt="Dog Care Logo" style="margin-top: -35px;width: 130px;">
      </a>
      </div>
      <div class="col-md-9">
      <nav class="nav-primary" style="float: right;">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
      </div>
</div>  
  </div>
</header>
