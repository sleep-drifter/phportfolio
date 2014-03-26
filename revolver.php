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
          <h1>Revolver Yoga</h1>
            <p style="text-align:center">This website was comissioned by Courtney Morgan, owner of Revolver Yoga.</p>
            <p style="text-align:center">You can <a target="_blank" href="http://revolveryoga.com/">view the site here</a>.</p>
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
            <span  data-src="img/revolver/home_sm.jpg" ></span>
            <span  data-src="img/revolver/home_lg.jpg"     data-media="(min-width: 768px)" ></span>
            <span  data-src="img/revolver/home_lg.jpg"      data-media="(min-width: 992px)" ></span>
            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
            <noscript>
                <img src="img/revolver/home_lg.jpg" class="img-responsive" alt="Picture of Website Spread">
            </noscript>
        </span>
    </figure>
    
  </div> <!-- /end row -->

 
    <img src="img/revolver/interaction.gif" class="img-responsive" style="padding:50px 0; text-align:center; width: 600px;">

</div> <!-- /end container -->



<?php include 'portfolio.php'; ?>



<?php include 'footer.php'; ?>

  </div> <!-- /end container -->

   

   
  <?php include 'scripts.php'; ?>
  
  

</body></html>