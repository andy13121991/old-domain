// Get the 'hamburger-menu' button and the first span element within it
var button = document.getElementById('hamburger-menu'),
    span = button.getElementsByTagName('span')[0];

// Toggle the 'hamburger-menu-button-close' class on span when the button is clicked
button.onclick =  function() {
  span.classList.toggle('hamburger-menu-button-close');

};

// Event handler using jQuery to toggle the 'on' class on a target element
$('#hamburger-menu').on('click', toggleOnClass);

function toggleOnClass(event) {

  // Get the ID of the element to toggle based on the 'data-toggle' attribute
  var toggleElementId = '#' + $(this).data('toggle'),
  element = $(toggleElementId);

  // Toggle the 'on' class on the target element
  element.toggleClass('on');
}

// close hamburger menu after click a link inside the menu
$('.menu li a').on("click", function () {
  
  // Trigger a click on the 'hamburger-menu' button
  $('#hamburger-menu').click();
});
