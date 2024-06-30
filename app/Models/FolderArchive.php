<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolderArchive extends Model
{
    use HasFactory;

    protected $fillable = [
        'folder_name',
        'description',
        'company_id',
    ];
}
