<?php

namespace Asti\Weather;

use Anax\DI\DIFactoryConfig;
use Anax\Request\Request;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleController.
 */
class WeatherServiceTest extends TestCase
{

    protected $di;

    protected $model;

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
        $this->model = new WeatherServiceMock();
    }


    public function testWeatherRes()
    {
        $res = $this->model->curlWeatherApi(47.6015, 122.3304);
        $this->assertEquals("5.21", $res[0]["CurrentTemp"]);
    }
}
