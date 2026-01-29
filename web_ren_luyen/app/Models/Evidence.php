<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    use HasFactory;

    protected $table = 'evidences';

    protected $fillable = [
        'student_training_program_id',
        'file_path',
        'file_type',
        'file_size',
        'description',
        'status',
        'program_result_id',
    ];

    public function studentTrainingProgram()
    {
        return $this->belongsTo(StudentTrainingProgram::class);
    }

    public function programResult()
    {
        return $this->belongsTo(ProgramResult::class);
    }
}
