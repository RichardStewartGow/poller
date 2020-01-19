<?php


namespace App\Http\Controllers\Api;


class GrapthDataController
{
    public function populateData()
    {
        return response()->json(['45','45','45','345','34','3','4']);
    }

    public function dateRange()
    {
        return response()->json(
            ['data'=>
                [
                 '1/11/2000', '2/11/2000', '3/11/2000',
                '4/11/2000', '5/11/2000', '6/11/2000', '7/11/2000',
                '8/11/2000', '9/11/2000', '10/11/2000', '11/11/2000',
                '12/11/2000', '1/11/2001', '2/11/2001', '3/11/2001',
                '4/11/2001', '5/11/2001', '6/11/2001'
                ]
            ]
        );
    }
}
