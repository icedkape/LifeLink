<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Selection | LifeLink</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/Login.css') }}">
</head>

<body>

  <header class="topbar">
    <div class="topbar__inner">
      <a href="{{ url('/') }}">
        <img class="brand__logo" src="{{ asset('frontend/images/LOGO.png') }}" alt="LifeLink">
      </a>
      <nav class="nav">
        <a class="nav__link" href="{{ url('/') }}">Home</a>
        <a class="nav__link" href="{{ url('/mission') }}">Mission</a>
        <a class="nav__link" href="{{ url('/#lifelinkers') }}">About Us</a>
        <a class="nav__link" href="{{ url('/register') }}">Register</a>
      </nav>
    </div>
  </header>

  <img class="bg-image" src="{{ asset('frontend/images/LOGIN.png') }}" alt="Login Background">

  <div class="register-card selection-card">
    
    <div class="logo-container">
      <img src="{{ asset('frontend/images/LOGO02.png') }}" alt="LifeLink Logo" class="box-logo">
    </div>

    <div class="header-text">
      <h1>Welcome Back!</h1>
      <p>Please select your login type to continue.</p>
    </div>

    <div class="btn-row">
        <a href="{{ url('/donor-login') }}" class="btn-submit btn-donor link-btn">
            Donor Login
        </a>
        
        <a href="{{ url('/recipient-login') }}" class="btn-submit btn-recipient link-btn">
            Recipient Login
        </a>
    </div>

    <div class="login-link" style="margin-top: 20px;">
        <a href="{{ url('/admin/login') }}" class="admin-link-text">Admin Login? Click Here</a>
    </div>

  </div>
  
  <style>
      /* Page Transition */
      body { transition: opacity 0.4s ease-in-out; opacity: 1; }
      .page-transition-exit { opacity: 0; }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const links = document.querySelectorAll('a');
      links.forEach(link => {
        link.addEventListener('click', function(e) {
          if (link.hostname === window.location.hostname && !link.hash) {
            e.preventDefault();
            document.body.classList.add('page-transition-exit');
            setTimeout(function() { window.location.href = link.href; }, 400);
          }
        });
      });
    });
  </script>

</body>
</html>