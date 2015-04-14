<?php

namespace spec\Rtfm;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Rtfm\Dom\Document;
use Rtfm\Dom\Header;

class RtfFileSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Rtfm\RtfFile');
    }

    function it_exposes_the_header(Header $header)
    {
        $this->setHeader($header);

        $this->getHeader()->shouldReturn($header);
    }

    function it_exposes_the_document(Document $document)
    {
        $this->setDocument($document);

        $this->getDocument()->shouldReturn($document);
    }
}
