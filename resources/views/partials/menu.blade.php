<nav class="nav has-shadow">
  <div class="container">
    <div class="nav-left">
      <a href="/" class="nav-item logo-text">
        Bandaid
      </a>
    </div>
    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
    <div class="nav-right nav-menu">
      <a href="{{ route('home') }}" class="nav-item is-tab">Home</a>
      @if(! Auth::guest())
      <a href="{{ route('profile', ['user' => auth()->user()->username ]) }} " class="nav-item is-tab">
        Profile
      </a>
      <a class="nav-item is-tab">Log out</a>
      @else
      <a href="{{ route('login') }}" class="nav-item is-tab">Log in</a>
      @endif
    </div>
  </div>
</nav>