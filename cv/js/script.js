  $(window).ready(function() {

    var expanded = false;
    var button = $('#ref');
    var refText = button.children('span');
    var $accordion = $('#references');

    var accordionH = $('#accordion').innerHeight();

    $accordion.velocity({ height: 0 },{duration: 0, easing : "easeInSine", visibility: "hidden"});

    $('#ref').on('click', function(){
      if(expanded ===false){
        expanded = true;
        button.velocity({top:20},{
          duration:300,
          easing: 'easeInCubic',
          begin: function(){
            refText.velocity({top:-20}, {
              duration:200,
              complete: function(){
                refText.empty();
                button.toggleClass('expanded');
                refText.html('close');

              }
              }).velocity('reverse', {duration:200});
          }
        })
        .velocity('reverse',{duration:300});

        $accordion.velocity({ height: accordionH },{
          duration: 800,
          easing : "easeInSine",
          visibility: "visible",
        });


      }else{
        expanded = false;
        $accordion.velocity({ height: 0 },{duration: 400, easing : "easeInSine", visibility: "visible"});
        button.velocity({top:-20},{
          duration:300,
          easing: 'easeInCubic',
          begin: function(){
            refText.velocity({top:20}, {
              duration:200,
              complete: function(){
                console.log('change text');
                refText.empty();
                button.toggleClass('expanded');
                refText.html('references &#43;');

              }
              }).velocity('reverse', {duration:200});
          }
        })
        .velocity('reverse',{duration:300});

      }
    });
  });
