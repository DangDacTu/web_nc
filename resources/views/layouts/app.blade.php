<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title', 'Flower Shop')</title>
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
              <a class="navbar-brand" href="{{ route('home') }}">Flower Shop</a>
              <div class="navbar-nav">
                  @auth
                      <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                      <form action="{{ route('logout') }}" method="POST" class="d-inline">
                          @csrf
                          <button type="submit" class="nav-link btn btn-link">Logout</button>
                      </form>
                  @else
                      <a class="nav-link" href="{{ route('login') }}">Login</a>
                  @endauth
              </div>
          </div>
      </nav>

      <div class="container mt-4">
          @if (session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
          @endif
          @if (session('error'))
              <div class="alert alert-danger">{{ session('error') }}</div>
          @endif
          @yield('content')
      </div>

      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>