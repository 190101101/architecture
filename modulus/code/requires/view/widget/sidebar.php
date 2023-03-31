<div class="sidebar">
    <div class="cat" id="category">
        <ul class="cat-btn-ul">
            <li class="cat-btn-li 
            <?php if(url_exploder() == 'creational'): ?>
                active
            <?php endif; ?>" data-toggle="collapse"
                data-target="#creational">
                <div class="cat-word-box">
                    <span>Creational</span>
                </div>
                <span class="cat-circle"></span>
            </li>
            <div id="creational" 
            <?php if(url_exploder() != 'creational'): ?>
                class="collapse" 
            <?php endif; ?>
            aria-labelledby="headingone" data-parent="#category">
                <li class="cat-li
                <?php if(url_exploder(1) == 'factorymethod'): ?> 
                    active
                <?php endif; ?>">
                    <a href="/creational/factorymethod/conceptual" class="cat-link">Factory Method</a>
                    <span>factory method</span>
                </li>
                <li class="cat-li 
                <?php if(url_exploder(1) == 'abstractfactory'): ?> 
                    active
                <?php endif; ?>">
                    <a href="/creational/abstractfactory/conceptual" class="cat-link">Abstract Factory</a>
                    <span>abstract factory</span>
                </li>
                <li class="cat-li 
                <?php if(url_exploder(1) == 'prototype'): ?> 
                    active
                <?php endif; ?>">
                    <a href="/creational/prototype/conceptual" class="cat-link">Prototype</a>
                    <span>prototype</span>
                </li>
                <li class="cat-li 
                <?php if(url_exploder(1) == 'singleton'): ?> 
                    active
                <?php endif; ?>">
                    <a href="/creational/singleton/conceptual" class="cat-link">Singleton</a>
                    <span>singleton</span>
                </li>
            </div>
        </ul>
    </div>
</div>