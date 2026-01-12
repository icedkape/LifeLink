<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login | LifeLink</title>
  
  <link rel="stylesheet" href="{{ asset('frontend/css/Login.css') }}">
  
  <style>
    /* Button: Green instead of Red */
    .btn-submit {
      background-color: #529E57 !important;
    }
    .btn-submit:hover {
      background-color: #3e7a41 !important; /* Darker green on hover */
    }
    
    /* Input Focus: Green Glow */
    .form-input:focus {
      border-color: #529E57 !important;
      box-shadow: 0 0 0 3px rgba(82, 158, 87, 0.1) !important;
    }

    /* Links: Green Text */
    .login-link a {
      color: #529E57 !important;
    }
    
    /* Back Button (Top Left): Green */
    .back-button {
      background-color: #529E57 !important;
    }
    .back-button:hover {
      background-color: #3e7a41 !important;
    }
  </style>
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
        <a class="nav__link" href="{{ url('/login') }}">Login</a>
      </nav>
    </div>
  </header>

  <img class="bg-image" src="{{ asset('frontend/images/LOGIN-ADMIN.png') }}" alt="Background">

  <div class="register-card" style="height: auto; min-height: 55vh;">
    
    <div class="logo-container">
      <img src="{{ asset('frontend/images/LOGO02.png') }}" alt="LifeLink Logo" class="box-logo">
    </div>

    <div class="header-text">
      <h1>Admin Login</h1>
      <p>Please enter your credentials to access the dashboard</p>
    </div>

    <form action="{{ route('admin.login.post') }}" method="POST">
      @csrf 

      <div class="form-group">
        <label class="form-label">Email Address</label>
        <input type="email" name="email" class="form-input" required autofocus>
      </div>

      <div class="form-group">
        <label class="form-label">Password</label>
        <div class="password-wrapper">
          <input type="password" name="password" class="form-input" id="password" required>
          <button type="button" class="toggle-password" onclick="togglePass('password')">👁</button>
        </div>
      </div>

      <button type="submit" class="btn-submit" style="margin-top: 15px;">
        Login
      </button>

      <div class="login-link">
        <a href="{{ url('/login') }}" style="color: #6c7688 !important; font-size: 14px;">← Back to User Login</a>
      </div>

    </form>
  </div>

  <script>
    function togglePass(id) {
      const input = document.getElementById(id);
      input.type = input.type === "password" ? "text" : "password";
    }

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

  <style>
    body { transition: opacity 0.4s ease-in-out; opacity: 1; }
    .page-transition-exit { opacity: 0; }
  </style>

</body>
</html>