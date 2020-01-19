<?php


namespace App\Http\Controllers\Api;

use DatePeriod;
use DateTime;
use DateInterval;

class GrapthDataController
{
    public function populateData()
    {
        return response()->json(['data' => ['45','45','45','345','34','3','4']], 200);
    }

    public function dateRange($monthsFromNow)
    {
        return response()->json(
            ['data'=> $this->populateDateRange($monthsFromNow)
            ], 200
        );
    }

    private function populateDateRange($monthsFromNow)
    {
        $output = [];
        $datePeroid = new DatePeriod(
            new DateTime(),
            DateInterval::createFromDateString('-1 month'),
            $monthsFromNow
        );

        foreach ($datePeroid as $key => $value) {
            $output[] = $value->format('Y/m/d');
        }

        return $output;
    }
}
