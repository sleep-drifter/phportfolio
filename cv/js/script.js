  $(window).ready(function() {

    var expanded = false;
    var button = $('#ref');
    var $accordion = $('#references');

    var accordionH = $('#accordion').innerHeight();

    $accordion.velocity({ height: 0 },{duration: 0, easing : "easeInSine", visibility: "hidden"});

    $('#ref').on('click', function(){
      if(expanded ===false){
        expanded = true;
        $accordion.velocity({ height: accordionH + 20 },{duration: 800, easing : "easeInSine", visibility: "visible"});
        button.empty();
        button.addClass('expanded');
        button.html('close');


      }else{
        expanded = false;
        $accordion.velocity({ height: 0 },{duration: 400, easing : "easeInSine", visibility: "visible"});
        button.empty();
        button.removeClass('expanded');
        button.html('References +');


      }
    });
  });
