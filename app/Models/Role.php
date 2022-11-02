<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\CollectionFind;

class Role extends Model
{
    use HasFactory;
    protected $table  = 'role';
    protected $fillable = [
        'RoleID',
        'RoleName'
    ];
}
