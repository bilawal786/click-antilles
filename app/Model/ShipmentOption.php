<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class ShipmentOption extends Model
{
    protected $table = 'shipment_options';
    protected $fillable = ['title','description','price','duration','location'];
}
