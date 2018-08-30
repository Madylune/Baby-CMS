<?php
/**
 * 
 */
class ViewController {
    static public function home() {
        $page = new PageModel();
        echo TemplateHelper::createTemplate('home', $page->getOne('title', 'Home'));
    }
}