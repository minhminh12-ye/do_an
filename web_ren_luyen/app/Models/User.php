<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Role;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    public function trainingPrograms()
    {
        return $this->hasMany(TrainingProgram::class, 'user_id');
    }

    public function studentTrainingPrograms()
    {
        return $this->hasMany(StudentTrainingProgram::class, 'student_id');
    }

    public function trainingScores()
    {
        return $this->hasMany(TrainingScore::class, 'student_id');
    }


}
