<?php namespace ProcessWire;

/**
 * Wireframe bootstrap file
 *
 * This file is responsible for bootstrapping Wireframe and rendering the page. We define some basic
 * site settings here, and adjust Wireframe behaviour further with hooks placed in /site/ready.php.
 *
 * @version 0.2.2
 * @author Teppo Koivula <teppo@wireframe-framework.com>
 * @license Mozilla Public License v2.0 http://mozilla.org/MPL/2.0/
 */

// include site config settings
require_once 'lib/config.php';

// init Wireframe
$wireframe = $modules->get('Wireframe');
$wireframe->init();

// render the page
$search_page = $pages->get('template=search');
echo $wireframe->render([
    'site_name' => 'Lorem Ipsum',
    'lang' => 'en',
    'home' => $pages->get(1),
    'menu' => $modules->get('MarkupMenu'),
    'search_form' => $search_page->id ? $modules->get('SearchEngine')->renderForm([
        'form_action' => $search_page->url,
        'form_id' => 'se-masthead-form',
        'form_input_id' => 'se-masthead-form-input',
        'classes' => [
            'form' => 'search-form &--masthead',
        ],
    ]) : null,
    'body_class' => implode(array_filter([
        'template-' . ($wire->view->getTemplate() ?: $page->template),
        $wire->view->getTemplate() != $page->template ? 'delegated-template-' . $page->template : '',
        $wire->view->hide_aside || $page->template == 'home' ? 'wide' : '',
    ]), ' '),
]);
