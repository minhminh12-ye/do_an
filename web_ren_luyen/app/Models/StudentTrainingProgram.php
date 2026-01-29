<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTrainingProgram extends Model
{
    use HasFactory;

    protected $table = 'student_training_programs';

    protected $fillable = [
        'student_id',
        'training_program_id',
        'status',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function trainingProgram()
    {
        return $this->belongsTo(TrainingProgram::class, 'training_program_id');
    }

    public function evidences()
    {
        return $this->hasMany(Evidence::class);
    }
}
