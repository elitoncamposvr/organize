<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename',
        'file_slug',
        'company_id',
        'folder_archive_id',
        'description',
        'user_id',
    ];
}
