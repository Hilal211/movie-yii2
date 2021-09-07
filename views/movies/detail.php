<?php
use app\assets\AppAsset;
use yii\helpers\Url;
AppAsset::register($this);
?>
<div class="single-movie">
  <div class="section-heading">
    <div class="line-dec"></div>
    <h1>Movie Details</h1>
  </div>
  <div class="cointenerMovie">
    <div class="left-content">
      <div class="image">
       <img src="<?php echo Url::home(true).'image/' . $movie->image; ?>">
      </div>
    </div>
    <div class="right-content">
      <h4 class="nameMovie"><?php echo $movie->name; ?></h4>
      <p><?php echo $movie->description; ?></p>
      <hr />
      <p> <span>Author: </span><?php echo $movie->author; ?></p>
      <p> <span>Directed by: </span><?php echo $movie->director; ?></p>
      <p> <span>Released: </span><?php echo $movie->year; ?></p>
    </div>
  </div>
</div>