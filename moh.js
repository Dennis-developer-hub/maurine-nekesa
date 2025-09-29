// Simple form submission alert
document.getElementById("contactForm").addEventListener("submit", function(e) {
  e.preventDefault();
  alert("Thank you for contacting Moh Classic Salon! We will reach out soon.");
  this.reset();
});
