<?php
/**
 * Helper Text
 * @author    Igor Chepurnoy <Chepurnoy@zfort.com>
 * @link      http://www.zfort.com/
 * @copyright Copyright &copy; 2000-2013 Zfort Group
 * @license   http://www.zfort.com/terms-of-use
 */
class TruncateText {
      public static function truncate($text,$lengthText)
  {
    $len = strlen($text);
    $maxLength = $len - $lengthText;
    if ($len <= $maxLength) {
        return $text;  
    }
    else {
        $value = substr($text, $maxLength) . '...';
        return $value;
    }
      
  }
}
