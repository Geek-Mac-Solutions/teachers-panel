@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">VIDEO RECORDINGS - JANUARY
         </h1>
         
      </div>
   </div>




</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">





       <div class="col-12">

        <div class="row justify-content-end">

<div class="col-lg-9">
<h2 class="font-16 fw-bolder text-danger pt-1 pb-3">TOPIC FORMAT
</h2>
    <p class="font-13 fw-500 text-dark   pb-1"> 📍 Subject - Grade - Unit 00 - Lesson Name - Part 00 - English Medium - 0000.00.00 (Date)

    </p>
    <p class="font-13 fw-500 text-dark   pb-3"> 📍  විෂය - ශ්‍රේණිය - 00 පාඩම - පාඩමේ නම - 00 කොටස - සිංහල මාධ්‍ය - 0000.00.00 (දිනය) 
    </p>
    <p class="font-13 fw-500 text-dark   pb-1"> 📍 Subject - Grade - Unit 00 - Lesson Name - Part 00 - English Medium - 0000.00.00 (Date)

    </p>
    <p class="font-13 fw-500 text-dark   pb-3"> 📍 විෂය - ශ්‍රේණිය - වාරය - පළාත/කලාපය/පාසල/ආදර්ශ ප්‍රශ්න පත්‍රය - වර්ෂය - 00 කොටස - සිංහල මාධ්‍ය (දිනය) 
    </p>
    <p class="font-13 fw-500 text-dark   pb-1"> 📍 Subject - Grade - Unit 00 - Lesson Name - Part 00 - English Medium - 0000.00.00 (Date)

    </p>
    <p class="font-13 fw-500 text-dark   pb-3"> 📍  විෂය - ශ්‍රේණිය - 00 පාඩම - පාඩමේ නම (පුණරීක්ෂණය) - 00 කොටස - සිංහල මාධ්‍ය - 0000.00.00 (දිනය)
    </p>
</div>

            <div class="col-lg-3 text-end">
                <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
               <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
            </div>

          </div>




          <div class="table-responsive">
            <table id="videoRecTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <tr>
                     <th>DATE</th>
                     <th>DAY</th>
                     <th>GRADE</th>
                     <th>SUBJECT</th>
                     <th>TOPIC</th>
                     <th>LINK</th>
                     <th>STATUS</th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr   >
                      
                     <td>01.01.2024</td>
                     <td>MONDAY</td>
                     <td>GRADE 6</td>
                     <td>SCIENCE</td>
                     <td>TOPIC</td>
                     <td >LINK
                     </td>
                     <td>
                        <span class="   text-uppercase font-13 text-white rounded-pill py-1 px-5 bg-primary fw-500 align-items-center 
                         ">SUBMIT</span>  
                     </td>
                  </tr>
                  <tr   >
                      
                    <td>01.01.2024</td>
                    <td>MONDAY</td>
                    <td>GRADE 6</td>
                    <td>SCIENCE</td>
                    <td>TOPIC</td>
                    <td >LINK
                    </td>
                    <td>
                       <span class="   text-uppercase font-13 text-white rounded-pill py-1 px-5 bg-success fw-500 align-items-center 
                        ">Done</span>  
                    </td>
                 </tr>
               </tbody>
            </table>
         </div>






    </div>



   </div>
</div>
@endsection

