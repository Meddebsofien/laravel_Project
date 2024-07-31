<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'currencies';
    protected $fillable =['id','name', 'code', 'symbol', 'symbol_first', 'decimal_mark', 'thousand_separator', 'icon'];
}
