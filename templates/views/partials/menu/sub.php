<?php namespace ProcessWire; ?>

<?= renderMenu('Subnavigation', 'collapsed,menu_class_modifier=sub', $page, $page->rootParent->id === $home->id ? $page : $page->rootParent) ?>
