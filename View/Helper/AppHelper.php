<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class AppHelper extends Helper {
    public function nbsp_prepositions($t) {
    	$t = preg_replace('/\b([svkzo]) \b/', '\1&nbsp;', $t);
    	return $t;
    }

    public function replace_elements($content) {
        if (strpos($content, '[[') !== false) {
            // replace element tags
            // [[element:name]]
            $matches = array();
            preg_match_all('/\[\[element:(.*?)\]\]/', $content, $matches, PREG_SET_ORDER);
            foreach ($matches as $match) {
                $element      = $match[1];
                $placeholder  = $match[0];
                $content = str_replace($placeholder, $this->_View->element($element), $content);
            }
        }
        return $content;
    }
}
