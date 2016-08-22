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
                $regex = '/<a (.*)<\/a>/isU';
                $result = array();
                preg_match_all($regex,$content,$result);
                $filter_regex = '/<a (.*)>(.*)<\/a>/isU';
                foreach($result[0] as $rs)
                {
                    if($rs !== $domain) {                        
                        $text = preg_replace($filter_regex,'$2',$rs);
                        $str = str_replace($rs,$text,$str);   
                    }                 
                }
            } else {
                $filteredString = preg_replace('#<a.*?>.*?</a>#i', '', $content);
            }
            
            return $filteredString;
        }        
    }
}
