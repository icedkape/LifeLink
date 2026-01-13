<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Email Verification | LifeLink</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/EmailVerification.css') }}">
</head>

<body>
  <div class="image-wrapper">
    <img src="{{ asset('frontend/images/EMAIL VERIFICATION.png') }}" alt="Background">
  </div>

  <div class="verify-card">
    
    <div class="logo-container">
      <img src="{{ asset('frontend/images/LOGO02.png') }}" alt="LifeLink Logo" class="box-logo">
    </div>

    <h1 class="title">Email OTP Verification</h1>
    <p class="description">We sent a code to your registered email</p>

      
      <div class="input-group">
        <input type="text" class="otp-input" maxlength="4" inputmode="numeric" pattern="[0-9]*" autocomplete="one-time-code" placeholder="----" required>
      </div>

    <a href="{{ url('/reset-password') }}" class="submit-button">
      Submit
    </a>

      <div class="resend-container">
        <span class="no-code-text">Didn't receive code?</span>
        <button type="button" class="resend-btn">Resend Code</button>
      </div>

    </form>
  </div>

</body>
</html>