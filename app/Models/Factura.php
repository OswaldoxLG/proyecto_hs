<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';
    protected $primaryKey = 'id';
    protected $fillable = ['fecha_factura', 'cliente', 'monto'];
}
