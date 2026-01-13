<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reset Password | LifeLink</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/ResetPassword.css') }}">
</head>

<body>

  <div class="image-wrapper">
    <img src="{{ asset('frontend/images/RESET PASSWORD.png') }}" alt="Background">
  </div>

  <div class="reset-card">
    
    <div class="logo-container">
      <img src="{{ asset('frontend/images/LOGO02.png') }}" alt="LifeLink Logo" class="box-logo">
    </div>

    <h1 class="title">Reset Password</h1>
    <p class="description">Your new password must be different from previous used passwords.</p>

      
      <div class="input-group">
        <label for="password" class="input-label">Password</label>
        <input type="password" id="password" class="password-input" placeholder="Enter new password" required>
      </div>

      <div class="input-group">
        <label for="confirm-password" class="input-label">Confirm Password</label>
        <input type="password" id="confirm-password" class="password-input" placeholder="Confirm new password" required>
      </div>

      <div class="divider"></div>

    <a href="{{ url('/success') }}" class="submit-button">
      Submit
    </a>

    </form>
  </div>

</body>
</html>