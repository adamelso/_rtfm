<?php

namespace spec\Rtfm\Dom;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HeaderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Rtfm\Dom\Header');
    }
}
