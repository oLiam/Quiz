<?php


class QuizController extends BaseController{

    protected $layout = "layouts.master";

    public function getCreate() {
        return View::make('quizzes/create');
    }

    public function postCreate() {

        $validator = Validator::make(Input::all(), Quiz::$rules);

        if($validator->passes()) {
            $quiz = new Quiz;
            $quiz->quizname = Input::get('quizname');
            $quiz->save();
            return Redirect::to('quizzes')->with('message', 'Your quiz has been created!');
        }

        else {
            return Redirect::to('quizzes')->with('message', 'There has been a error occurred');
        }
    }


    public function getQuizzes() {
        $quizzes = DB::table('quizzes')->get(array('id', 'quizname'));

        return View::make('quizzes.quizzes')->with('quizzes', $quizzes);
    }

    public function postDelete($id) {
        $quiz = Quiz::find($id);
        $quiz->delete();

        return Redirect::to('quizzes');
    }

    public function getEdit() {
        return View::make('quizzes/edit');
    }
}