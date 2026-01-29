<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingScore extends Model
{
    use HasFactory;

    protected $table = 'training_scores';

    protected $fillable = [
        'student_id',
        'semester',
        'total_score',
        'approved_by',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
