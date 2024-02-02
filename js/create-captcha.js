// Event listener for the 'generateButton' click event
document.getElementById('generateButton').addEventListener('click', function () {

  // Add a class to trigger the rotate animation
  this.classList.add('rotateAnimation');

  // Call the generate function
  generate();

  // Call the generate function after a delay (adjust the delay as needed)
  setTimeout(function () {

    // Remove the class after the animation is complete
    document.getElementById('generateButton').classList.remove('rotateAnimation');
  }, 500);
});

// Event listener for the 'btn' click event
document.getElementById('btn').addEventListener('click', function () {
  
  // Call the printmsg function
  printmsg();
});

// Event listener for the 'submit' keydown event
document.getElementById('submit').addEventListener('keydown', function (event) {
  
  // Check if the pressed key is Enter
  if (event.key === 'Enter')
  {
    // Call the printmsg function
    printmsg();
  }
});

// Get the 'image' element by its ID
const captcha = document.getElementById("image");

// Function to generate a random captcha
function generate() {

	document.getElementById("submit").value = "";

	
	let uniquechar = "";

	const randomchar ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  // Generate a random string of 6 characters
	for (let i = 1; i < 7; i++) {
		uniquechar += randomchar.charAt(Math.random() * randomchar.length)
	}

  // Set the innerHTML of the 'image' element to the generated string
	captcha.innerHTML = uniquechar;
}

// Function to validate user input against the generated captcha
function printmsg() {

  // Get user input from the 'submit' element
	const user_input = document.getElementById("submit").value;

  // Check if the user input matches the generated captcha
  if (user_input == captcha.innerHTML)
  {
    // If matched, open the specified page
		window.open('pages/home.php', '_self').focus();
  }
  
  else
  {
    // If not matched, indicate the error, generate a new captcha, and update styling
    captcha.style.border = '2px solid red';
		document.getElementById("key").innerHTML = "! Not matched";
		generate();
	}
}

