<?php if(REQUEST() !== '/' and REQUEST() !== '/home'): ?>
<div class="table_content_head">
    <ul class="nav nav-tab">
    <?php 
        $explode = explode('/', REQUEST());
        array_shift($explode);
        array_pop($explode);
        $implode = implode('/', $explode);
        $url = refactoring_guru(strtolower($explode[1]));

        foreach(['conceptual', 'real', 'test'] as $key): ?>
        <li>
            <a href="<?php echo $implode.'/'.$key; ?>">
                <span><?php echo $key; ?></span>
            </a>
        </li>
        <?php endforeach; ?>
        <li>
            <a href="<?php echo $implode; ?>/example">
                <span>example</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $implode; ?>/info">
                <span>info</span>
            </a>
        </li>
        <li>
            <a href="https://refactoring.guru/ru/design-patterns/<?php echo $url; ?>/php/example"
                target="_blank">
                <span>pattern</span>
            </a>
        </li>
    </ul>
</div>
<?php endif; ?>
