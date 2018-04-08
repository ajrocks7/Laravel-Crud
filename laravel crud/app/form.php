<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
use App\user;
class form extends User
{
    public static function form_submit($entry)
    {
        return DB::table('crud')->insert($entry);
    }
}
