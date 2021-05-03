<?php

namespace Asti\Weather;

use asti\Api\WeatherApiController;
use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleController.
 */
class WeatherApiControllerTest extends TestCase
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
        $this->controller = new WeatherApiController();
        $this->controller->setDI($this->di);
    }

    /**
     * Test the route "index".
     */

    public function testWeatherActionPost() {
        $request = $this->di->get("request");
        $request->setPost("ipCheck", "172.217.14.196");
        $request->setPost("type", "Prognos");
        $resForecast = $this->controller->WeatherActionPost();
        $this->assertArrayHasKey("CurrentTemp", $resForecast[0][0]);
        $request->setPost("ipCheck", "172.217.14.196");
        $request->setPost("type", "Äldre data");
        $resForecast = $this->controller->WeatherActionPost();
        $this->assertArrayHasKey("CurrentTemp1", $resForecast[0][0]);
    }
}
