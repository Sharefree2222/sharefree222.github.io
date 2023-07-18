$(document).ready(function(){
    $("#showNormal").click(function(){
        $("#normalContent").show();
        $("#vipContent").hide();
    });

    $("#showVip").click(function(){
        $("#normalContent").hide();
        $("#vipContent").show();
    });

    $("#timeout-button").click(function(){
        setTimeout(function(){ 
            window.location.href = "/"; 
        }, 3600000); 
    });
});

$(document).ready(function() {
  var modalShown = localStorage.getItem('modalShown');
  if (!modalShown) {
    $('#exampleModal').modal('show');
    localStorage.setItem('modalShown', 'yes');
  }
});
