<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $table = 'medicines';
    protected $fillable = [
        'title',
        'unit_price',
        'stock',
        'dosage',
        'strength',
        'generic',
        'company',
        'status',
    ];
    const isInActive = 0;
    const isActive = 1;
    const isTrash = 2;
}
