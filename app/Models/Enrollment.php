<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Enrollment extends Model
{
    use HasFactory;
    protected $table = 'enrollments';
    protected $primary_key = 'id';
    protected $fillable = ['enroll_no', 'student_id', 'join_date', 'fee'];

    public function student() {
        return $this->belongsTo(Student::class);
    }
}





