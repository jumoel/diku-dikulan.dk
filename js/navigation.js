$(document).ready(function() {

  // Sets the active navigation tab based on the current url
  var pathname = window.location.pathname;

  $("a").filter(function() {
                    return $(this).attr("href") == pathname;
                }).parent().addClass("active");
});
