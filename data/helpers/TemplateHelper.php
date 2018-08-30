<?php
/**
 * 
 */
class TemplateHelper {
    const TEMPLATE_DIRECTORY = 'views';

    public static function createTemplate(String $templateName, stdClass $values) {
        $header = file_get_contents(self::TEMPLATE_DIRECTORY . '/layouts/header.html');
        $emptyTemplate = file_get_contents(self::TEMPLATE_DIRECTORY . '/' . $templateName . '.html');
        $footer = file_get_contents(self::TEMPLATE_DIRECTORY . '/layouts/footer.html');
        $defaultTemplate = file_get_contents(self::TEMPLATE_DIRECTORY . '/default.html');
        $result = $header . $emptyTemplate . $footer;
        if !$values return 
        foreach ($values as $key => $value) {
            //If the key is found inside the template, we replace special char by values
            if(strpos($result, '%%'.strtoupper($key).'%%')) {
                $result = str_replace('%%'.strtoupper($key).'%%', $value, $result);
            }
        }
        return $result;
    }
}