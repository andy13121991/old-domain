document.onreadystatechange = function () {

    if (document.readyState === 'complete') {
        // Page has finished loading
        $("#loading-container").hide();
    } else {
        // Page is still loading
        $("#loading-container").show();
    }
};
