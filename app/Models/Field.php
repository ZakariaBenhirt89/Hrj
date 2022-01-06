<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    protected $table = 'field';
    protected $fillable = [
        'id',
        'form_id',
        'type',
        'data',
    ];
  public function forms(){
      return $this->belongsTo(Form::class , 'form_id');
  }
}
