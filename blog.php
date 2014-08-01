<!DOCTYPE html>
<html lang="en"><head><?php include 'header.php'; ?>
<style>

#blog{
  color:#999;
  border-color: #999;
}

#blog:hover {
  color:#999;
  border-color: #999; 
  opacity: 1;
  cursor:default;
}

</style>
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