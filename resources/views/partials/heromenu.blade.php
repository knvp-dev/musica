<section class="hero has-band-background is-medium">
  <!-- Hero header: will stick at the top -->
  <div class="hero-head">
    <header class="nav">
      <div class="container">
        <div class="nav-left">
          <a class="nav-item brand-text">
            Bandaid
          </a>
        </div>
        <span class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
        <div class="nav-right nav-menu">
          <a class="nav-item is-active">
            Home
          </a>
          <a class="nav-item">
            Examples
          </a>
          @if(! Auth::check())
          <a class="nav-item">
            Login
          </a>
          @else
          <a class="nav-item is-tab">
            <figure class="image is-16x16" style="margin-right: 8px;">
              <img src="http://bulma.io/images/jgthms.png">
            </figure>
            Profile
          </a>
          <a class="nav-item is-tab">Log out</a>
          <div class="nav-item">
            <div class="field is-grouped">
              <p class="control">
                <a class="button button-red" >
                  <span class="icon">
                    <i class="fa fa-plus is-small-icon"></i>
                  </span>
                  <span>New listing</span>
                </a>
              </p>
            </div>
            @endif
          </div>
        </div>
      </header>
    </div>

    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">What are you looking for?</h1>
        <span class="is-flex flex-horizontal-center mb-20">
          <i class="medium-icon flaticon-electric-guitar"></i>
          <i class="medium-icon flaticon-drum-set"></i>
          <i class="medium-icon flaticon-amplifier"></i>
          <i class="medium-icon flaticon-microphone"></i>
          <i class="medium-icon flaticon-electric-guitar-1"></i>
          <i class="medium-icon flaticon-keyboard"></i>
        </span>
      </div>
    </h4>
    <form action="/" method="post" class="hero-form">
      <div class="field is-grouped">
        <p class="control is-expanded">
          <input class="input is-medium is-left-half-round pl-50" type="text" placeholder="I'm looking for....">
        </p>
        <p class="control">
          <a class="button button-red is-medium is-right-half-round">
            Search
          </a>
        </p>
      </div>
    </form>
  </div>

  <!-- Hero footer: will stick at the bottom -->
  <div class="hero-foot">
    <nav class="tabs is-centered">
      <div class="container">
        <ul>
          <li class="is-active"><a>All</a></li>
          <li><a>Newest</a></li>
          <li><a>Popular</a></li>
        </ul>
      </div>
    </nav>
  </div>
</section>