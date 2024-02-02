function noRefreshPage(e) {
      

  e.preventDefault();


  let href = $(this).attr("href");


  loadLoadingScreen();


  $("body").load(href, function () {


    modifyUrl($(this).text(), href);

    
    hideLoadingScreen();
  });
};


function loadLoadingScreen() {

  // Show loading screen
  $("#loading-container").show();
}


function hideLoadingScreen() {

  // Hide the loading screen container
  $("#loading-container").hide();
}


function modifyUrl(title, url) {


  if (typeof (history.pushState) != "undefined")
  {
    let obj = {
      Title: title,
      Url: url
    };
    

  history.pushState(obj, obj.Title, obj.Url);
  }
}

const captcha = document.getElementById("image");

function generate() {

	document.getElementById("submit").value = "";

	
	let uniquechar = "";

	const randomchar ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

	for (let i = 1; i < 7; i++) {
		uniquechar += randomchar.charAt(Math.random() * randomchar.length)
	}

	captcha.innerHTML = uniquechar;
}


function printmsg() {
	const user_input = document.getElementById("submit").value;

  if (user_input == captcha.innerHTML)
  {
		window.open('pages/home.php', '_self').focus();
  }
  
  else
  {
    captcha.style.border = '2px solid red';
		document.getElementById("key").innerHTML = "! Not matched";
		generate();
	}
}

function hoverIn() {

  $(this).find(eObj).css({ transform : 'scale(4)', opacity : 0 })
  $(this).find(nObj).css({ transform: 'scale(1)', opacity : 1 })
  $(this).find(aObj).css({ transform: 'scale(1)', opacity : 1 })
    
}

function hoverOut() {

  $(this).find(eObj).css({ transform : 'scale(1)', opacity : 1 })
  $(this).find(nObj).css({ transform: 'scale(0.5)', opacity : 0 })
  $(this).find(aObj).css({ transform: 'scale(0.2)', opacity : 0 })
}
