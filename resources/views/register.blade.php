<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | LifeLink</title>
  
  <link rel="stylesheet" href="{{ asset('frontend/css/Register.css') }}">
</head>

<body>
    <body>
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

  <img class="bg-image" src="{{ asset('frontend/images/REGISTER.png') }}" alt="Background">

  <img class="bg-image" src="{{ asset('frontend/images/REGISTER.png') }}" alt="Background">

  <img class="bg-image" src="{{ asset('frontend/images/REGISTER.png') }}" alt="Background">

  <div class="register-card">
    
    <div class="logo-container">
      <img src="{{ asset('frontend/images/LOGO02.png') }}" alt="LifeLink Logo" class="box-logo">
    </div>

    <div class="header-text">
      <h1>Sign up</h1>
      <p>Please enter your details to create an account</p>
    </div>

    <form action="{{ url('/register') }}" method="POST">
      @csrf <div class="form-group">
        <label class="form-label">Full Name</label>
        <input type="text" name="name" class="form-input" required>
      </div>

      <div class="form-group">
        <label class="form-label">Email Address</label>
        <input type="email" name="email" class="form-input" required>
      </div>

      <div class="form-group">
        <label class="form-label">Password</label>
        <div class="password-wrapper">
          <input type="password" name="password" class="form-input" id="password" required>
          <button type="button" class="toggle-password" onclick="togglePass('password')">👁</button>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Confirm Password</label>
        <div class="password-wrapper">
          <input type="password" name="password_confirmation" class="form-input" id="confirm_password" required>
          <button type="button" class="toggle-password" onclick="togglePass('confirm_password')">👁</button>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Registration Type</label>
        <select name="role" class="form-select" required>
          <option value="" disabled selected>Select Type</option>
          <option value="donor">Donor</option>
          <option value="recipient">Recipient</option>
        </select>
      </div>

      <button type="button" class="btn-submit" onclick="window.location.href='{{ url('/success') }}'">
        Register
      </button>

      <div class="login-link">
        <a href="{{ url('/login') }}">Have an account? Login</a>
      </div>

    </form>
  </div>

  <script>
    // Simple script to toggle password visibility
    function togglePass(id) {
      const input = document.getElementById(id);
      if (input.type === "password") {
        input.type = "text";
      } else {
        input.type = "password";
      }
    }
  </script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // 1. Find all links on the page
    const links = document.querySelectorAll('a');
    
    links.forEach(link => {
      link.addEventListener('click', function(e) {
        // Only animate if it's an internal link (not #hash or external)
        if (link.hostname === window.location.hostname && !link.hash) {
          e.preventDefault(); // Stop immediate load
          
          // Add fade-out class to body
          document.body.classList.add('page-transition-exit');
          
          // Wait 400ms for animation, then go to link
          setTimeout(function() {
            window.location.href = link.href;
          }, 400);
        }
      });
    });
  });
</script>

<style>
  /* The normal state */
  body {
    transition: opacity 0.4s ease-in-out;
    opacity: 1;
  }
  
  /* The fade-out state (added by JS) */
  .page-transition-exit {
    opacity: 0;
  }
</style>
</body>
</html>