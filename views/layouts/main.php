<?php
/* @var $this \yii\web\View */
/* @var $content string */
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
  <?php $this->beginBody() ?>
  <header class="site-header">
    <div class="wrapper site-header__wrapper">
      <span class="brand textBrand">MOVIE</span>
      <nav class="nav">
        <button class="nav__toggle" aria-expanded="false" type="button">
          menu
        </button>
        <ul class="nav__wrapper">
          <li class="nav__item"><?= Html::a('Home', ['movies/home']) ?></li>
          <li class="nav__item"><?= Html::a('Add', ['movies/student']) ?></li>
          <li class="nav__item"><?= Html::a('ABout') ?></li>
          <li class="nav__item"><?= Html::a('Logout') ?></li>
        </ul>
      </nav>
    </div>
  </header>
  </header>
  <main role="main" class="flex-shrink-0">
    <div class="container">
      <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
      ]) ?>
      <?= Alert::widget() ?>
      <?= $content ?>
    </div>
  </main>
  <div class="footerc">
    <div class="footerr">
      <div class="footer-menu">
        <p>Welcome to visit our website Movie</p>
      </div>
    </div>
    <div class="sub-footer">
      <div class="copyright-text">
        <p>Copyright &copy; 2021 - Designed by: Hilal </p>
      </div>
    </div>
  </div>
  <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>