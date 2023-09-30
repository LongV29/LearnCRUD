<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListsinhVien extends Model
{
    use HasFactory;
    protected $fillable =[
        'FullName',
        'MaSv',
        'Phone',
        'Sex',
        'Address',
        'Birthday',
    ];
}
