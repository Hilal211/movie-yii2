<?php
use yii\helpers\Url;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<div class="bg-cover">
  <div class="text-center">
  </div>
</div>
<section class="section">
  <div class="title">
    <h1>Latest Movies</h1>
  </div>
</section>
<div class="movie-center">
  <?php if (count($movie) > 0) : ?>
    <?php foreach ($movie as $mo) : ?>
      <a href='/movies/detail?id=<?php echo $mo->id ?>'>
        <div class='movie'>
          <div class='movie-header'>
            <img src="<?php echo Url::home(true).'image/' . $mo->image; ?>">
          </div>
          <div class='movie-footer'>
            <h3><?php echo $mo->name ?></h3>
            <h4 class='author'><?php echo $mo->author ?></h4>
          </div>
        </div>
      </a>
    <?php endforeach; ?>
  <?php else : ?>
    <p>no movies</p>
  <?php endif; ?>
</div>
