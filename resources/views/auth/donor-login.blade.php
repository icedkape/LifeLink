<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donor Login | LifeLink</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/Login.css') }}">
</head>

<body>
  <header class="topbar">
    <div class="topbar__inner">
      <a href="{{ url('/') }}"><img class="brand__logo" src="{{ asset('frontend/images/LOGO.png') }}" alt="LifeLink"></a>
      <nav class="nav">
        <a class="nav__link" href="{{ url('/') }}">Home</a>
        <a class="nav__link" href="{{ url('/mission') }}">Mission</a>
        <a class="nav__link" href="{{ url('/#lifelinkers') }}">About Us</a>
        <a class="nav__link" href="{{ url('/faq') }}">FAQ</a>
      </nav>
    </div>
  </header>

  <img class="bg-image" src="{{ asset('frontend/images/LOGIN.png') }}" alt="Background">

  <div class="register-card">
    <div class="logo-container">
      <img src="{{ asset('frontend/images/LOGO02.png') }}" alt="Logo" class="box-logo">
    </div>

    <div class="header-text">
      <h1 style="color: #940404;">Donor Login</h1>
      <p>Enter your credentials to manage your donations.</p>
    </div>

    <form action="{{ route('login.donor.post') }}" method="POST">
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

      <div class="forgot-password-link">
        <a href="{{ url('/forgot-password') }}">Forgot Password?</a>
      </div>

      <button type="submit" class="btn-submit btn-donor" style="margin-top: 20px;">
        Login to Donor Dashboard
      </button>

      <div class="register-link">
        <a href="{{ url('/register') }}">No account yet? Register here</a>
      </div>

      <div class="login-link">
        <a href="{{ url('/login') }}">← Back to Selection</a>
      </div>
    </form>
  </div>

  <script>
    function togglePass(id) {
      const input = document.getElementById(id);
      input.type = input.type === "password" ? "text" : "password";
    }
  </script>
</body>
</html>