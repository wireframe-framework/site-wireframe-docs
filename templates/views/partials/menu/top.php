<?php namespace ProcessWire; ?>
<nav class="menu menu--top" aria-label="Main navigation">
    <ul class="menu__list">
        <?php foreach ($home->and($home->children) as $item): ?>
            <li class="menu__list-item">
                <?php if ($page->id === $item->id || $item->id !== $home->id && $page->parents->has($item)): ?>
                    <a class="menu__item menu__item--current" href="<?= $item->url ?>" tabindex="0" aria-label="Current page: <?= $item->title ?>">
                        <?= $item->title ?>
                    </a>
                <?php else: ?>
                    <a class="menu__item" href="<?= $item->url ?>">
                        <?= $item->title ?>
                    </a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
