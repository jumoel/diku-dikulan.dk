function jsonp(val) {
  (function($){
    var ticketnum = val.substring(1, val.length - 2);
    var classtitle = "black"
    if (ticketnum > 25) {
      classtitle = "green";
    } else if (ticketnum > 10) {
      classtitle = "yellow"
    } else if (ticketnum > 0) {
      classtitle = "red";
    }

    $("#ticketstatus").attr("class", classtitle + " roundfive");

    $("header button").attr("class", classtitle);

    $("#numoftickets h1").text(ticketnum);
    
  })(jQuery)
}
