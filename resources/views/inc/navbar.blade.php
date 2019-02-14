<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Basic Website') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>
            <ul class="nav navbar-nav">
              <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
              <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About</a></li>
              <li class="{{Request::is('service') ? 'active' : ''}}"><a href="/service">Services</a></li>
              <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">contact</a></li>
            </ul>

        </div>
    </div>
</nav>