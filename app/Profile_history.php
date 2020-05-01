<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_history extends Model
{
    protected $guarded = array('id');
    
    public static $rulus = array(
        'profile_id' => 'required',
        'edited_at' => 'required',   
    );
    
    
}
