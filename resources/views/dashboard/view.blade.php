<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Information | LifeLink</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/view.css') }}">
</head>
<body>

    <div class="main-layout">
        <div class="left-section">
            <img class="logo" alt="LifeLink Logo" src="{{ asset('frontend/images/LOGO-LIFELINK.png') }}" />
        </div>

        <div class="right-section">
            <b class="view-header">View Information</b>
            
            <div class="info-card">
                <div class="info-item">
                    <span class="label">Donor ID:</span> <span class="value">D-1023</span>
                </div>
                <div class="info-item">
                    <span class="label">Full Name:</span> <span class="value">Juan Dela Cruz</span>
                </div>
                <div class="info-item">
                    <span class="label">Age:</span> <span class="value">28</span>
                </div>
                <div class="info-item">
                    <span class="label">Sex:</span> <span class="value">Male</span>
                </div>
                <div class="info-item">
                    <span class="label">Blood Type:</span> <span class="value">O+</span>
                </div>
                <div class="info-item">
                    <span class="label">Organ(s) Pledged:</span> <span class="value">Kidney</span>
                </div>
                <div class="info-item">
                    <span class="label">Medical Status:</span> <span class="value status-cleared">Cleared</span>
                </div>
                <div class="info-item">
                    <span class="label">Consent Status:</span> <span class="value">Signed</span>
                </div>
                <div class="info-item">
                    <span class="label">Application Status:</span> <span class="value status-pending">Pending</span>
                </div>
            </div>

            <a href="{{ route('admin.dashboard') }}" class="back-button">
                Back to Dashboard
            </a>
        </div>
    </div>

</body>
</html>