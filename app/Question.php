<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = [
        'question',
    ];

    protected $table = 'questions';

    /**
     * Get the answers of the question
     */
    public function answers() {
        return $this->hasMany('App\Answer');
    }
}
