<?php

namespace App\Helpers;
use Carbon\Carbon;

class DateFormatter{
    public static function format($date){
        return Carbon::parse($date)->toFormattedDateString();
    }
}