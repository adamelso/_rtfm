<?php

namespace spec\Rtfm\Dom;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DocumentSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Rtfm\Dom\Document');
    }
}
