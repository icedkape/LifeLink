<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recipient Registration Submitted | LifeLink</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/R-After-Submitting.css') }}">
</head>
<body>

    <div class="main-layout">
        
        <div class="left-section">
            <img class="logo" alt="LifeLink Logo" src="{{ asset('frontend/images/LOGO-LIFELINK.png') }}" />
        </div>

        <div class="right-section">
            <b class="thank-you-header">Thank You for Choosing LifeLink</b>
            
            <div class="message-container">
                <p>
                    Together, we are building a future where waiting for a transplant is guided by hope, clarity, and compassionate science—not by uncertainty. Your registration connects you to a system designed for dignity, precision, and timely care.
                </p>
                <p>
                    Every recipient added to LifeLink strengthens a national network built on fairness, transparency, and medical excellence.
                </p>
                <p>
                    Because of a system like this, your tomorrow is supported by more than hope—it's backed by action.
                </p>
                <p class="highlight-text">
                    Our team will carefully review your registration, and we will email you if you are qualified for the next steps.
                </p>
            </div>

            <div class="action-row">
                
                <div class="dropdown-container">
                    <button class="dropdown-button">
                        Available Organs
                        <span class="dropdown-arrow">▼</span>
                    </button>
                    
                    <div class="dropdown-content">
                        <div class="organ-item">
                            <span class="organ-name">Kidney</span>
                            <span class="organ-status available">Available</span>
                        </div>
                        <div class="organ-item">
                            <span class="organ-name">Liver</span>
                            <span class="organ-status limited">Limited</span>
                        </div>
                        <div class="organ-item">
                            <span class="organ-name">Heart</span>
                            <span class="organ-status unavailable">Unavailable</span>
                        </div>
                        <div class="organ-item">
                            <span class="organ-name">Lungs</span>
                            <span class="organ-status available">Available</span>
                        </div>
                        <div class="organ-item">
                            <span class="organ-name">Pancreas</span>
                            <span class="organ-status available">Available</span>
                        </div>
                        <div class="organ-item">
                            <span class="organ-name">Cornea</span>
                            <span class="organ-status available">Available</span>
                        </div>
                    </div>
                </div>
                <a href="{{ route('recipient.dashboard') }}" class="back-button">
                    Back to Dashboard
                </a>
            </div>

        </div>
    </div>

</body>
</html>