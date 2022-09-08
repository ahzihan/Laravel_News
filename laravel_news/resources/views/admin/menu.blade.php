<div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/news') }}">News List</a></li>
            <li><a href="{{ url('/news/create') }}">Add News</a></li>
            <li><a href="users.html">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, {{ Auth::user()->name }}</a></li>
            <li>
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
              </form>
            </li>
          </ul>
        </div>