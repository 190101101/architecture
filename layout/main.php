<?php $main = new core\controller; ?>
<!doctype html>
<html lang="en">
    <head>
        <?php $main->view('code', 'requires/view', 'main/meta'); ?>
        <?php $main->view('code', 'requires/view', 'main/css'); ?>
    </head>
    <body id="body">
        <div id="wrapper">
            <?php $main->view('code', 'requires/view', 'widget/navbar'); ?>

            <div class="wrap">
                <div class="main_content">
                    <div class="inner_content">
                        <?php $main->view('code', 'requires/view', 'widget/sidebar'); ?>

                        <div class="page_content">
                            <?php $main->view('code', 'requires/view', 'widget/pane'); ?>
                            <div class="table_content">
                                <?php echo $data['VIEW']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $main->view('code', 'requires/view', 'main/js'); ?>
    </body>
</html>
