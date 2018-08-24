<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="row">
        <div class="col-md-4 center">
            @auth
                <div class="user-name">
                    <span class="bold">LOGGED IN:</span>
                    <span>{{ Auth::user()->name }}</span>
                </div>
            @endauth    
        </div>

        <div class="col-md-4 center">
            <div class="logo-container">
                <!-- <img src="{{ asset('images/LogoBlue.png') }}"> -->
                <h3 style="color: #fff; margin: 0;">LOGO IMAGE</h3>
            </div>
        </div>

        <div class="col-md-4">
            <div id="mobile-menu" style="margin-right: 0px;">
                <div class="cusbutton">
                    <div class="top bar"></div>
                    <div class="middle bar"></div>
                    <div class="bottom bar"></div>
                    <div class="menutextbottom">MENU</div>
                </div>
            </div>
        </div>
    </div>
</nav>

<nav id="spmenu" class="panel starter-position" role="navigation">
    <a id="spmenu-link" href="/">
        <img id="spmenu-logo" src="https://home.lst.ac.uk/sites/default/lst.png">
    </a>

    <div class="block block-menu-block">
        <div class="content">
            <div class="menu-block-wrapper">
                <ul class="menu clearfix">
                    <li class="first leaf">
                        <a href="/class-notes">Class Notes</a>
                    </li>

                    <li class="leaf">
                        <a href="/photo-gallery" title="">Photo Gallery</a>
                    </li>
                    
                    <li class="collapsed">
                        <a href="/">Jobs</a>
                    </li>

                    <li class="last leaf">
                        <a href="/" title="">Edit my Account</a>
                    </li>
                </ul>
            </div>

            <div class="logout-container">
                <a href="{{ route('logout') }}" class="enter-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    LOGOUT
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</nav>

<div id="close-btn-holder" class="" style="">
    <div id="show-push" class="cusbutton" style="margin-right: 0px;">
        <div class="top bar topa"></div>

        <div class="middle bar middlea"></div>

        <div class="bottom bar bottoma"></div>

        <div class="menutextbottom">CLOSE</div>
    </div>
</div>