<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>

    <script src="js/picturefill.js"></script>
    <script type="text/javascript">


        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
                || location.hostname == this.hostname) {

                var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
               $('html,body').animate({
                   scrollTop: target.offset().top
               }, 1000);
               return false;
           }
       }
   });

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#top').fadeIn(500);
        });
    </script>
    <script type="text/javascript">

        var time;
        var bgImg = $('figure.jobsquare'),
        i = 0;

//This is to set the starting position

function animateImg () { 

  for ( var j = 1; j < 13; j++ ) {
    time = 500*(j);
    $(bgImg[i++]).animate({'opacity':1},time,animateImg);
    
}
}

animateImg();
</script>