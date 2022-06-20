<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'consoles';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'marque'];


    public function jeux_videos()
    {
        return $this->hasMany(JeuxVideo::class);
    }
}
