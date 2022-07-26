
<x-layout>



    <x-card>
        <header>
            <h1
            style="background-color: #5E5CBA;color:white;padding: 12px;margin-bottom: 12px;align-items: center;align-content: center;align-self: center"
                class="text-3xl text-center rounded font-bold my-6 uppercase">
                show your expenses here Here 
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($costs->isEmpty())
                @foreach($costs as $costing)
                             <x-card class="p-10 m-10" style="background-color: darkgray">       
                            
                                <h1 style="font-size: 150%;font-weight: bold" align="end"> <span style="text-transform: capitalize;font-size: 100%;font-weight: bold">{{$costing->created_at}}</span>  </h1>

                             
                             <x-cost-card :costing="$costing"/>
                                   
    <div align="center" class="text-lg mt-4 rounded text-center" style="background-color: #5E5CBA;color: white;width: 100%;align-content: center;padding:5px;font-weight: bold">
        <span align="end"> Price {{$costing->price}}</span>
     </div>   
                             </x-card>
                         
                
                 
@endforeach

@else
<tr class="border-gray-300">
    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
<div  class="d-flex d-flex align-self-center align-items-center align-items-center">
    <h1 align="center"  style="font-weight: bold;font-size: 33px" class="align-items-center">
        sorry</h1>
        
        <h1 align="center"  style="color: #5E5CBA;font-size: 33px;margin-top: 12px;text-transform: uppercase;font-weight: bold"> {{auth()->user()->name}}</h1> 
        <h1 align="center" style="font-weight: bold;font-size: 33px;margin-top: 12px"> have an expense and then you can watch edit it </h1>
</div>
    </td>
</tr>

@endunless
             
            </tbody>
        </table>
    </x-card>
 
  
    <h1 class="text-3xl font-bold mb-4 flex flex-col items-center justify-center text-center" style="color: white;background-color: #5E5CBA;padding: 12px;border-radius: 15px;margin-left: 12px;margin-right: 12px">
        <?php
    echo " your total price ";
     $count=0.0;
    foreach($costs as $costakan)
   
    $count=$costakan->price+$count;
    echo "\"". $count."\" IQD";
    ?>
    </h1>
    
              

       
       
</x-layout>