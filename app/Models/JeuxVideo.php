<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JeuxVideo extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'jeux_videos';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'description', 'console_id'];

    public function console()
    {
        return $this->belongsTo(Console::class);
        // Mon jeux video est attaché a UNE et UNE SEULE CONSOLE !
    }





}
