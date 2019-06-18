<?php

namespace Spaceduck\Pages\Models;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title', 'body', 'published'
    ];
}
