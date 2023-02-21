<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public static function CityOptions()
    {
        return [
            // myanmar mandalay region city
            'MM-07' => 'Mandalay',
            'MM-08' => 'Sagaing',
            'MM-09' => 'Tanintharyi',
            'MM-10' => 'Bago',
            'MM-11' => 'Shan',
            'MM-12' => 'Ayeyarwady',
            'MM-13' => 'Magway',
            'MM-14' => 'Mon',
            'MM-15' => 'Rakhine',
            'MM-16' => 'Yangon',
            'MM-17' => 'Kachin',
            'MM-18' => 'Kayah',
            'MM-19' => 'Kayin',
            'MM-20' => 'Chin',
            // myanmar yangon region city
            'MM-01' => 'Yangon',
            'MM-02' => 'Bago',
            'MM-03' => 'Magway',
            'MM-04' => 'Mandalay',
            'MM-05' => 'Tanintharyi',
            'MM-06' => 'Ayeyarwady',
            // myanmar ayeyarwady region city
            'MM-21' => 'Ayeyarwady',
            'MM-22' => 'Bago',
            'MM-23' => 'Chin',
            'MM-24' => 'Kachin',
            'MM-25' => 'Kayah',
            'MM-26' => 'Kayin',
            'MM-27' => 'Magway',
            'MM-28' => 'Mandalay',
            'MM-29' => 'Mon',
            'MM-30' => 'Rakhine',
            'MM-31' => 'Sagaing',
            'MM-32' => 'Shan',
            'MM-33' => 'Tanintharyi',
            'MM-34' => 'Yangon',
            // myanmar bago region city
            'MM-35' => 'Bago',
            'MM-36' => 'Ayeyarwady',
            'MM-37' => 'Chin',
            'MM-38' => 'Kachin',
            'MM-39' => 'Kayah',
            'MM-40' => 'Kayin',
            'MM-41' => 'Magway',
            'MM-42' => 'Mandalay',
            'MM-43' => 'Mon',
            'MM-44' => 'Rakhine',
            'MM-45' => 'Sagaing',
            'MM-46' => 'Shan',
            'MM-47' => 'Tanintharyi',
            'MM-48' => 'Yangon',
            // myanmar chin region city
            'MM-49' => 'Chin',
            'MM-50' => 'Ayeyarwady',
            'MM-51' => 'Bago',
            'MM-52' => 'Kachin',
            'MM-53' => 'Kayah',
            'MM-54' => 'Kayin',
            'MM-55' => 'Magway',
            'MM-56' => 'Mandalay',
            'MM-57' => 'Mon',
            'MM-58' => 'Rakhine',
            'MM-59' => 'Sagaing',
            'MM-60' => 'Shan',
            'MM-61' => 'Tanintharyi',
            'MM-62' => 'Yangon',
            // myanmar kachin region city
            'MM-63' => 'Kachin',
            'MM-64' => 'Ayeyarwady',
            'MM-65' => 'Bago',
            'MM-66' => 'Chin',
            'MM-67' => 'Kayah',
            'MM-68' => 'Kayin',
            'MM-69' => 'Magway',
            'MM-70' => 'Mandalay',
            'MM-71' => 'Mon',
            'MM-72' => 'Rakhine',
            'MM-73' => 'Sagaing',
            'MM-74' => 'Shan',
            'MM-75' => 'Tanintharyi',
            'MM-76' => 'Yangon',
            // myanmar kayah region city
            'MM-77' => 'Kayah',
            'MM-78' => 'Ayeyarwady',
            'MM-79' => 'Bago',
            'MM-80' => 'Chin',
            'MM-81' => 'Kachin',
            'MM-82' => 'Kayin',
            'MM-83' => 'Magway',
            'MM-84' => 'Mandalay',
            'MM-85' => 'Mon',
            'MM-86' => 'Rakhine',
            'MM-87' => 'Sagaing',
            'MM-88' => 'Shan',
            'MM-89' => 'Tanintharyi',
            'MM-90' => 'Yangon',
           

        ];
    }
}