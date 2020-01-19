<?php


namespace App\Http\Controllers\Api;

use DatePeriod;
use DateTime;
use DateInterval;
use Illuminate\Http\Request;

class GrapthDataController
{
    public function getData(Request $request)
    {
        $monthsFromNow = $request->get('monthsFromNow');

        return response()->json(
            [
                'grapthData' => $this->populateData(),
                'dates'=> $this->populateDateRange($monthsFromNow)
            ], 200
        );
    }

    private function populateData()
    {
        return ['45','45','45','345','34','3','4'];
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
