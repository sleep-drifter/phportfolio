<!DOCTYPE html>
<html lang="en"><head><?php include 'header.php'; ?>
  </head>

  <body id="top">
<?php include 'header_nav.php'; ?>

  <!-- 

///////////////////////////////////
//////    Project Description    ///////////////////////////////////
///////////////////////////////////

 -->

<div class="container">
    <div class="row">

      <div class="col-sm-8 col-sm-offset-2 regular_text">
          <h1>Futurist Manifesto</h1>
            <p>This website explores the Futurist Artist Manifesto, authored by  Italian poet Filippo Tommaso Marinetti, in a non-linear typographical interpretation.  <a href="http://instructian.com/">Ian Pollock</a>, design professor at University of San Francisco, assigned this project to sharpen our web-font and css animation skills. I created wireframes, mock-ups, and coded the website using jQuery, Bootstrap, and Typekit. The final deliverables were presented and critiqued in my web design class during the fall of 2013. </p>

            <p>You can <a href="futurism/index.html" target="_blank">view my project here</a>.</p>
            </p>
      </div>
    </div> <!-- /end row -->
</div> <!-- /end container -->

<!-- 

///////////////////////////////////
//////   Pictures   ///////////////////////////////////
///////////////////////////////////

 -->
<div class="container" id="project_pics">

  <div class="row">
    <figure class="col-sm-12">
        <span data-picture data-alt="Picture of Website Spread" data-class="img-responsive">
            <span  data-src="img/futurism/home_sm.jpg" ></span>
            <span  data-src="img/futurism/home_lg.jpg"     data-media="(min-width: 768px)" ></span>
            <span  data-src="img/futurism/home_lg.jpg"      data-media="(min-width: 992px)" ></span>
            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
            <noscript>
                <img src="img/futurism/home_lg.jpg" class="img-responsive" alt="Picture of Website Spread">
            </noscript>
        </span>
    </figure>
  </div><!-- /end row -->


    <img src="img/futurism/animate_energy.gif" class="img-responsive" style="padding:50px 0; text-align:center; width: 600px;">
    <img src="img/futurism/home_animated.gif" class="img-responsive" style="padding:50px 0; text-align:center; width: 600px;">

</div> <!-- /end container -->



<?php include 'portfolio.php'; ?>



<?php include 'footer.php'; ?>

  </div> <!-- /end container -->

   

   
  <?php include 'scripts.php'; ?>
  
  

</body></html>