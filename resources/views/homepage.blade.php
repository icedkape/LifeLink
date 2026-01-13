<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LifeLink</title>

  <link rel="stylesheet" href="{{ asset('frontend/css/Homepage.css') }}">
</head>

<body>
@php
  // supports filenames with spaces
  $img = fn ($name) => asset('frontend/images/' . rawurlencode($name));
@endphp

<div class="page">

<!--HEADER-->
<header class="topbar">
    <div class="topbar__inner">
      <a class="brand" href="{{ url('/') }}">
        <img class="brand__logo" src="{{ asset('frontend/images/LOGO.png') }}" alt="LifeLink Logo">
      </a>

      <nav class="nav">
        <a class="nav__link" href="{{ url('/') }}">Home</a>
        <a class="nav__link" href="{{ url('/mission') }}">Mission</a>
        <a class="nav__link" href="{{ url('/#lifelinkers') }}">About Us</a>
        <a class="nav__link" href="{{ url('/faq') }}">FAQ</a>
      </nav>

      @guest
        <div class="topbar__right">
            <a class="btn btn--primary" href="{{ url('/register') }}">Sign Up</a>
            <a class="btn btn--primary" href="{{ url('/login') }}">Login</a>
        </div>
      @endguest

      @auth
        <div class="user-dropdown">
          <button class="btn btn--primary dropdown-trigger">
            Welcome, {{ Auth::user()->name }}! ▾
          </button>
          
          <div class="dropdown-menu">
            @if(Auth::user()->role == 'donor')
                <a href="{{ route('donor.dashboard') }}" class="dropdown-item">Donor Dashboard</a>
            @elseif(Auth::user()->role == 'recipient')
                <a href="{{ route('recipient.dashboard') }}" class="dropdown-item">Recipient Dashboard</a>
            @elseif(Auth::user()->role == 'admin')
                <a href="{{ route('admin.dashboard') }}" class="dropdown-item">Admin Dashboard</a>
            @else
                <a href="{{ route('donor.dashboard') }}" class="dropdown-item">My Dashboard</a>
            @endif

            <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
              @csrf
              <button type="submit" class="dropdown-item logout-btn">Logout</button>
            </form>
          </div>
        </div>
      @endauth

    </div>
  </header>

  <script>
    function openGmailInquiry() {
      alert("📧 Email for Inquiries:\ninquiries@lifelink.com\n\nClick OK to open Gmail.");
      const gmailUrl =
        "https://mail.google.com/mail/?view=cm&fs=1" +
        "&to=inquiries@lifelink.com" +
        "&su=" + encodeURIComponent("LifeLink Inquiry") +
        "&body=" + encodeURIComponent(
          "Dear LifeLink Team,\n\nI would like to inquire about:\n\n[Please specify your inquiry]\n\nThank you,\n[Your Name]"
        );
      window.open(gmailUrl, "_blank");
    }
  </script>

  <!-- HERO + METRICS + HOW IT WORKS -->
  <main class="content">

    <!-- HERO -->
    <section class="hero">
      <div class="hero__text">
        <div class="pill">Be a Lifeline</div>

        <h1 class="hero__title">
          Give the Gift of Life.<br>
          <span>Become an Organ Donor Today</span>
        </h1>

        <div class="hero__line"></div>

        <p class="hero__desc">
          LifeLink is the secure digital network that connects organ donors, recipients, and hospitals in one trusted system.
          We streamline the donation process — from registration to transplant — ensuring every gift of life reaches its perfect match.
        </p>

        <!-- TRUST ROW under Register Here -->
        <div class="hero-divider"></div>
        <div class="trust-section">
          <img src="{{ $img('Group 28.png') }}" alt="Trust" class="trust-section__image">
          <div class="trust-section__text">One of the Most Trusted Organ Donation Companies</div>
        </div>
      </div>

      <!-- HERO ART (Vector 1 + Location overlay) -->
      <div class="hero__art hero__art--with-overlay">
        <img class="hero__art-img" src="{{ $img('Vector 1.png') }}" alt="Hero Graphic">

        <!-- Location overlay -->
        <img class="hero__overlay hero__overlay--location"
             src="{{ $img('Group 29.png') }}"
             alt="Location">
      </div>
    </section>

    <!-- METRICS: Group 38 as base, with overlays -->
    <section class="metrics">
      <div class="metrics__container">
        
        <img class="metrics__base" src="{{ $img('Group 38.png') }}" alt="Impact Metrics">

        <img class="metrics__doctor" src="{{ $img('image 2.png') }}" alt="Doctor">

        <img class="metrics__graph" src="{{ asset('frontend/images/graphs.png') }}" alt="Graphs">

      </div>
    </section>

    <!-- HOW IT WORKS -->
<section class="how">
      <div class="how__container">
        
        <img class="how__base" src="{{ $img('Group 39.png') }}" alt="How It Works Process">

        <div class="how__steps-overlay">
          
          <a class="how-card" href="{{ url('/register') }}">
            <img class="how-card__icon" src="{{ asset('frontend/images/Signing.png') }}" alt="Register">
            <div class="how-card__text">Register<br>Online</div>
          </a>

          <a class="how-card" href="{{ url('/medical-review') }}">
            <img class="how-card__icon" src="{{ asset('frontend/images/Survey.png') }}" alt="Review">
            <div class="how-card__text">Medical<br>Review</div>
          </a>

          <a class="how-card" href="{{ url('/consent-docs') }}">
            <img class="how-card__icon" src="{{ $img('Docs.png') }}" alt="Docs">
            <div class="how-card__text">Consent<br>Docs</div>
          </a>

          <a class="how-card" href="{{ url('/alert-match') }}">
            <img class="how-card__icon" src="{{ asset('frontend/images/alert.png') }}" alt="Match">
            <div class="how-card__text">Match<br>Alert</div>
          </a>

        </div>
      </div>
    </section>

    <!-- LONG SECTIONS -->
    <section class="stack">
      <div class="stack__row" id="lifelinkers">
        <img src="{{ $img('Group 41.png') }}" alt="LifeLinkers">
      </div>
      <div class="stack__row">
        <img src="{{ $img('Group 42.png') }}" alt="Footer">
      </div>
    </section>

  </main>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // 1. Find all links on the page
    const links = document.querySelectorAll('a');
    
    links.forEach(link => {
      link.addEventListener('click', function(e) {
        // Only animate if it's an internal link (not #hash or external)
        if (link.hostname === window.location.hostname && !link.hash) {
          e.preventDefault(); // Stop immediate load
          
          // Add fade-out class to body
          document.body.classList.add('page-transition-exit');
          
          // Wait 400ms for animation, then go to link
          setTimeout(function() {
            window.location.href = link.href;
          }, 400);
        }
      });
    });
  });
</script>

<style>
  /* The normal state */
  body {
    transition: opacity 0.4s ease-in-out;
    opacity: 1;
  }
  
  /* The fade-out state (added by JS) */
  .page-transition-exit {
    opacity: 0;
  }
</style>
</body>
</html>
