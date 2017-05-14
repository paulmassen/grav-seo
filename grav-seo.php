<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class GravSEOPlugin
 * @package Grav\Plugin
 */
class GravSEOPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
            'onGetPageBlueprints'  => ['onGetPageBlueprints', 0],
        ];
    }
    /**
     * Add page blueprints
     *
     * @param Event $event
     */
    public function onGetPageBlueprints(Event $event)
    {
        /** @var Types $types */
        $types = $event->types;
        $types->scanBlueprints('plugins://grav-seo/blueprints/');
    }
    /**
     * Initialize configuration
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
          $this->enable([
                'onTwigTemplatePaths'  => ['onTwigTemplatePaths', 0],

            ]);
            return;
        }
        $this->enable([
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
           // 'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ]);
    }
    /**
     * Add current directory to twig lookup paths.
     */
    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }
    /**
     * Set needed variables to display cart.
     */

}