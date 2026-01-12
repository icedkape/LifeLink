<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FAQ | LifeLink</title>
  
  <link rel="stylesheet" href="{{ asset('frontend/css/FAQ.css') }}">
</head>

<body>

  <div class="page-container">
    
    <div class="left-section">
      <img class="logo" src="{{ asset('frontend/images/LOGO-LIFELINK.png') }}" alt="LifeLink Logo">
    </div>

    <div class="right-section">
      <h1 class="title">Frequently Asked Questions</h1>
      
      <div class="text-content">
        
        <div class="faq-item">
          <p class="question">What is LifeLink?</p>
          <p class="answer">
            A secure platform connecting organ donors with recipients. We partner with hospitals to ensure every match is safe, ethical, and verified.
          </p>
        </div>

        <div class="faq-item">
          <p class="question">Who can register as a donor?</p>
          <p class="answer">
            Almost anyone. Age or medical history rarely disqualify you automatically; our medical team reviews every profile for suitability.
          </p>
        </div>

        <div class="faq-item">
          <p class="question">Is my medical data secure?</p>
          <p class="answer">
            Yes. We use strict encryption and only share data with verified medical professionals when a valid match is identified.
          </p>
        </div>

        <div class="faq-item">
          <p class="question">How does matching work?</p>
          <p class="answer">
            We match based on strict criteria—blood type, urgency, and location—to ensure the highest success rate for every transplant.
          </p>
        </div>

      </div>

      <a href="{{ url('/') }}" class="btn-back">
        Back to Home
      </a>
    </div>

  </div>

</body>
</html>