<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/"><span class="text-warning">My-</span>Blogs</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Home') ? 'active text-info' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'About') ? 'active text-info' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'All Posts') ? 'active text-info' : '' }}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Categories') ? 'active text-info' : '' }}" href="/categories">Categories</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      @auth
         <li class="nav-item dropdown">
           <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome back, {{ auth()->user()->username }}</a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a href="/dashboard" class="dropdown-item"><i class="bi bi-layout-text-sidebar-reverse"></i>Dashboard</a></li>
             <li><hr class="dropdown-divider"></li>
             <li>
               <form action="/logout" method="post">
                 @csrf
                 <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
               </form>
               </li>
           </ul>
         </li>
        @else
         <li class="nav-item">
          <a href="/login" class="nav-link {{ ($title === 'Login') ? 'active text-warning' : '' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
         </li>
      </ul>
      @endauth
      
    </div>
  </div>
</nav>