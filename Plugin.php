<?php namespace Xeor\Sitemap;

use System\Classes\PluginBase;

/**
 * Sitemap Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * @var array Plugin dependencies
     */
    public $require = ['RainLab.Sitemap'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'xeor.sitemap::lang.plugin.name',
            'description' => 'xeor.sitemap::lang.plugin.description',
            'author' => 'Sozonov Alexey',
            'icon' => 'icon-sitemap',
            'homepage'    => 'https://github.com/sozonovalexey/oc-sitemap-plugin'
        ];
    }
}
