<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itemIn extends Model
{
    use HasFactory;
    
    protected $table = 'material_in_stock';
    protected $fillable= ['pallet_no','material_no','picking_qty','stat','locate','trucking_id'];


}
