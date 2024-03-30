document.addEventListener("DOMContentLoaded", function() {
  // Check if token exists in session storage
  const token = sessionStorage.getItem("token");

  if (!token) {
    // Redirect to login page if token does not exist
    window.location.href = "../login.html"; 
  }

  // Listen for click events on elements with the "logout" class
  document.querySelectorAll('.logout').forEach(function(element) {
      element.addEventListener('click', function() {
          // Clear token from session storage
          sessionStorage.removeItem("token");
          sessionStorage.removeItem("userId");
          // Redirect to login page after logout
          window.location.href = "../login.html"; 
      });
  });
});
