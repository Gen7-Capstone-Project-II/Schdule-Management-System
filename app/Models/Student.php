<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;
use App\Models\User;
use App\Models\Generation;
use App\Models\Major;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_name',
        'l_name',
        'student_id',
        'gender',
        'dob',
        'user_id',
        'generation_id',
        'group_id',
        'major_id',
    ];

    // Define relationships
    public function generation()
    {
        return $this->belongsTo(Generation::class, 'generation_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    // Add any other relationships if needed

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
