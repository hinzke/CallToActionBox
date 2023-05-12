<?php

// system/modules/calltoactionbox/src/Element/CallToActionBoxElement.php
namespace CallToActionBox\Element;

use Contao\ContentElement;

class CallToActionBoxElement extends ContentElement
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_calltoactionbox';

    /**
     * Generate content element
     */
    protected function compile()
    {
        // Set variables and generate output
        $this->Template->headline = $this->headline;
        $this->Template->text = $this->text;
        $this->Template->linkTitle = $this->linkTitle;
        $this->Template->linkHref = $this->linkHref;
        $this->Template->linkTarget = $this->linkTarget;
    }
}
