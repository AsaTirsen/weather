<?php

namespace Asti\Weather;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleController.
 */
class WeatherRequestControllerTest extends TestCase
{
    protected $di;
    /**
     * Prepare before each test.
     */
    protected function setUp()
    {
        global $di;

        // Setup di
        $this->di = new DIFactoryConfig();
        $this->di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Use a different cache dir for unit test
        $this->di->get("cache")->setPath(ANAX_INSTALL_PATH . "/test/cache");

        // View helpers uses the global $di so it needs its value
        $di = $this->di;

        // Setup the controller
        $this->controller = new WeatherRequestController();
        $this->controller->setDI($this->di);
    }

    /**
     * Test the route "index".
     */

    public function testIndexAction()
    {
        $request = $this->di->get("request");
        $this->di->set("request", $request);
        $page = $this->controller->indexAction();
        $this->assertIsObject($page);
    }
}
