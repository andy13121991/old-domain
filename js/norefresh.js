// Event handler for the document's ready state change
document.onreadystatechange = function () {

  // Check if the document has completed loading
  if (document.readyState === 'complete')
  {
    // Page has finished loading
    $("#loading-container").hide();
  }

  else
  {
    // Page is still loading
    $("#loading-container").show();
  }
};

// jQuery document ready function
$(function () {

  // Hide the loading container on document ready
  $("#loading-container").hide();

  // Click event handler for links inside ".menu-navigation > li > a" elements
  $(".menu-navigation > li > a").click(function (e) {
    
    // Prevent default link behavior and load content without page refresh
    noRefreshPage.call(this, e);
  });

  // Click event handler for links inside ".menu > li > a" elements
  $(".menu > li > a").click(function (e) {
    
    // Prevent default link behavior and load content without page refresh
    noRefreshPage.call(this, e);
  });

  // Click event handler for links with the class "changelog-link"
  $(".changelog-link").click(function (e) {

    // Prevent default link behavior and load content without page refresh
    noRefreshPage.call(this, e);
  });


  // Function to prevent page refresh on link click and load content dynamically
  function noRefreshPage(e) {
      
      e.preventDefault();

    // Get the href attribute of the clicked link
    let href = $(this).attr("href");

    // Show loading screen
    loadLoadingScreen();

    // Load content into the body and update the URL
    $("body").load(href, function () {

      // Modify the URL and hide the loading screen
      modifyUrl($(this).text(), href);

      hideLoadingScreen();
    });
  };

  // Function to show the loading screen
  function loadLoadingScreen() {

    // Show loading screen
    $("#loading-container").show();
  }

  // Function to hide the loading screen
  function hideLoadingScreen() {

    // Hide the loading screen container
    $("#loading-container").hide();
  }

  // Function to modify the URL using the HTML5 History API
  function modifyUrl(title, url) {

    // Check if the browser supports the History API
    if (typeof (history.pushState) != "undefined")
    {
      // Create an object with title and URL information
      let obj = {
        Title: title,
        Url: url
      };
      
      // Push the state to the browser's history
      history.pushState(obj, obj.Title, obj.Url);
    }
  }

});
