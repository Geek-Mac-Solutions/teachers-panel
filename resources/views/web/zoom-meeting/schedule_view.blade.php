@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">LINK ZOOM MEETING
         </h1>
         @php
         $currentDateTime = Carbon::now('Asia/Colombo');
         @endphp
         <p class="font-20 fw-500 text-purple">{{ $currentDateTime->format('d.m.Y | l | h.i A') }}
         </p>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3">
        <a href="{{ route('web.zoom-metting.special-class')}}" class=" font-12 text-white rounded-pill py-2 px-5 bg-primary fw-500 align-items-center   hvr-shrink"><i class="fa-solid fa-plus"></i> Special Extra Class</a>

     </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight justify-content-center">
      <div class="col-lg-4 col-sm-6  mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center schedule-card">
            <p class="font-24 fw-bolder text-purple text-center pb-3">6.00 - 8.00 PM
            </p>
            <form action="">
            <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder"> STILL NOT SCHEDULED
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder text-dark">  Grade 9
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder text-dark">  Science Theory | English Medium |
               Abhiman Sir
               </span>
            </p>
            <div class="row g-3 align-items-center pt-3">
               <div class="col-3">
                  <label   class="col-form-label text-start font-13 fw-bold text-purple">Zoom Link</label>
               </div>
               <div class="col-9">
                  <input type="text"   class="form-control font-14  fw-500 rounded-3 border-dark"  >
               </div>
            </div>
            <div class="row g-3 align-items-center pt-3">
               <div class="col-3">
                  <label   class="col-form-label text-start font-13 fw-bold text-purple">Password</label>
               </div>
               <div class="col-9">
                  <input type="text"   class="form-control font-14  fw-500 rounded-3 border-dark"  >
               </div>
            </div>
            <div class="row g-3 align-items-center pt-3">
               <div class="col-3 px-lg-0">
                  <label   class="col-form-label text-start font-13 fw-bold text-purple">Special Note</label>
               </div>
               <div class="col-9">
                  <textarea class="form-control font-14  fw-500 rounded-3 border-dark" rows="5"></textarea>
               </div>
            </div>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white">
                  <a href=" " class="  text-uppercase font-14 text-white rounded-pill py-2 px-5 bg-primary fw-500 align-items-center   hvr-shrink">SUBMIT</a>
               </div>
            </div>
        </form>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6  mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center schedule-card">
            <p class="font-24 fw-bolder text-purple text-center pb-3">6.00 - 8.00 PM
            </p>
            <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-danger"> SCHEDULED
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder text-dark">  Grade 9
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder text-dark">  Science Theory | English Medium |
               Abhiman Sir
               </span>
            </p>
            <div class="row g-3 align-items-center pt-3">
               <div class="col-3">
                  <label   class="col-form-label text-start font-13 fw-bold text-purple">Zoom Link</label>
               </div>
               <div class="col-9">
                  <input type="text"   class="form-control font-14  fw-500 rounded-3 border-dark"  >
               </div>
            </div>
            <div class="row g-3 align-items-center pt-3">
               <div class="col-3">
                  <label   class="col-form-label text-start font-13 fw-bold text-purple">Password</label>
               </div>
               <div class="col-9">
                  <input type="text"   class="form-control font-14  fw-500 rounded-3 border-dark"  >
               </div>
            </div>
            <div class="row g-3 align-items-center pt-3">
               <div class="col-3 px-lg-0">
                  <label   class="col-form-label text-start font-13 fw-bold text-purple">Special Note</label>
               </div>
               <div class="col-9">
                  <textarea class="form-control font-14  fw-500 rounded-3 border-dark" rows="5"></textarea>
               </div>
            </div>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white">
                  <a href=" " class="  text-uppercase font-14 text-white rounded-pill py-2 px-5 bg-danger fw-500 align-items-center   hvr-shrink">FINISH THE CLASS</a>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6  mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center schedule-card">
            <p class="font-24 fw-bolder text-purple text-center pb-3">6.00 - 8.00 PM
            </p>

            <form action="">
            <div class="row g-3 align-items-center pt-3 pb-2">
               <div class="col-3  text-start px-1">
                  <label   class="col-form-label font-13 fw-bold text-purple">Class Status </label>
               </div>
               <div class="col-9">
                  <select class="form-select font-14  fw-500 rounded-3 border-dark" aria-label="Default select example">
                     <option value="1">Holiday</option>
                     <option value="2">Postponed</option>
                     <option value="3">Three</option>
                  </select>
               </div>
            </div>
            <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder text-dark">  Grade 9
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder text-dark">  Science Theory | English Medium |
               Abhiman Sir
               </span>
            </p>
            <div class="row g-3 align-items-center pt-3">
               <div class="col-3">
                  <label   class="col-form-label text-start font-13 fw-bold text-purple">Zoom Link</label>
               </div>
               <div class="col-9">
                  <input type="text"   class="form-control font-14  fw-500 rounded-3 border-dark"  >
               </div>
            </div>
            <div class="row g-3 align-items-center pt-3">
               <div class="col-3">
                  <label   class="col-form-label text-start font-13 fw-bold text-purple">Password</label>
               </div>
               <div class="col-9">
                  <input type="text"   class="form-control font-14  fw-500 rounded-3 border-dark"  >
               </div>
            </div>
            <div class="row g-3 align-items-center pt-3">
               <div class="col-3 px-lg-0">
                  <label   class="col-form-label text-start font-13 fw-bold text-purple">Special Note</label>
               </div>
               <div class="col-9">
                  <textarea class="form-control font-14  fw-500 rounded-3 border-dark" rows="5"></textarea>
               </div>
            </div>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white">
                  <a href=" " class="  text-uppercase font-14 text-white rounded-pill py-2 px-5 bg-primary fw-500 align-items-center   hvr-shrink">FINISH THE CLASS</a>
               </div>
            </div>
        </form>


         </div>
      </div>
   </div>
</div>
@endsection
