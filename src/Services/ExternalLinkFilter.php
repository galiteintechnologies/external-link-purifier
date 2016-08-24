<?php

namespace ExternalLinkPurifier\src\Services;

class ExternalLinkFilter {

    /**
     * 
     * @param string $content
     * @param string $domain    //Keep links of this domain remove others
     * 
     * @return string
     */
    public static function removeWebLinks($content, $domain) {
        if (!empty($content)) {
            if(!empty($domain)) {                
                $pattern = '#<a [^>]*\bhref=([\'"])http.?://((?!$domain)[^\'"])+\1 *>.*?</a>#i';
                $filteredString = preg_replace($pattern, '', $content);
            } else {
                $filteredString = preg_replace('#<a.*?>.*?</a>#i', '', $content);
            }
            
            return $filteredString;
        }        
    }
}
