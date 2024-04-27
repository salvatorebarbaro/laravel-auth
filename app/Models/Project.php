<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    // inserisco le propietà che mi serviranno per riempire i miei campi del form per la validazione
    protected $fillable = [
        'title',
        'description',
        'img_path',
    ];
}
