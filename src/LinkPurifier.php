<?php

/*
 * This file is part of the External Link Purifier Package
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ExternalLinkPurifier;

use Symfony\Component\Yaml\Yaml;
use ExternalLinkPurifier\src\Services\ExternalLinkFilter;

class LinkPurifier {

    private $pathToYml;

    public function __construct($pathToYml = '') {

        if (!empty($pathToYml)) {
            $this->pathToYml = $pathToYml;
        } else {
            $this->pathToYml = __DIR__ . "/../Resources/config/config.yml";
        }
    }

    /**
     * @param string $content
     * @param string $domain
     * @param string $purify
     * 
     * @return string
     */
    public function Purify($content, $domain = null, $purify = false) {
        
        $configArray = Yaml::parse(file_get_contents($this->pathToYml));
        
        if (true === $purify || true === $configArray['external_link']['purify'])
        {
            $content = ExternalLinkFilter::removeWebLinks($content, $domain);
        }
        
        return $content;
    }
    
}
