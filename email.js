function sendMail() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
  
    // Validate email
    if (!validateEmail(email)) {
      alert("Please enter a valid email address.");
      return;
    }
  
    var params = {
      name: name,
      email: email,
      message: message,
    };
  
    const serviceID = "service_3brt5vt";
    const templateID = "template_otcppsn";
  
    emailjs.send(serviceID, templateID, params)
      .then(res => {
        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("message").value = "";
        console.log(res);
        alert("Your message was sent successfully!");
      })
      .catch(err => console.log(err));
  }
  
  function validateEmail(email) {
    const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return regex.test(email);
  }
  
