<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Recipient | LifeLink</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/Recipient.css') }}">
</head>

<body>

  <header class="dashboard-header">
    <div class="header-left">
      <img src="{{ asset('frontend/images/LOGO-LIFELINK.png') }}" class="logo" alt="LifeLink Logo">
      <div class="header-title">
        <span class="title-top">Recipient</span>
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
          <h1>Hi, <span class="highlight-blue">Juan Dela Cruz!</span></h1>
          <p class="sub-text">
            <b>Recipient · </b>
            Status: <span class="highlight-green">ACTIVE</span>
          </p>
          <p class="donor-id">ID: R001</p>
          
          <div class="profile-pill-static">
            Recipient Profile: 90% Complete
          </div>
        </div>

        <a href="{{ url('/recipient/form') }}" class="recipient-form-button-container">
            <div class="recipient-form-pill">RECIPIENT FORM</div>
            <img src="{{ asset('frontend/images/files-blue.png') }}" class="banner-illustration" alt="Files">
        </a>

      </div>
    </section>

    <section class="stats-grid">
      
      <div class="card status-card">
        <div class="card-content">
          <h2 class="text-blue">RECIPIENT STATUS</h2>
          <p>Profile: 90% Complete</p>
          <p>Request Card: Pending</p>
          
          <div class="inner-review-badge blue-badge">
            NEXT REVIEW DUE: SEPT 15, 2025
          </div>
        </div>
        <img src="{{ asset('frontend/images/status-blue.png') }}" class="card-img" alt="Status">
      </div>

      <div class="card matching-card">
        <div class="card-content white-text">
          <h2>MATCHING STATUS</h2>
          <p class="impact-text">
            You're waiting to receive<br>
            <b>A Second Chance in Life</b>
          </p>
        </div>
        <img src="{{ asset('frontend/images/waiting-blue.png') }}" class="card-img" alt="Waiting">
      </div>
    </section>

    <section class="bottom-grid">
      
      <div class="action-column">
        <div class="column-header gray-header">QUICK ACTIONS</div>
        <div class="action-list">
          <a href="#" onclick="showWaitlistInfo()" class="action-item">View Waitlist</a>
          <a href="{{ url('/recipient/form') }}" class="action-item">Update Requirements</a>
          
          <a href="{{ url('/alert-match') }}" class="action-item">Track Matching</a>
          
          <a href="#" onclick="openCoordinatorEmail()" class="action-item">Contact Coordinator</a>
          
          <a href="{{ url('/faq') }}" class="action-item last-item">View FAQ</a>
        </div>
      </div>

      <div class="checklist-column">
        <div class="column-header blue-header">Profile Checklist</div>
        
        <div class="checklist-wrapper">
          <ul class="checklist-list">
            <li class="checklist-item">
              <span class="item-text">Personal Info:</span>
              <input type="checkbox" id="r_check1" checked> 
            </li>
            <li class="checklist-item">
              <span class="item-text">Contact Details:</span>
              <input type="checkbox" id="r_check2" checked>
            </li>
            <li class="checklist-item">
              <span class="item-text">Emergency Contact:</span>
              <input type="checkbox" id="r_check3" checked>
            </li>
            <li class="checklist-item">
              <span class="item-text">Medical History:</span>
              <input type="checkbox" id="r_check4">
            </li>
            <li class="checklist-item">
              <span class="item-text">Request Card:</span>
              <input type="checkbox" id="r_check5">
            </li>
          </ul>
        </div>
      </div>

    </section>
  </div>

  <footer class="dashboard-footer"></footer>

  <script>
    function showWaitlistInfo() {
        alert("Waitlist Information\n\nYour waitlist status will be announced via your registered email.\n\nWe will notify you as soon as a match becomes available.");
    }

    function openCoordinatorEmail() {
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