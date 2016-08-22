<?php

namespace ExternalLinkPurifier\Tests;

use ExternalLinkPurifier\LinkPurifier;

class LinkPurifierTest extends \PHPUnit_Framework_TestCase{
    
    /**
     * @test
     */
    public function PurifyTest()
    {
        $linkPurifier = new LinkPurifier('');
        $output = $linkPurifier->Purify('Lorem Ipsum <a href="http://www.google.co.in" target="_blank">http://www.google.co.in</a> lorem ipsum dummy text added for the testing purpose by <a href="mailto:test@gmail.com">test@gmail.com</a>');        
        $expectedOutPut = 'Lorem Ipsum  lorem ipsum dummy text added for the testing purpose by ';
        $this->assertEquals($expectedOutPut, $output);
    }
}
