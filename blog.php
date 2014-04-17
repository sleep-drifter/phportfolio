<!DOCTYPE html>
<html lang="en"><head><?php include 'header.php'; ?>
  </head>

  <body id="top">
<?php include 'header_nav.php'; ?>

  <!-- 

///////////////////////////////////
//////    Page Description    ///////////////////////////////////
///////////////////////////////////

 -->

<div class="container" style="margin-bottom:40px;">
    <div class="row" style="margin-bottom:40px;">

      <div class="col-sm-8 col-sm-offset-2 regular_text" style="font-size:16px;">
        
            <p id="blog-header">As my work increasingly revolves around digital media, I find even more value in manually recording visual ideas. The best part about drawing is filling up an entire sketchbook with pictures, doodles, and notes. Looking back on my sketches allows me to revisit concepts and rearrange them with a fresh perspective. Sketchbooks are a vital component of my design process and my online sketchbook provides a space to share my thoughts, procedures, art, and other jiberish that shape my artistic identity.</p> 


     

       <?
$xml = simplexml_load_file('http://mattwujek.tumblr.com/api/read?type=post&start=0&num=8');
$posts = $xml->xpath("/tumblr/posts/post[@type='regular']");

foreach($posts as $post) {?>
<?echo '<article class="blog-roll">';?>
<?echo '<h1 class="post-title">'.$post->{'regular-title'}.'</h1>';?>
<?echo '<h2 class="date">'.date("F jS, Y",strtotime($post['date'])).'</h2>';?>
<?echo $post->{'regular-body'};?>
<?echo '</article>';?>

<?}?>
       
      </div>
    </div> <!-- /end row -->
</div> <!-- /end container -->

<!-- 

///////////////////////////////////
//////   Portfolio   ///////////////////////////////////
///////////////////////////////////

 -->

<?php include 'portfolio.php'; ?>



<?php include 'footer.php'; ?>

  </div> <!-- /end container -->

   

   
  <?php include 'scripts.php'; ?>
  
  

</body></html>