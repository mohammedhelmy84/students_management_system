<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $primary_key = 'id';
    protected $fillable = ['enrollment_id', 'paid_date', 'mount'];

    public function enrollment() {
        return $this->belongsTo(Enrollment::class);
    }
}





