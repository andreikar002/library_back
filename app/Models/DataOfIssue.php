<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOfIssue extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'author_id', 'gener_id', 'shelf_id', 'start_date', 'end_date'];
}
