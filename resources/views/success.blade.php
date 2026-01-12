<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Success | LifeLink</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/Success.css') }}">
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

    <img class="bg-image" src="{{ asset('frontend/images/SUCCESS.png') }}" alt="Success Background">
  <div class="success-card">
    
    <img src="{{ asset('frontend/images/LOGO02.png') }}" alt="LifeLink Logo" class="box-logo">

    <img src="{{ asset('frontend/images/Checkbox.png') }}" alt="Success" class="icon-check">

    <h1 class="success-title">Success!</h1>
    <p class="success-desc">Your new information has been successfully saved.</p>

    <a href="{{ url('/login') }}" class="btn-login">Back to Login</a>

  </div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    
    // 1. TRIGGER THE FADE IN ON LOAD
    // Add a slight delay to ensure the CSS transition catches it
    setTimeout(function() {
      document.body.classList.add('page-transition-enter');
    }, 10);

    // 2. EXISTING LINK HANDLING
    const links = document.querySelectorAll('a');
    links.forEach(link => {
      link.addEventListener('click', function(e) {
        if (link.hostname === window.location.hostname && !link.hash) {
          e.preventDefault();
          // Remove the enter class so they don't conflict
          document.body.classList.remove('page-transition-enter');
          document.body.classList.add('page-transition-exit');
          setTimeout(function() { window.location.href = link.href; }, 400);
        }
      });
    });
  });
</script>

</body>
</html>