<?php

namespace Rtfm;

use Rtfm\Dom\Document;
use Rtfm\Dom\Header;

/**
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
class RtfFile
{
    /**
     * @var Header
     */
    private $header;

    /**
     * @var Document
     */
    private $document;

    /**
     * @return Header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param Header $header
     */
    public function setHeader(Header $header)
    {
        $this->header = $header;
    }

    /**
     * @return Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param Document $document
     */
    public function setDocument(Document $document)
    {
        $this->document = $document;
    }
}
