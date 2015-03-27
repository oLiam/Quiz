<?php

class Quiz extends Eloquent {

    public static $rules = array(
        'quizname'=>'required|unique:quizzes|min:2'
    );
}