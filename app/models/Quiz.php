<?php

class Quiz extends Eloquent {

    public static $rules = array(
        'quizname'=>'required|alpha|unique:quizzes|min:2'
    );
}