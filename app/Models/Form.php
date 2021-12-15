<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table = 'form';
    protected $fillable = [
        'id',
        'identifiant',
        'editor',
        'locked',
        'locked_by',
        'center_form',
        'created_at'
    ];
    public function fields(){
        return $this->hasMany(Field::class , 'form_id');
    }
}
