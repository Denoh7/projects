(function() {
    emailjs.init("LRbRZEzmfToilQM2f"); // ✅ Replace with your actual EmailJS Public Key
  })();

  document.getElementById("emailForm").addEventListener("submit", function(event) {
    event.preventDefault();

    // ✅ Get form values
    const firstName = document.getElementById("firstname").value.trim();
    const secondName = document.getElementById("secondname").value.trim();
    const userEmail = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();

    // ✅ Basic Form Validation
    if (!firstName || !secondName || !userEmail || !message) {
      alert("⚠️ Please fill in all the fields.");
      return;
    }

    if (!validateEmail(userEmail)) {
      alert("⚠️ Please enter a valid email address.");
      return;
    }

    // ✅ EmailJS parameters for sending admin notification
    const adminParams = {
      firstname: firstName,
      secondname: secondName,
      email: userEmail, // ✅ Set user's email as sender
      message: message
    };

    // ✅ EmailJS parameters for sending an auto-reply to the user
    const autoReplyParams = {
      firstname: firstName,
      email: userEmail, // ✅ Auto-reply should go to the user
      message: message
    };

    // ✅ Send both admin email & auto-reply
    Promise.all([
      emailjs.send("service_79sbhxf", "template_dbfs1rh", adminParams),
      emailjs.send("service_79sbhxf", "template_q49znv6", autoReplyParams)
    ])
    .then(function(responses) {
      alert(`✅ Message sent successfully! Auto-reply sent to ${userEmail}.`);
      console.log("Admin Email Sent:", responses[0]);
      console.log("Auto-Reply Sent:", responses[1]);

      // ✅ Clear form after successful submission
      document.getElementById("emailForm").reset();
    })
    .catch(function(error) {
      alert("❌ Failed to send message. Please check your configuration.");
      console.error("EmailJS ERROR:", error);
    });
  });

  // ✅ Function to validate email format
  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }