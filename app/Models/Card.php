<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $CardID
 */
class Card extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'card';
    protected $fillable=['CardID','CardStatus'];
}
