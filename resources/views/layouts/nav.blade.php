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
            @if (Route::current()->getName() == 'contact.show')
            <li class="nav-item">
                <a class="nav-link @if (Route::current()->getName() == 'contact.show') active @endif">
                    Details contact
                </a>
            </li>
            @endif
            @if (Route::current()->getName() == 'contact.edit')
            <li class="nav-item">
                <a class="nav-link @if (Route::current()->getName() == 'contact.edit') active @endif">
                    Edit contact
                </a>
            </li>
            @endif

        </ul>

    </div>
</nav>
