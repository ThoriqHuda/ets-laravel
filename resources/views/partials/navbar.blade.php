<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">My Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "home")? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Riwayat")? 'active' : '' }}" href="/riwayat">Riwayat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Form")? 'active' : '' }}" href="/form">Form</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </a>
             <ul class="dropdown-menu" aria-labelledby="navbarDropdown"> 
               <li><a href="#" class="dropdown-item">Dashboard</a></li>
               <li>
                 <form action="/logout" method="post">
                  @csrf
                <button type="submit" class="dropdown-item" >Logout</button>
              </form>
                 
               

             </ul>
            </li>

            @else 
            <a href="/login" class="nav-link {{ ($title === "login")? 'active' : '' }}">Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>