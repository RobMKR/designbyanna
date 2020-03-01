<header class="header header_style_01">
    <nav class="megamenu navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img style="height: 100%;" src="{{asset('images/logos/logo.png')}}" alt="image"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                    <li><a class="{{ Request::is('about') ? 'active' : '' }}" href="/about">About us </a></li>
                    <li><a class="{{ Request::is('service') ? 'active' : '' }}" href="/service">Service</a></li>
                    <li><a class="{{ Request::is('gallery') ? 'active' : '' }}" href="/gallery">Gallery</a></li>
                    <li><a class="{{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>