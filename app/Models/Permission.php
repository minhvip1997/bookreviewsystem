<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = "permissions";
    public $timestamps = false;
    protected $fillable = [
        'name',
        'updated_at',
        'created_at',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class,'role_permission');
    }
    
}
