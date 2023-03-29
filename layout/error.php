<?php $main = new core\controller; ?>
<!doctype html>
<html lang="en">
    <head>
        <?php $main->view('main', 'requires/view', 'main/meta'); ?>
        <?php $main->view('main', 'requires/view', 'main/css'); ?>
    </head>
    <body id="body">
        <div id="wrapper">
            <div class="wrap">
                <?php echo $data['VIEW']; ?>
            </div>
        </div>
        <?php $main->view('main', 'requires/view', 'main/js'); ?>
    </body>
</html>