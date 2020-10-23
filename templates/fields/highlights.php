<?php namespace ProcessWire; ?>
<?php if ($page->highlights->count): ?>
    <div class="highlights">
        <?php foreach ($page->highlights as $highlight): ?>
            <?= Wireframe::component('Highlight', ['item' => $highlight]) ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
