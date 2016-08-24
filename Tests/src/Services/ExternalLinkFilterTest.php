<?php

namespace ExternalLinkPurifier\Tests\src\Services;

use ExternalLinkPurifier\src\Services\ExternalLinkFilter;

class ExternalLinkFilterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function removeWebLinksTest() 
    {
        $output = ExternalLinkFilter::removeWebLinks('Lorem Ipsum <a href="http://www.google.co.in" target="_blank">http://www.google.co.in</a> Lorem Ipsum');
        $expectedOutPut = 'Lorem Ipsum Lorem Ipsum';
        $this->assertEquals($expectedOutPut, $output);
    }

}
