<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingProgram extends Model
{
    use HasFactory;

    protected $table = 'training_programs';

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'start_date',
        'end_date',
    ];

    // Monitor tạo chương trình
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
