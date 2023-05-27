<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if (Route::current()->getName() == '/') active @endif" aria-current="page"
                    href="{{ url('/') }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (Route::current()->getName() == 'contact.create') active @endif" href="{{ route('contact.create') }}">
                    New contact
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (Route::current()->getName() == 'contact.index') active @endif" href="{{ route('contact.index') }}">
                    List contacts
                </a>
            </li>
        </ul>

    </div>
</nav>
