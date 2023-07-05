<nav class="navbar is-primary  has-text-white" >
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <i class="fas fa-hat-wizard"></i>&nbsp;{{ env('APP_NAME') }}
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="{{ route('home') }}"
                   class="navbar-item {{ Request::route()->getName() === 'home' ? "is-active" : "" }}">
                    Home
                </a>
                <a href="{{ route('posts.index') }}"
                   class="navbar-item {{ Request::route()->getName() === 'posts.index' ? "is-active" : "" }}">
                    News
                </a>
                <a href="{{ route('owls.index') }}"
                   class="navbar-item {{ Request::route()->getName() === 'owls.index' ? "is-active" : "" }}">
                    O.W.L.s
                </a>
                <a href="{{ route('users.index') }}"
                   class="navbar-item {{ Request::route()->getName() === 'users.index' ? "is-active" : "" }}">
                    Users
                </a>
                <a href="{{ route('houses.index') }}"
                   class="navbar-item {{ Request::route()->getName() === 'houses.index' ? "is-active" : "" }}">
                    Houses
                </a>
            </div>
        </div>
    </div>
</nav>


