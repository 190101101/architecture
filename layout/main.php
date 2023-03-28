<?php $main = new core\controller; ?>
<!doctype html>
<html lang="en">
    <head>
        <?php $main->view('code', 'requires', 'main/meta'); ?>
        <?php $main->view('code', 'requires', 'main/css'); ?>
    </head>
    <body id="body">
        <div id="wrapper">
            <?php $main->view('code', 'requires', 'widget/navbar'); ?>

            <div class="wrap">
                <div class="main_content">
                    <div class="inner_content">
                        <?php $main->view('code', 'requires', 'widget/sidebar'); ?>

                        <div class="page_content">
                            <?php $main->view('code', 'requires', 'widget/pane'); ?>
                            <div class="table_content">
                                <?php echo $data['VIEW']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $main->view('code', 'requires', 'main/js'); ?>
    </body>
</html>
