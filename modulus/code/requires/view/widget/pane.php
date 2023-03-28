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