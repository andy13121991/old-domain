// Iterate over each element with the class 'counter'
$('.counter').each(function () {

  // Set the Counter property of the current element to 0
  $(this).prop('Counter', 0).animate({
    
    // Animate the Counter property to the text content of the element
    Counter: $(this).text()
  },
  {
    // Animation duration
    duration: 2500,

    // Easing function for the animation
    easing: 'swing',

    // Step function called on each step of the animation
    step: function (now) {

      // Update the text content of the element to the rounded value of the Counter property
      $(this).text(Math.ceil(now) + '%');
    }
  });
});
