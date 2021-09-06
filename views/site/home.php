<?php use app\assets\AppAsset;
AppAsset::register($this);
use yii\helpers\Html;

?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<div id="test" class="jumbotron bg-cover text-white container">
        <div class="container py-5 text-center">
        </div>
</div>


<section class="section featured">
        <div class="title">
          <h1>Latest Movies</h1>
        </div>
      </section>

      <div class="product-center container">

      <?php if(count($movie)>0): ?>
  <?php foreach($movie as $mo): ?>
      <div class="product">
        <div class="product-header">
        <?php echo "<img src = 'http://localhost:8080/image/".$mo->image."' >"; ?>

         
        </div>
        <div class="product-footer">
            <h3><?php echo $mo->name; ?></h3>
          </a>
       
          <h4 class="price"><?php echo $mo->author; ?></h4>
          <?= Html::a('detail', ['detail', 'id' => $mo->id], ['class' => 'btn btn-primary']) ?>

        </div>


      </div>
      <?php endforeach; ?>
    <?php else: ?>
<p>no movies</p>
<?php endif; ?>

      </div>