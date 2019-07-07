@guest

    <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">{{ __('Home') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/post') }}">{{ __('TuitionPost') }}</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
     
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
@else

     <li class="nav-item">
        <a class="nav-link" href="{{ url('/post') }}">{{ __('TuitionPost') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/createPost') }}">{{ __('CreatePost') }}</a>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
    </li>
    </li>

    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        
 
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" style="font-color:red" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
   
@endguest