<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forgot Password | LifeLink</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/ForgotPassword.css') }}">
</head>

<body>

  <div class="image-wrapper">
    <img src="{{ asset('frontend/images/FORGOT PASSWORD.png') }}" alt="Background">
  </div>

  <div class="forgot-card">
    
    <div class="logo-container">
      <img src="{{ asset('frontend/images/LOGO02.png') }}" alt="LifeLink Logo" class="box-logo">
    </div>

    <h1 class="title">Forgot Password</h1>
    <p class="description">No worries, we’ll send you reset instructions.</p>

    <form action="{{ route('email.sent') }}" method="GET" class="forgot-form">
      
      <div class="input-group">
        <label for="email" class="input-label">Email Address</label>
        <input type="email" id="email" class="email-input" placeholder="Enter your email" required>
      </div>

      <div class="divider"></div>

      <button type="submit" class="submit-button">
        Submit
      </button>

      <div class="login-link">
        <a href="{{ route('login') }}">← Back to Login</a>
      </div>

    </form>
  </div>

</body>
</html>