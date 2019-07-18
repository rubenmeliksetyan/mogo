<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\LessonFilters;

class LessonsController extends Controller
{
    //
    public function index(LessonFilters $filters)
    {
        return Lesson::filer( $filters)->get();

//        $lesson = (new Lesson())->newQuery();
//
//        if ($request->exists('popular')) {
//            $lesson->orderBy('views', 'desc');
//        }
//        if ($request->has('difficulty')) {
//            $lesson->where('difficulty', $request->difficulty);
//        }
//        return $lesson->get();
    }

}
