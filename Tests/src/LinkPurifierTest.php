<?php

namespace ExternalLinkPurifier\Tests;

use ExternalLinkPurifier\LinkPurifier;

class LinkPurifierTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @test
     */
    public function linkPurifyTest()
    {
        $linkPurifier = new LinkPurifier('');
        $output = $linkPurifier->Purify('Lorem Ipsum <a href="http://www.google.co.in" target="_blank">http://www.google.co.in</a> lorem ipsum dummy text added for the testing purpose');        
        $expectedOutPut = 'Lorem Ipsum  lorem ipsum dummy text added for the testing purpose';
        $this->assertEquals($expectedOutPut, $output);
    }
    
    /**
     * @test
     */
    public function linkPurifyExceptDomainTest()
    {
        $linkPurifier = new LinkPurifier('');
        $output = $linkPurifier->Purify('Lorem Ipsum <a href="http://www.google.co.in" target="_blank">http://www.google.co.in</a> lorem ipsum dummy text added for the testing purpose by <a href="http://www.mywebsite.co.in">http://www.mywebsite.co.in</a>', 'mywebsite');        
        $expectedOutPut = 'Lorem Ipsum  lorem ipsum dummy text added for the testing purpose by <a href="http://www.mywebsite.co.in">http://www.mywebsite.co.in</a>';
        $this->assertEquals($expectedOutPut, $output);
    }
}
