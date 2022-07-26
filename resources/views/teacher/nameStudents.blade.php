 

<x-layout>


 
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>

     <x-card class="p-10">       
    
     <div style="background-color: red;margin: 13px;" class="rounded">
     <label align="center" style="background-color: red;color:white;font-size: 37px;margin-left:30%;font-weight: bold" class="rounded" for="">pick a date for Attendance:</label>
     <input align="center" type="date" style="background-color: brown;padding:6px;color:white;font-size: 30px;
     font-weight: bold" class="rounded">
     </div>
     
     <x-subject-card :subjects="$subjects"/>
              
     </x-card>
    
    </x-layout>
    <h1 style="font-size: 52px;font-weight: bold;margin: 23px">{{"List Of The Students"}} </h1>

    <x-listing-tags-student :tagsCsv="$subjects->nameStudents" />