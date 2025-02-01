<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    /** @use HasFactory<\Database\Factories\ToursFactory> */
    use HasFactory;

    protected $primaryKey = 'Tour_Id';

    public function payments()
    {
        return $this->hasOne(Payments::class, 'Tour_Id' , 'Tour_Id');
    }
}
