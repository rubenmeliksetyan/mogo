<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function store(Billable  $billable){
        DB::transaction(function () use ($billable){
            $costomer = $billable->createCoustomer('token');



            $user = User::register('paffpaffpasss');

        });
    }
}
