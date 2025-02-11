<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'timezones';
    protected $fillable =['id','name'];
}
