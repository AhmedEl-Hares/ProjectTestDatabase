<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentsFactory> */
    use HasFactory;

    protected $primaryKey = 'Payment_Id';

    public function tours()
    {
        return $this->belongsTo(Tours::class, 'Tour_Id' , 'Tour_Id');
    }
}
