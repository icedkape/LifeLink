<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Submitted | LifeLink</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/D-After-Submitting.css') }}">
</head>
<body>

    <div class="main-layout">
        
        <div class="left-section">
            <img class="logo" alt="LifeLink Logo" src="{{ asset('frontend/images/LOGO-LIFELINK.png') }}" />
        </div>

        <div class="right-section">
            <b class="thank-you-header">Thank You for Choosing to Give Life</b>
            
            <div class="message-container">
                <p>
                    Together, we are building a future where hope is not a waiting game, and where generosity is met with swift, secure, and dignified action.
                </p>
                <p>
                    Every registration brings us closer to a system where second chances are not delayed by distance, paperwork, or uncertainty — but are delivered with precision, care, and respect. You are now part of that change.
                </p>
                <p>
                    Because of donors like you, someone’s tomorrow is no longer a question of <b>if, but when.</b>
                </p>
                <p class="highlight-text">
                    Our team will carefully review your registration, and we will email you if you are qualified for the next steps.
                </p>
            </div>

            <a href="{{ route('donor.dashboard') }}" class="back-button">
                Back to Dashboard
            </a>
        </div>
    </div>

</body>
</html>