<?php

namespace Asti\Weather;


/**
 * A sample controller to show how a controller class can be implemented.
 * The controller will be injected with $di if implementing the interface
 * ContainerInjectableInterface, like this sample class does.
 * The controller is mounted on a particular route and can then handle all
 * requests for that mount point.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class ApiDataProcessing
{

    public function loopThroughDate($dateArray): array
    {
        $newDateArray = [];
        forEach ($dateArray as $date) {
            $modifiedDate = date("Y-m-d", array_shift($date));
            array_push($newDateArray, $modifiedDate);
        }
        return $newDateArray;
    }
    public function loopThroughTemp($dateArray, $el1, $el2): array
    {
        $newTempArray = [];
        forEach ($dateArray as $temp) {
            $modTemp = $temp[$el1][$el2];
            array_push($newTempArray, substr($modTemp,0 ,5));
        }
        return $newTempArray;
    }
    public function loopThroughDesc($dateArray, $el1, $el2): array
    {
        $newDescArray = [];
        forEach ($dateArray as $desc) {
            $modDesc = $desc[$el1][0][$el2];
            array_push($newDescArray, $modDesc);
        }
        return $newDescArray;
    }
}
