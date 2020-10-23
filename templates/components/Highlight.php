<?php

namespace Wireframe\Component;

/**
 * Highlight component
 *
 * This component is used to render card style highlights for certain pages.
 */
class Highlight extends \Wireframe\Component {

    /**
     * Constructor
     *
     * @param \ProcessWire\RepeaterPage $item
     */
    public function __construct(\ProcessWire\RepeaterPage $item) {
        $this->icon = $item->icon ? (strpos($item->icon, ' ') ? '' : 'fas fa-') . $item->icon : '';
        $this->title = $item->title;
        $this->summary = $item->summary;
    }

}
