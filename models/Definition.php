<?php namespace Xeor\Sitemap\Models;

use DOMDocument;
use RainLab\Sitemap\Models\Definition as RainLabDefinition;

/**
 * Definition Model
 */
class Definition extends RainLabDefinition
{

    public function generatePrettySitemap()
    {
        $xml = new DOMDocument;
        $xml->loadXML($this->generateSitemap());
        $xslt = $xml->createProcessingInstruction('xml-stylesheet', 'type="text/xsl" href="/plugins/xeor/sitemap/assets/xsl/sitemap.xsl"');
        $xml->insertBefore($xslt, $xml->firstChild);
        return $xml->saveXML();
    }
}