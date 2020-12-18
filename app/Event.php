<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class Event extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'datetime'];

    public static function isValidDate($date) {
    	$testDate = DateTime::createFromFormat('Y-m-d', $date);
    	return $testDate && $testDate->format('Y-m-d') == $date;
    }

    public static function isValidDateTime($datetime) {
    	$testDate = DateTime::createFromFormat('Y-m-d H:i:s', $datetime);
    	return $testDate && $testDate->format('Y-m-d H:i:s') == $datetime;
    }
}
