function showLocalTime() {
    var date = new Date(); // Create a new date object
    var options = { // Options for formatting the date and time
      year: 'numeric',
      month: 'long',
      day: 'numeric',
      hour: 'numeric',
      minute: 'numeric',
      second: 'numeric',
      hour12: true
    };
    var timeString = date.toLocaleTimeString([], options); // Get the local time as a string
    var dateString = date.toLocaleDateString(); // Get the local date as a string
    document.getElementById("time").innerHTML = timeString ; // Update the time display element
  }
  
  showLocalTime(); // Call the function once when the page loads
  
  setInterval(showLocalTime, 1000); // Update the time display every second
  