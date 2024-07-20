<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ZoomMettingController extends Controller
{
    public function zoomMettingView()
    {
        try{

            return view('web.zoom-meeting.view');

        }catch(\Exception $exception){

            return;
        }
    }


    public function zoomMettingList()
    {
        try{

            return view('web.zoom-meeting.schedule_view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function zoomSpecialClass()
    {
        try{

            return view('web.zoom-meeting.special-class');

        }catch(\Exception $exception){

            return;
        }
    }



    public function analysingReport()
    {
        try{

            return view('web.zoom-meeting.analysing-report');

        }catch(\Exception $exception){

            return;
        }
    }







}
