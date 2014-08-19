  $(window).ready(function() {

    var expanded = false;
    var button = $('#ref');

      $( "#accordion" ).accordion({
        active:false,
        autoHeight: false,            
        collapsible: true
      });

      $('#ref').on('click', function(){
          if(expanded ===false){
            expanded = true;
            button.empty();
            button.addClass('expanded');
            button.html('close');


          }else{
            expanded = false;
            button.empty();
            button.removeClass('expanded');
            button.html('References +');


          }
      });
    });
