
function openGmailInquiry() {
    // Pop-up instructions
    alert("📧 Email for Inquiries:\ninquiries@lifelink.com\n\nClick OK to open Gmail.");
    
    // Gmail compose link
    var gmailUrl = "https://mail.google.com/mail/?view=cm&fs=1" +
                   "&to=inquiries@lifelink.com" +
                   "&su=" + encodeURIComponent("LifeLink Inquiry") +
                   "&body=" + encodeURIComponent("Dear LifeLink Team,\n\nI would like to inquire about:\n\n[Please specify your inquiry]\n\nThank you,\n[Your Name]");
    
    window.open(gmailUrl, "_blank");
}
