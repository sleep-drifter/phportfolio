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
          <h1>Graphics Center</h1>
            <p>I was asked to create a new website for my job at the Graphics Center of USF. The goal was to promote our new work and optimize the site for mobile view. I used Twitter's boilerplate, Bootstrap 3, to quickly iterate design concepts and deploy the site in a timely manner.</p>
            <p>You can <a href="http://usf.usfca.edu/graphics_center/" target="_blank">view the website here</a>.</p>
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
            <span  data-src="img/gc/gc_landing_400.jpg" ></span>
            <span  data-src="img/gc/gc_landing_620.jpg"     data-media="(min-width: 768px)" ></span>
            <span  data-src="img/gc/gc_landing_620.jpg"      data-media="(min-width: 992px)" ></span>
            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
            <noscript>
                <img src="img/gc/gc_landing_620.jpg" class="img-responsive" alt="Picture of Website Spread">
            </noscript>
        </span>
    </figure>
    
  </div> <!-- /end row -->

  <div class="row">
    <figure class="col-sm-12">
        <span data-picture data-alt="Picture of Website Spread" data-class="img-responsive">
            <span  data-src="img/gc/gc_portfolio_400.jpg" ></span>
            <span  data-src="img/gc/gc_portfolio_620.jpg"     data-media="(min-width: 768px)" ></span>
            <span  data-src="img/gc/gc_portfolio_620.jpg"      data-media="(min-width: 992px)" ></span>
            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
            <noscript>
                <img src="img/gc/gc_contact_620.jpg" class="img-responsive" alt="Picture of Website Spread">
            </noscript>
        </span>
    </figure>
  </div><!-- /end row -->
<div class="row">
    <figure class="col-sm-12">
        <span data-picture data-alt="Picture of Website Spread" data-class="img-responsive">
            <span  data-src="img/gc/gc_contact_400.jpg" ></span>
            <span  data-src="img/gc/gc_contact_620.jpg"     data-media="(min-width: 768px)" ></span>
            <span  data-src="img/gc/gc_contact_620.jpg"      data-media="(min-width: 992px)" ></span>
            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
            <noscript>
                <img src="img/gc/gc_contact_620.jpg" class="img-responsive" alt="Picture of Website Spread">
            </noscript>
        </span>
    </figure>
    
  </div> <!-- /end row -->

 
    <img src="img/gc/gc_animation.gif" class="img-responsive" style="padding:50px 0; text-align:center; width: 600px;">

</div> <!-- /end container -->

<?php include 'portfolio.php'; ?>

<?php include 'footer.php'; ?>

  </div> <!-- /end container -->

   

   
  <?php include 'scripts.php'; ?>
  
  

</body></html>