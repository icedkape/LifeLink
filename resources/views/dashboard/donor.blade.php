<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Donor | LifeLink</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/Donor.css') }}">
</head>

<body>

  <header class="dashboard-header">
    <div class="header-left">
      <img src="{{ asset('frontend/images/LOGO-LIFELINK.png') }}" class="logo" alt="LifeLink Logo">
      <div class="header-title">
        <span class="title-top">Donor</span>
        <span class="title-bottom">Dashboard</span>
      </div>
    </div>

    <nav class="nav">
        <a class="nav__link" href="{{ url('/') }}">Home</a>
        <a class="nav__link" href="{{ url('/mission') }}">Mission</a>
        <a class="nav__link" href="{{ url('/#lifelinkers') }}">About Us</a>
        <a class="nav__link" href="{{ url('/faq') }}">FAQ</a>
    </nav>

    <button type="button" class="btn-logout" onclick="window.location.href='{{ route('login') }}'">
      Logout
    </button>
  </header>

  <div class="main-container">

    <section class="welcome-banner-wrapper">
      <div class="gray-banner">
        <div class="banner-text-content">
          <h1>Hi, <span class="highlight-red">Maria Santos!</span></h1>
          <p class="sub-text">
            <b>Registered Donor · </b>
            Status: <span class="highlight-green">ACTIVE</span>
          </p>
          <p class="donor-id">ID: D001</p>
          
          <div class="profile-pill-static">
            Donor Profile: 90% Complete
          </div>
        </div>
        
        <a href="{{ url('/donor/form') }}" class="top-right-btn">DONOR FORM</a>
        <img src="{{ asset('frontend/images/files-red.png') }}" class="banner-illustration" alt="Files">
      </div>
    </section>

    <section class="stats-grid">
      
      <div class="card status-card">
        <div class="card-content">
          <h2>DONOR STATUS</h2>
          <p>Profile: 90% Complete</p>
          <p>Donor Card: Pending</p>
          
          <div class="inner-review-badge">
            NEXT REVIEW DUE: SEPT 15, 2025
          </div>
        </div>
        <img src="{{ asset('frontend/images/status-red.png') }}" class="card-img" alt="Microscope">
      </div>

      <div class="card impact-card">
        <div class="card-content white-text">
          <h2>YOUR IMPACT</h2>
          <p class="impact-text">
            You're registered to save<br>
            up to 8 lives<br>
            450+ donors joined this month
          </p>
        </div>
        <img src="{{ asset('frontend/images/impact-red.png') }}" class="card-img" alt="Trophy">
      </div>
    </section>

    <section class="bottom-grid">
      <div class="action-column">
        <div class="column-header gray-header">QUICK ACTIONS</div>
        <div class="action-list">
          <a href="#" class="action-item">Continue Donor Form</a>
          <a href="#" class="action-item">Update Health Info</a>
          <a href="{{ url('/coming-soon') }}" class="action-item">View Donor Card</a>
          
          <a href="#" onclick="contactCoordinator()" class="action-item">Contact Coordinator</a>
          
          <a href="{{ url('/faq') }}" class="action-item last-item">View FAQ</a>
        </div>
      </div>

      <div class="checklist-column">
        <div class="column-header red-header">Profile Checklist</div>
        
        <div class="checklist-wrapper">
          <ul class="checklist-list">
            
            <li class="checklist-item">
              <span class="item-text">Personal Info:</span>
              <input type="checkbox" id="check1" checked> 
            </li>

            <li class="checklist-item">
              <span class="item-text">Contact Details:</span>
              <input type="checkbox" id="check2" checked>
            </li>

            <li class="checklist-item">
              <span class="item-text">Emergency Contact:</span>
              <input type="checkbox" id="check3" checked>
            </li>

            <li class="checklist-item">
              <span class="item-text">Medical History:</span>
              <input type="checkbox" id="check4">
            </li>

            <li class="checklist-item">
              <span class="item-text">Donor Card:</span>
              <input type="checkbox" id="check5">
            </li>

          </ul>
        </div>
      </div>

    </section>

  </div>

  <footer class="dashboard-footer"></footer>

  <script>
    function contactCoordinator() { 
        alert("📧 Contact Coordinator:\ncoordinator@lifelink.com\n\nClick OK to open email.");
        var gmailUrl = "https://mail.google.com/mail/?view=cm&fs=1&to=coordinator@lifelink.com&su=" + encodeURIComponent("Coordinator Inquiry - LifeLink");
        window.open(gmailUrl, "_blank");
    }

    document.addEventListener("DOMContentLoaded", function() {
      const checkboxes = document.querySelectorAll('.checklist-item input[type="checkbox"]');
      checkboxes.forEach(box => {
        const savedState = localStorage.getItem(box.id);
        if (savedState === 'true') box.checked = true;
        else if (savedState === 'false') box.checked = false;
        
        box.addEventListener('change', function() {
          localStorage.setItem(this.id, this.checked);
        });
      });
    });
  </script>

</body>
</html>