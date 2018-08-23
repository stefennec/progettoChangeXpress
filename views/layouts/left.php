<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    //Menù Calcolatrice
                    ['label' => 'Calcolatore Acquisto', 'url' => ['/transazioni/calculator']],                    
                    ['label' => 'Calcolatore Vendita', 'url' => ['/transazioni/calculator-vendita']],
                    //Form clienti
                    ['label' => 'Clienti', 'url' => ['/clienti/clienti']],

                    //Conteggio Cassaforte
                    ['label' => 'Conteggio Euro', 'url' => ['/cassaforte/euro']],
                    ['label' => 'Conteggio Dollari', 'url' => ['/cassaforte/dollari']],

                    [
                        'label' => 'Amministra',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [

                          ['label' => 'Tagli Euro', 'url' => ['/tagli-euro/index']],
                          ['label' => 'Valute', 'url' => ['/valute/index']],
                          ['label' => 'Uffici', 'url' => ['/uffici/index']],
                          ['label' => 'Banche', 'url' => ['/banche/index']],
                          ['label' => 'Transazioni', 'url' => ['/transazioni/index']],
                          ['label' => 'Movimenti', 'url' => ['/movimenti/index']],
                          ['label' => 'Tipologia Nazioni', 'url' => ['/tipologia-nazioni/index']],
                          ['label' => 'Enti', 'url' => ['/enti/index']],
                          ['label' => 'Documenti', 'url' => ['/documenti/index']],
                          ['label' => 'Operatori', 'url' => ['/operatori/index']],
                          ['label' => 'Supporti', 'url' => ['/supporti/index']],
                          ['label' => 'Registrazione Clienti', 'url' => ['/clienti/index']],
                          ['label' => 'Ammanchi', 'url' => ['/ammanchi/index']],
                          ['label' => 'Cassa1', 'url' => ['/cassa1/index']],
                          ['label' => 'Cassa2', 'url' => ['/cassa2/index']],
                          ['label' => 'Cassaforte', 'url' => ['/cassaforte/index']],
                          ['label' => 'Comuni', 'url' => ['/comuni/index']],
                          ['label' => 'Transazioni Cliente', 'url' => ['/transazioni-clienti/index']],

                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
