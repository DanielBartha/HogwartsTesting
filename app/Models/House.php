<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
        'points'
    ];

    public function house() {
        return$this->hasMany(User::class);
    }

    public function status() {
        if($this->points < 100) {
            return 'low';
        }
        if($this->points > 100 and $this->points < 250) {
            return 'medium';
        }
        if($this->points >= 250) {
            return 'high';
        }
    }
}
