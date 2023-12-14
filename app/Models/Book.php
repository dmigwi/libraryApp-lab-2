<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Isbn;
use App\Models\Loan;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'year', 'publication_place', 'pages', 'price',
        ];

    public function isbn()
    {
        return $this->hasOne('App\Models\Isbn');
    }

    public function loans()
    {
        return $this->hasMany('App\Models\Loan');
    }

    public function authors()
    {
        return $this->belongsToMany('App\Models\Author');
    }
}
