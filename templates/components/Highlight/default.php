<?php namespace ProcessWire; ?>
<div class="highlights__item">
    <?php if ($icon): ?>
        <i class="highlights__icon <?= $icon ?>" aria-hidden="true"></i>
    <?php endif; ?>
    <h2 class="highlights__headline"><?= $title ?></h2>
    <?= $summary ?>
</div>
