<?php
/**
 *
 */
class ViewController
{
    static public function home() {
        ConnectionHelper::checkConnectedUser();
        $page = new PageModel();
        echo TemplateHelper::createTemplate('home', $page->getOne('title', 'Home'));
    }
    static public function contact() {
        $page = new PageModel();
        echo TemplateHelper::createTemplate('contact', $page->getOne('title', 'Contact'));
    }
    static public function panda() {
        $page = new PageModel();
        echo TemplateHelper::createTemplate('panda', $page->getOne('title', 'Page sur les pandas'));
    }
    static public function cupcake() {
        $page = new PageModel();
        echo TemplateHelper::createTemplate('cupcake', $page->getOne('title', 'Page sur les cupcakes'));
    }
    static public function kpop() {
        $page = new PageModel();
        echo TemplateHelper::createTemplate('kpop', $page->getOne('title', 'Page sur la kpop'));
    }
}