<!doctype html>
<html lang="en">
    <head>
        <base href="/">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="files/system/svg/react.svg" type="image/png" sizes="20x20">
        <link rel="stylesheet" href="/public/css/main.css">
        <link rel="stylesheet" href="/public/css/main-md.css">
        <link rel="stylesheet" href="/public/css/bootstrap.min.css">
        <script src="/public/js/jquery-3.5.1.min.js"></script>
        <title><?php echo REQUEST(); ?></title>
    </head>
    <body id="body">
        <div id="wrapper">
            <nav class="navbar fixed-bottom navbar-expand-md">
                <a class="navbar-brand">
                    <img src="files/system/svg/react.svg" class="nav-logo toggle_btn">
                </a>
                <ul class="navbar-nav mx-auto">
                     <li> 
                        <a href="/"> 
                            <img src="files/system/svg/github.svg">
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="wrap">
                <div class="main_content">
                    <div class="inner_content">
                        <div class="sidebar">
                            <div class="cat" id="category">
                                <ul class="cat-btn-ul">
                                    <li class="cat-btn-li " data-toggle="collapse"
                                        data-target="#smscollapse">
                                        <div class="cat-word-box">
                                            <span>Creational</span>
                                        </div>
                                        <span class="cat-circle"></span>
                                    </li>
                                    <div id="smscollapse" class="collapse" aria-labelledby="headingone" data-parent="#category">
                                        <li class="cat-li">
                                            <a href="/creational/factorymethod/conceptual" class="cat-link">factory method</a>
                                            <span>factory method</span>
                                        </li>
                                    </div>
                                </ul>
                            </div>

                        </div>
                        <div class="page_content">
                            <?php if(REQUEST() !== '/'): ?>
                            <div class="table_content_head">
                                <ul class="nav nav-tab">
                                    <?php 
                                        $explode = explode('/', REQUEST());
                                        array_shift($explode);
                                        array_pop($explode);
                                        $implode = implode('/', $explode);

                                    foreach(['conceptual', 'real', 'test'] as $key): ?>
                                    <li>
                                        <a href="<?php echo $implode.'/'.$key; ?>">
                                            <span><?php echo $key; ?></span>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                            
                            <div class="table_content">
                                <?php echo $data['VIEW']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/public/js/bootstrap.min.js"></script>
        <script src="/public/js/main.js"></script>
    </body>
</html>
