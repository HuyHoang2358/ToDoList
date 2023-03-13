<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriorityModel extends Model
{
    protected $table = 'priority';
    protected $fillable = ['name'];
    public function todos(): \Illuminate\Database\Eloquent\Relations\HasMany{
        return $this->hasMany(ToDoModel::class);
    }
}
