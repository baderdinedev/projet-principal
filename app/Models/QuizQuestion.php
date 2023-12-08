<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    use HasFactory;

    protected $primaryKey = 'question_id';

    protected $fillable = [
        'question_text',
        'answer_boolean',
        'explanation_text',
        'difficulty_level',
        'category',
        'active'
    ];

    public function userResponses()
    {
        return $this->hasMany(UserResponse::class);
    }
}
