<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    use HasFactory;
     public static function ReligionOptions()
    {
        return [
            'Buddhism' => 'Buddhism',
            'Christianity' => 'Christianity',
            'Hinduism' => 'Hinduism',
            'Islam' => 'Islam',
            'Jainism' => 'Jainism',
            'Sikhism' => 'Sikhism',
            // it more regligion
            'Agnosticism' => 'Agnosticism',
            'Atheism' => 'Atheism',
            'Baháʼí Faith' => 'Baháʼí Faith',
            'Bahaism' => 'Bahaism',
            'Buddhism' => 'Buddhism',
            'Cao Dai' => 'Cao Dai',
            'Other' => 'Other',
            
        ];
    }
}