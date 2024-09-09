document.getElementById('subscription-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
  
    var email = document.getElementById('email-input').value;
  
    // You can perform further validation of the email here before submitting
    
    // Simulate an asynchronous request to a server to handle the subscription
    setTimeout(function() {
      document.getElementById('message').innerHTML = 'Thank you for subscribing!';
    }, 1000);
  });
  