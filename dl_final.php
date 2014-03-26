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
          <h1 style="text-transform:lowercase;">design.usfca</h1>
            <p>This website was the final project for Ian Pollock's digital literacy class at USF. The assignment called for a long scrolling website with animations and events triggered by javascript and JQuery events such as clicking, hovering, or scrolling. I decided to design a site that would inform users about the graphic design program at USF. I used copy for the course catalog and added a navigation sidebar that included a directory for the classes and "badges" for skills acquired during each course. In Visual Communication I, a 100-level design course, I made an animated illustration which emphasizes the importance of Creative Suite competency and encourages user interaction. Towards the end of the website, I put together a senior thesis generator that produces random project ideas for the last required class in the design program. </p>
            <p>You can <a href="final/index.html" target="_blank">view the website here</a>.</p>
            </p>
      </div>
    </div> <!-- /end row -->
</div> <!-- /end container -->

<!-- 

///////////////////////////////////
//////   Pictures   ///////////////////////////////////
///////////////////////////////////

 -->
<div class="container" style="text-align:center; margin-top:20px;">
   <div class="row">
    <figure class="col-sm-12">
        <span data-picture data-alt="Picture of Evoba Snapback Hat" data-class="img-responsive">
            <span  data-src="img/final/landing_400.jpg" ></span>
            <span  data-src="img/final/landing_620.jpg"     data-media="(min-width: 768px)" ></span>
            <span  data-src="img/final/landing_620.jpg"      data-media="(min-width: 992px)" ></span>
            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
            <noscript>
                <img src="img/final/landing_620.jpg" class="img-responsive" alt="Picture of Evoba Snapback Hat">
            </noscript>
        </span>
    </figure>
    </div> <!-- End Row -->

       <div class="row">
    <figure class="col-sm-12">
        <span data-picture data-alt="Picture of Evoba Snapback Hat" data-class="img-responsive">
            <span  data-src="img/final/ai_400.jpg" ></span>
            <span  data-src="img/final/ai_620.jpg"     data-media="(min-width: 768px)" ></span>
            <span  data-src="img/final/ai_620.jpg"      data-media="(min-width: 992px)" ></span>
            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
            <noscript>
                <img src="img/final/ai_620.jpg" class="img-responsive" alt="Picture of Evoba Snapback Hat">
            </noscript>
        </span>
    </figure>
    </div> <!-- End Row -->


   <div class="row">
    <figure class="col-sm-12">
        <span data-picture data-alt="Picture of Evoba Snapback Hat" data-class="img-responsive">
            <span  data-src="img/final/faculty_400.jpg" ></span>
            <span  data-src="img/final/faculty_620.jpg"     data-media="(min-width: 768px)" ></span>
            <span  data-src="img/final/faculty_620.jpg"      data-media="(min-width: 992px)" ></span>
            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
            <noscript>
                <img src="img/final/faculty_620.jpg" class="img-responsive" alt="Picture of Evoba Snapback Hat">
            </noscript>
        </span>
    </figure>
    </div> <!-- End Row -->
    </div>


 <!-- 

///////////////////////////////////
//////   Portfolio   ///////////////////////////////////
///////////////////////////////////

 -->



</div> <!-- /end container -->

<?php include 'portfolio.php'; ?>

<?php include 'footer.php'; ?>

  </div> <!-- /end container -->

   

   
  <?php include 'scripts.php'; ?>
  
  

</body></html>