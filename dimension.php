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
          <h1>Dimension</h1>
            <p>This was a project in <a href="http://instructian.com/">Ian Pollock's</a> Digital Literacy class at University of San Francisco. We were asked to curate a captivating gallery for a virtual exhibition.</p>
            <p>You can <a href="gallery/index.html" target="_blank">view the project here</a>.</p>
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
    <figure class="col-sm-6">
        <span data-picture data-alt="Picture of Website Spread" data-class="img-responsive">
            <span  data-src="img/dimension/main_sm.jpg" ></span>
            <span  data-src="img/dimension/main_lg.jpg"     data-media="(min-width: 768px)" ></span>
            <span  data-src="img/dimension/main_lg.jpg"      data-media="(min-width: 992px)" ></span>
            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
            <noscript>
                <img src="img/fimension/main_lg.jpg" class="img-responsive" alt="Picture of Website Spread">
            </noscript>
        </span>
    </figure>

    <figure class="col-sm-6">
        <span data-picture data-alt="Picture of Website Spread" data-class="img-responsive">
            <span  data-src="img/dimension/second_sm.jpg" ></span>
            <span  data-src="img/dimension/second_lg.jpg"     data-media="(min-width: 768px)" ></span>
            <span  data-src="img/dimension/second_lg.jpg"      data-media="(min-width: 992px)" ></span>
            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
            <noscript>
                <img src="img/dimension/second_lg.jpg" class="img-responsive" alt="Picture of Website Spread">
            </noscript>
        </span>
    </figure>
  </div> <!-- /end row -->
</div> <!-- /end container -->



<?php include 'portfolio.php'; ?>



<?php include 'footer.php'; ?>

  </div> <!-- /end container -->

   

   
  <?php include 'scripts.php'; ?>
  
  

</body></html>