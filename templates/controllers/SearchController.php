<?php

namespace Wireframe\Controller;

class SearchController extends \Wireframe\Controller {

    /**
     * Init method
     */
    public function init() {
        // Hide the aside column
        $this->view->hide_aside = true;
    }

    /**
     * Get search features
     *
     * @return string
     */
    public function search() {

        // Use SearchEngine for the site search feature.
        $searchEngine = $this->wire('modules')->get('SearchEngine');

        if ($this->wire('config')->ajax) {
            // Respond AJAX query with JSON search results.
            $this->view->setLayout(null)->setView('json');;
            header('Content-Type: application/json');
            return $searchEngine->renderResultsJSON();

        } else {

            // Render search form and results.
            return $searchEngine->render([
                'form',
                'results',
            ]);
        }
    }

}
