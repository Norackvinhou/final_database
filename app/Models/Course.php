<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
class Course extends Model
{
    use HasFactory;
    protected $fillable=['cid','cname','did'];

    public function department()
    {
        return $this->belongsTo(Department::class, 'did','did');
    }
}
