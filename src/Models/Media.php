<?php
namespace Moh3n\LaravelMedia\Models;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $casts = [
        'files' => 'json'
    ];
}