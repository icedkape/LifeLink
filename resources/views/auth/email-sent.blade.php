<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Email Sent | LifeLink</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/EmailSent.css') }}">
</head>

<body>

  <div class="image-wrapper">
    <img src="{{ asset('frontend/images/EMAIL SENT.png') }}" alt="Background">
  </div>

  <div class="sent-card">
    
    <div class="logo-container">
      <img src="{{ asset('frontend/images/LOGO02.png') }}" alt="LifeLink Logo" class="box-logo">
    </div>

    <div class="icon-container">
      <img src="{{ asset('frontend/images/Checkbox.png') }}" alt="Success" class="checkbox-icon">
    </div>

    <h1 class="success-message">Email Sent</h1>
    <p class="success-description">Check your email & change your password</p>

    <a href="{{ url('/email-verification') }}" class="action-button">
      Enter OTP Verification
    </a>

  </div>

</body>
</html>