<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    /**+
     * Los atributos que se pueden asignar masivamente.
     *
     * @var array
     */
    protected $fillable = ['especie', 'pais', 'poblacio', 'amenaca', 'estat'];

    public $timestamps = false;
}
