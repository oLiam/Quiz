<?php


class QuizController extends BaseController{

    protected $layout = "layouts.master";

    public function getCreate() {

        return View::make('quizzes/create');
    }

    public function postCreate() {
        $quiz = new Quiz;
        $quiz->quizname = Input::get('quizname');
        $quiz->save();

        return Redirect::to('quizzes/edit');
    }


    public function showQuizzes() {
        $quizzes = DB::table('quizzes')->select('quizname')->get();

    }
}