<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin | LifeLink</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/Admin.css') }}">
</head>

<body>

  <header class="dashboard-header">
    <div class="header-left">
      <img src="{{ asset('frontend/images/LOGO-LIFELINK.png') }}" class="logo" alt="LifeLink Logo">
      <div class="header-title">
        <span class="title-top">Admin</span>
        <span class="title-bottom">Dashboard</span>
      </div>
    </div>
    <button type="button" class="btn-logout" onclick="window.location.href='{{ route('login') }}'">
      Logout
    </button>
  </header>

  <div class="main-container">

    <section class="welcome-banner-wrapper">
      <div class="gray-banner">
        <div class="banner-text-content">
          <h1>Hi, <span class="highlight-green">Maria Santos!</span></h1>
          <p class="sub-text">
            <b>System Status: </b>
            <span class="highlight-active">ACTIVE</span>
          </p>
          <p class="role-text">Role: System Administrator</p>
        </div>
        
        <div class="admin-stats-group">
            <div class="stat-badge">
                <span class="stat-label">Total Users</span>
                <span class="stat-number">520</span>
            </div>
            <div class="stat-badge available">
                <span class="stat-label">Available Organs</span>
                <span class="stat-number">312</span>
            </div>
        </div>
      </div>
    </section>

    <section class="admin-grid">
      
      <div class="admin-card">
        <div class="card-header">
            <h3>Available Organs</h3>
        </div>
        <div class="card-body">
            <div class="info-row">
                <span><strong>Type:</strong> Kidney</span>
                <span><strong>Blood:</strong> O+</span>
            </div>
            <div class="info-row">
                <span><strong>Hospital:</strong> MADOCS</span>
            </div>
            
            <div class="dropdown-wrapper">
                <div class="dropdown-container">
                    <div class="rectangle-dropdown-btn">
                        <span class="btn-text">Availability</span>
                        <span class="dropdown-arrow">▼</span>
                    </div>
                    <div class="dropdown-menu">
                        <div class="dropdown-item available">Available</div>
                        <div class="dropdown-item not-available">Not Available</div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="admin-card">
        <div class="card-header">
            <h3>Manage Donors</h3>
        </div>
        <div class="card-body">
            <div class="info-row">
                <span><strong>ID:</strong> D-1034</span>
            </div>
            <div class="info-row">
                <span><strong>Name:</strong> Juan Dela Cruz</span>
            </div>
            
            <a href="{{ route('admin.view') }}" class="view-btn">View Profile</a>
        </div>
      </div>

      <div class="admin-card">
        <div class="card-header">
            <h3>Manage Hospitals</h3>
        </div>
        <div class="card-body">
            <div class="info-row">
                <span><strong>Hospital:</strong> PGH (Phil. General Hospital)</span>
            </div>
            <div class="status-row">
                <span class="status-dot green"></span> Active Partner
            </div>
            
            <a href="{{ route('admin.view') }}" class="view-btn">View Details</a>
        </div>
      </div>

      <div class="admin-card">
        <div class="card-header">
            <h3>Manage Doctors</h3>
        </div>
        <div class="card-body">
            <div class="info-row">
                <span><strong>Name:</strong> Dr. Ramos Ly</span>
            </div>
            <div class="info-row">
                <span><strong>Specialization:</strong> Nephrology</span>
            </div>
            
            <a href="{{ route('admin.view') }}" class="view-btn">View Profile</a>
        </div>
      </div>

    </section>
  </div>

  <footer class="dashboard-footer"></footer>

</body>
</html>