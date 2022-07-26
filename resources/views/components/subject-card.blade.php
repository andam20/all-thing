@props(['subjects'])
 <a href="/teacher/{{$subjects->id}}">
<x-card style="background-color: gainsboro" class="bg-gray-50 border border-gray-200 rounded p-6" > 
    <h1 align="center" style="font-size: 200%;font-weight: bold;margin-bottom: 2%">   </h1>

    <h1 align="center" style="font-size: 200%;font-weight: bold;margin-bottom: 2%">
       Dear <span style="color: red;text-transform: capitalize">{{$subjects->teacherName}}</span>  
       You Have These Subject For 
       department <span style="color: red;text-transform: capitalize">{{$subjects->department}}</span> 
       stage <span style="color: red;text-transform: capitalize">{{$subjects->stage}}</span>    
       group<span style="color: red;text-transform: capitalize">{{$subjects->group}}</span>
    </h1>
  

    <div align="end" style="text-align: center;margin-left: 40vw" class="flex">
  
        <div>
            <h3 class="text-3xl uppercase" style="font-weight: bold;">
                <a href="/teacher/{{$subjects->id}}" >{{$subjects->name}}</a>
            </h3>
            <a href="/teacher/{{$subjects->id}}" >
            <div  class="text-lg mt-4 rounded text-center" style="background-color: #5E5CBA;color: white;width: 200px">
                Stage: {{$subjects->stage}}
            </div>
        </a>
        </div>
 
    
 
    </div>

</x-card>
</a>
