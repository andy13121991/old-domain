// Selecting elements using jQuery
var hover = $('.earthhover'),
    eObj = '.earthzoom',
    nObj = '.newyork'
    aObj = '.newspaper'

// Document ready function
$(document).ready(function () {

  // Function to handle the scroll and trigger animations
  function handleScroll() {
    // Loop through all elements with the "fade-in" class
    $(".fade-in").each(function (index) {
      // Checking if the element is 100% (or within) from the top of the viewport
      // You can adjust the percentage based on your design preferences
      if ($(this).offset().top <= $(window).scrollTop() + $(window).height() * 1) {
        // Adding the "fade-in-active" class to trigger the animation
        $(this).addClass("fade-in-active");
      }
    });
  }

  // Initial check on page load to handle elements already visible
  handleScroll();

  // Throttle the scroll event with requestAnimationFrame for performance
  var isScrolling = false;

  // Event listener for the scroll event on the window
  $(window).on('scroll', function() {
    // Check if scroll event is not already being processed
    if (!isScrolling) {
      // Use requestAnimationFrame to optimize performance
      window.requestAnimationFrame(function() {
        // Call the function to handle the scroll and trigger animations
        handleScroll();
        // Set the scrolling flag to false after processing the scroll event
        isScrolling = false;
      });
      // Set the scrolling flag to true to indicate that the scroll event is being processed
      isScrolling = true;
    }
  });

  // Hover event handlers
  hover.mouseover(hoverIn);

  hover.on('touchstart', hoverIn);
  
  hover.mouseout(hoverOut);

  hover.on('touchend', hoverOut);
});

// Function for hover in event
function hoverIn() {

  // Scaling and changing opacity for elements on hover in
  $(this).find(eObj).css({ transform : 'scale(4)', opacity : 0 })
  $(this).find(nObj).css({ transform: 'scale(1)', opacity : 1 })
  $(this).find(aObj).css({ transform: 'scale(1)', opacity : 1 })
    
}

// Function for hover out event
function hoverOut() {

  // Scaling and changing opacity for elements on hover out
  $(this).find(eObj).css({ transform : 'scale(1)', opacity : 1 })
  $(this).find(nObj).css({ transform: 'scale(0.5)', opacity : 0 })
  $(this).find(aObj).css({ transform: 'scale(0.2)', opacity : 0 })
}
