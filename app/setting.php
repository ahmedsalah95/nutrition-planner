<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    
    protected $fillable = [
        'logo', 'email', 'filter_price_start','filter_price_end','phone','address','flicker_description','mailing_description',
        'get_in_touch_description','whats_app','facebook','skype','viber','youtube','live','google',
        'cities',
    ];
    
    
}
