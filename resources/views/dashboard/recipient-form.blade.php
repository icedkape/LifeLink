<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recipient Form | LifeLink</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/Recipient-Form.css') }}">
</head>

<body>

  <header class="form-header">
    <div class="header-container">
      <div class="header-left">
        <a href="{{ route('recipient.dashboard') }}" class="back-link">
           <img src="{{ asset('frontend/images/Forward.png') }}" class="back-icon" alt="Back">
        </a>
        <img src="{{ asset('frontend/images/LOGO-LIFELINK.png') }}" class="form-logo" alt="LifeLink">
      </div>
      <div class="header-titles">
        <h1 class="main-title">Recipient <span class="blue-text">Form</span></h1>
        <p class="sub-header">Priority matching based on medical urgency</p>
      </div>
    </div>
  </header>

  <main class="form-wrapper">
    <div class="intro-box">
      <p>We honor your strength and commitment to this process. We are here to walk this path with you — from registration to recovery. Your wait is our priority.</p>
    </div>

    <form action="#" method="POST" id="mainRecipientForm">
      @csrf

      <fieldset class="form-section">
        <div class="section-header">
          <div class="inner-step-title">Step 1: Personal Information</div>
          <span class="id-display">Receiver ID: <span class="blue-text">R001</span></span>
        </div>

        <div class="grid-row">
          <div class="form-group full-width">
            <label>Full Name:</label>
            <input type="text" placeholder="Full Name">
            <small>eg. Juan Dela Cruz</small>
          </div>
        </div>

        <div class="grid-row">
          <div class="form-group">
            <label>Age:</label>
            <input type="number" placeholder="Age">
            <small>18 yrs old or above</small>
          </div>
          <div class="form-group">
            <label>Sex:</label>
            <select>
              <option value="" disabled selected>Select Sex</option>
              <option>Male</option>
              <option>Female</option>
            </select>
            <small>Male or Female</small>
          </div>
        </div>

        <div class="grid-row">
          <div class="form-group two-thirds">
            <label>Address:</label>
            <input type="text" placeholder="Address">
            <small>eg. 123 Main Street</small>
          </div>
          <div class="form-group one-third">
            <label>Contact Num:</label>
            <input type="tel" placeholder="09123456789">
            <small>eg. 09123456789</small>
          </div>
        </div>

        <div class="grid-row">
          <div class="form-group">
            <label>Birth Date:</label>
            <input type="date">
            <small>eg. 01-01-2001</small>
          </div>
          <div class="form-group">
            <label>Email Address:</label>
            <input type="email" placeholder="example@email.com">
            <small>eg. example@email.com</small>
          </div>
        </div>
      </fieldset>

      <fieldset class="form-section">
        <div class="inner-step-title">Step 2: Medical Information</div>
        
        <div class="grid-row">
          <div class="form-group">
            <label>Blood Type:</label>
            <select class="blood-type-dropdown">
              <option value="" disabled selected>Select Blood Type</option>
              <option>A+</option><option>A-</option>
              <option>B+</option><option>B-</option>
              <option>AB+</option><option>AB-</option>
              <option>O+</option><option>O-</option>
            </select>
          </div>
          <div class="form-group">
            <label>Height:</label>
            <input type="text" placeholder="eg. 5'10">
          </div>
          <div class="form-group">
            <label>Weight:</label>
            <input type="text" placeholder="eg. 150 kg">
          </div>
        </div>

        <div class="grid-row">
          <div class="form-group">
            <label>Health Status:</label>
            <textarea rows="2" placeholder="eg. Kidney Failure Stage 4"></textarea>
          </div>
          <div class="form-group">
            <label>Recovery Progress:</label>
            <textarea rows="2" placeholder="Currently undergoing dialysis..."></textarea>
          </div>
        </div>

        <div class="grid-row">
          <div class="form-group">
            <label>Last Check-Up Date:</label>
            <input type="date">
          </div>
          <div class="form-group">
            <label>Remarks:</label>
            <textarea rows="2" placeholder="Any known allergies or complications"></textarea>
          </div>
        </div>
      </fieldset>

      <fieldset class="form-section">
        <div class="inner-step-title">Step 3: Organ Information</div>
        
        <div class="grid-row">
          <div class="form-group">
             <label>Organ Needed:</label>
             <input type="text" placeholder="eg. Kidney">
          </div>
           <div class="form-group">
             <label>Organ Received ID:</label>
             <input type="text" placeholder="(If applicable)">
          </div>
        </div>

        <div class="grid-row">
          <div class="form-group">
            <label>Receiver ID:</label>
            <input type="text" placeholder="(If applicable)">
          </div>
          <div class="form-group">
            <label>Date Received/Needed:</label>
            <input type="date">
          </div>
        </div>
      </fieldset>

      <section class="pledge-area">
        <h3>Recipient Commitment & Consent</h3>
        <p>I, the undersigned, voluntarily apply to be registered as an organ transplant recipient through LifeLink. I understand that I am responsible for maintaining updated contact and health information in the system.</p>
        
        <div class="signature-box">
           <button type="button" class="btn-blue-outline" onclick="showSignaturePopup()">Upload Signature</button>
           <p><strong>RECIPIENT ID: R001</strong></p>
        </div>
      </section>

      <footer class="form-actions">
        <button type="button" class="btn-gray" onclick="confirmDelete()">Delete</button>
        <div class="right-actions">
          <button type="button" class="btn-olive" onclick="confirmSave()">Save Progress</button>
          
          <a href="{{ route('recipient.submitted') }}" class="btn-blue-solid">Submit Form</a>
        </div>
      </footer>

    </form>
  </main>

  <footer class="main-footer"></footer>

  <script>
    function showSignaturePopup() {
      alert("Open Gmail to send your signature to lifelink.Signatures@gmail.com?\n\nPlease rename file to: RCID-2025_Signature.png");
      window.open("https://mail.google.com/mail/?view=cm&fs=1&to=lifelink.Signatures@gmail.com", "_blank");
    }
    function confirmDelete() { if(confirm("⚠️ Are you sure you want to delete this information?")) alert("Information Deleted"); }
    function confirmSave() { if(confirm("💾 Save changes?")) alert("Information Saved"); }
  </script>
</body>
</html>