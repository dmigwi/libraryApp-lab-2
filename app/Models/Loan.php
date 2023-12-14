<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id', 'client', 'loaned_on', 'estimated_on', 'returned_on',
    ];

    public function book()
    {
        return $this->belongsTo('App\Models\Book');
    }
}
