<?php use app\assets\AppAsset;
AppAsset::register($this);
use yii\helpers\Html;


?>


<div class="single-product">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h1>Movie Details</h1>
              </div>
            </div>
            <div class="col-md-6">
              <div class="product-slider">
                <div id="slider" class="flexslider">
                <?php echo "<img src = 'http://localhost:8080/image/".$movie->image."' >"; ?>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="right-content">
                <h4 class="nameMovie"><?php echo $movie->name; ?></h4>
                <p><?php echo $movie->description; ?></p>
                <hr/>
                <p> <span>Author: </span><?php echo $movie->author; ?></p>
                <p> <span>Directed by: </span><?php echo $movie->director; ?></p>
                <p> <span>Released: </span><?php echo $movie->year; ?></p>

                <div class="down-content">
                  <div class="categories">
                    <h6>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>