<header class="bg-dark">
    <nav class="navbar navbar-dark d-flex align-items-center ">
        <div class="container-fluid">
          <a href="{{ route('home') }}" target="_blank" class="navbar-brand">Melofy LOGO</a>
          <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
            @csrf
            <button class="btn btn-light" type="submit">Logout</i></button>
          </form>
        </div>
      </nav>
</header>
