
<x-layout>



    <x-card >


<div class="card-header" style="background-color: blueviolet;color:white">
   </div>
  <div  class="card-body">
      <table id="datatablesSimple">
          
          <tbody>
             @foreach ($subjects as $subject)
            @if ($subject->department=="software"&&$subject->stage=="one")

            <x-subject-card style="background-color: grey;margin:12%" align="center" :subjects="$subject"/>   
            <h1 style="margin: 2%"></h1>   
            @endif
            @endforeach
          
          </tbody>
      </table>
  </div>

<hr style="width: 100%;height: 4px;color:grey;border:solid grey 1px;background-color: grey" class="rounded">

  <div  class="card-body">
    <table id="datatablesSimple">
       
        <tbody>
       
           @foreach ($subjects as $subject)
          @if ($subject->department=="software"&&$subject->stage=="two")

          <x-subject-card style="background-color: grey" :subjects="$subject"/>    
          <h1 style="margin: 2%"></h1>  

          @endif
          @endforeach
        </tbody>
    </table>
</div>



<hr style="width: 100%;height: 4px;color:grey;border:solid grey 1px;background-color: grey" class="rounded">


<div   class="card-body">
    <table id="datatablesSimple">
    
        <tbody>
              @foreach ($subjects as $subject)
            @if ($subject->department=="software"&&$subject->stage=="three")
            <x-subject-card  style="background-color: grey" :subjects="$subject"/>    
            <h1 style="margin: 2%"></h1>  
            @endif
             
          
            @endforeach
        </tbody>
    </table>
</div>


<hr style="width: 100%;height: 4px;color:grey;border:solid grey 1px;background-color: grey" class="rounded">



<div  class="card-body rounded">

    <table id="datatablesSimple">
        <tbody>
            @foreach ($subjects as $subject)
            @if ($subject->department=="software"&&$subject->stage=="four")

            <x-subject-card style="background-color: grey" :subjects="$subject"/>  
            <h1 style="margin: 2%"></h1>  
            @endif

           

 
       
         

            @endforeach
         </tbody>
    </table>

</div>
<hr style="width: 100%;height: 4px;color:grey;border:solid grey 1px;background-color: grey" class="rounded">










    </x-card>
</x-layout>