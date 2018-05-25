<?php
/**
 * Notify plugin for Craft CMS 3.x
 *
 * A simple plugin that sends emails after a new entry is added
 *
 * @link      http://webtraders.nl
 * @copyright Copyright (c) 2018 Webtraders
 */

namespace webtraders\notify\services;

use webtraders\notify\Notify;

use Craft;
use craft\base\Component;

/**
 * NotifyService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Webtraders
 * @package   Notify
 * @since     1.0.0.
 */
class NotifyService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Notify::$plugin->notifyService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
