// Function to show the hidden text
function displayText() {
    const textField = document.getElementById("textField");
    textField.style.display = "block";
  }
  
  // Function to handle the click event for the "Click Me!" button
  document.querySelector("button").addEventListener("click", displayText);
  
  // Function to handle the click event for the "Epicurean Bistro" button
  function rest() {
    alert("Epicurean Bistro button clicked");
  }
  
  // Add click event listeners to the "Epicurean Bistro" and "Tonic Tavern" buttons
  document.querySelectorAll(".btn1").forEach(function (button) {
    button.addEventListener("click", rest);
  });
  