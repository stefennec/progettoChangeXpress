<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],

            // Menu delle operazioni
            ['label' => 'Operazioni', 'url' => ['#'], 'items'=>[
              ['label' => 'Gestione Transazioni', 'url' => ['/transazioni/index']],
              ['label' => 'Gestione Clienti', 'url' => ['/clienti/index']],
              ['label' => 'Cambi', 'url' => ['/cambi/index']],
            ]
            ],

            //Menù dei movimenti
            ['label' => 'Movimenti', 'url' => ['#'], 'items'=>[
              ['label' => 'Gestione Movimenti', 'url' => ['/movimenti/index']],
            ]
            ],

            //Menu della gestione dati
            ['label' => 'Amministra', 'url' => ['#'], 'items'=>[
              ['label' => 'Imposta Tagli Euro', 'url' => ['/tagli-euro/index']],
              ['label' => 'Gestione Valute', 'url' => ['/valute/index']],
              ['label' => 'Uffici', 'url' => ['/uffici/index']],
              ['label' => 'Banche', 'url' => ['/banche/index']],
              ['label' => 'Area Cittadini', 'url' => ['/tipologia-nazioni/index']],
              ['label' => 'Autorità Documenti', 'url' => ['/enti/index']],
              ['label' => 'Documenti Validi', 'url' => ['/documenti/index']],
              ['label' => 'Operatori di Cassa', 'url' => ['/operatori/index']],
              ['label' => 'Supporti Valute', 'url' => ['/supporti/index']],
<<<<<<< HEAD
              ['label' => 'Calcolatore', 'url' => ['/cambi/calculator']],
=======
              ['label' => 'Calcolatore', 'url' => ['/site/calculator']],
              ['label' => 'Registrazione Clienti', 'url' => ['/site/clienti']],
>>>>>>> 8a9ecbf054bd2dce53364ca62222377cda6051c1

            ]
          ],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; ChangeXpress <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>