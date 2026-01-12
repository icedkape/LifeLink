<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Donor Form | LifeLink</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/Donor-Form.css') }}">
</head>

<body>

  <header class="form-header">
    <div class="header-container">
      <div class="header-left">
        <a href="{{ route('donor.dashboard') }}" class="back-link">
           <img src="{{ asset('frontend/images/Forward.png') }}" class="back-icon" alt="Back">
        </a>
        <img src="{{ asset('frontend/images/LOGO-LIFELINK.png') }}" class="form-logo" alt="LifeLink">
      </div>
      <div class="header-titles">
        <h1 class="main-title">Donor <span class="red-text">Form</span></h1>
        <p class="sub-header">Become an Organ & Tissue Donor</p>
      </div>
    </div>
  </header>

  <main class="form-wrapper">
    <div class="intro-box">
      <p>Thank you for considering this life-saving decision. By registering, you join thousands of donors committed to giving the gift of life.</p>
    </div>

    <form action="#" method="POST" id="mainDonorForm">
      @csrf

      <fieldset class="form-section">
        <div class="section-header">
          <div class="inner-step-title">Step 1: Donor Information</div>
          <span class="donor-id-display">DonorID: <span class="red-text">DM001</span></span>
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
            <textarea rows="2" placeholder="Healthy"></textarea>
          </div>
          <div class="form-group">
            <label>Blood Pressure:</label>
            <input type="text" placeholder="120/80">
          </div>
        </div>

        <div class="grid-row">
          <div class="form-group">
            <label>Last Check-Up Date:</label>
            <input type="date">
          </div>
          <div class="form-group">
            <label>Remarks:</label>
            <textarea rows="2" placeholder="No known allergies"></textarea>
          </div>
        </div>
      </fieldset>

<fieldset class="form-section">
        <div class="inner-step-title">Step 3: Organ Donation</div>
        
        <div class="grid-row">
          <div class="form-group full-width">
             <label>Doctor ID:</label>
             <input type="text" placeholder="eg. DOC001">
          </div>
        </div>

        <div class="grid-row">
          <div class="form-group">
            <label>Organ Donated:</label>
            <input type="text" placeholder="eg. Heart">
          </div>
          <div class="form-group">
            <label>Date of Donation:</label>
            <input type="date">
          </div>
        </div>
      </fieldset>

      <fieldset class="form-section">
        <div class="inner-step-title">Step 4: Hospital Information</div>

        <div class="grid-row">
          <div class="form-group">
            <label>Hospital ID:</label>
            <input type="text" placeholder="eg. HOS001">
          </div>
          <div class="form-group">
            <label>Hospital Name:</label>
            <input type="text" placeholder="eg. Manila Medical Center">
          </div>
        </div>

        <div class="grid-row">
          <div class="form-group two-thirds">
             <label>Hospital Address:</label>
             <input type="text" placeholder="eg. 123 Main Street">
          </div>
          <div class="form-group one-third">
             <label>Contact Number:</label>
             <input type="tel" placeholder="eg. 09123456789">
          </div>
        </div>
      </fieldset>

      <fieldset class="form-section">
        <div class="inner-step-title">Step 5: Doctor Information</div>

        <div class="grid-row">
          <div class="form-group">
            <label>Doctor ID:</label>
            <input type="text" placeholder="eg. DOC001">
          </div>
          <div class="form-group">
            <label>Hospital ID:</label>
            <input type="text" placeholder="eg. HOS001">
          </div>
        </div>

        <div class="grid-row">
          <div class="form-group">
            <label>Doctor Name:</label>
            <input type="text" placeholder="eg. Dr. John Doe">
          </div>
          <div class="form-group">
            <label>Department:</label>
            <input type="text" placeholder="eg. Cardiology">
          </div>
        </div>
      </fieldset>

      <section class="pledge-area">
        <h3>Donor Pledge</h3>
        <p>I, the undersigned, voluntarily express my wish to become an organ and tissue donor upon my death. I understand that this is a legal document, my family will be consulted, and there is no cost for donation.</p>
        
        <div class="signature-box">
           <button type="button" class="btn-yellow" onclick="showSignaturePopup()">Upload Signature</button>
           <p><strong>DONOR ID: DM001</strong></p>
        </div>
      </section>

      <fieldset class="form-section witness-section">
        <div class="grid-row">
          <div class="form-group">
            <label>Witness Name:</label>
            <input type="text" placeholder="Witness Name">
          </div>
          <div class="form-group">
            <label>Relationship:</label>
            <input type="text" placeholder="eg. Father">
          </div>
        </div>
      </fieldset>

      <footer class="form-actions">
        <button type="button" class="btn-gray" onclick="confirmDelete()">Delete</button>
        <div class="right-actions">
          <button type="button" class="btn-olive" onclick="confirmSave()">Save Progress</button>
          <a href="{{ route('donor.submitted') }}" class="btn-green">Submit Form</a>
        </div>
      </footer>

    </form>
  </main>

  <footer class="main-footer"></footer>

  <script>
    function showSignaturePopup() {
      if(confirm("Open Gmail to send your signature to lifelink.Signatures@gmail.com?")) {
        window.open("https://mail.google.com/mail/?view=cm&fs=1&to=lifelink.Signatures@gmail.com", "_blank");
      }
    }
    function confirmDelete() { if(confirm("⚠️ Delete this information?")) alert("Deleted"); }
    function confirmSave() { if(confirm("💾 Save changes?")) alert("Saved"); }
  </script>
</body>
</html>