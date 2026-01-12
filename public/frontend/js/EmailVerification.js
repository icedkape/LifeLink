document.addEventListener('DOMContentLoaded', function() {
  const resendBtn = document.querySelector('.resend-code-btn');
  const timerElement = document.querySelector('.timer');
  
  let timeLeft = 45; // 45 seconds
  let timerInterval;
  
  // Function to update timer display
  function updateTimer() {
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;
    timerElement.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    
    if (timeLeft <= 0) {
      clearInterval(timerInterval);
      timerElement.textContent = "00:00";
      resendBtn.disabled = false;
      resendBtn.style.opacity = "1";
      resendBtn.style.cursor = "pointer";
    } else {
      timeLeft--;
    }
  }
  
  // Function to start/reset timer
  function startTimer() {
    timeLeft = 45;
    resendBtn.disabled = true;
    resendBtn.style.opacity = "0.5";
    resendBtn.style.cursor = "not-allowed";
    
    // Clear existing timer
    if (timerInterval) {
      clearInterval(timerInterval);
    }
    
    // Start new timer
    updateTimer(); // Show initial time
    timerInterval = setInterval(updateTimer, 1000);
  }
  
  // Initial timer start
  startTimer();
  
  // Resend button click handler
  resendBtn.addEventListener('click', function() {
    if (!resendBtn.disabled) {
      startTimer();
      
      // Here you would typically call your API to resend the code
      console.log('Resending code...');
      
      // You could add a success message here
      // alert('Code has been resent to your email.');
    }
  });
});