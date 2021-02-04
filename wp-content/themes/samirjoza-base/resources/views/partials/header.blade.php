<header role="banner">
<nav class="navbar navbar-expand-lg">
<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon fas fa-bars"></span>
  </button>
  <a class="navbar-brand" href="{{ home_url('/') }}"><img src="@asset('images/logo-color.svg')" alt="McCusker Mixed Martial Arts" /></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'depth' => 4, 'menu_class' => 'navbar-nav navbar-right ml-auto mt-2 mt-lg-0', 'walker' => new \App\wp_bootstrap4_navwalker()]) !!}
    @endif
  </div>
  </div>
</nav>
</header>