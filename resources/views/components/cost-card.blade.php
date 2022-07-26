@props(['costing'])
 <x-card  style="margin: 0%" class="bg-gray border rounded p-6" > 


     <h1 style="font-size: 200%;font-weight: bold" align="center">Item Name: <span style="color: red;text-transform: capitalize;font-size: 100%;font-weight: bold">{{$costing->item_name}}</span>  </h1>
    
    <h1 style="font-size: 200%;font-weight: bold" align="center">Description: <span style="color: red;text-transform: capitalize;font-size: 100%;font-weight: bold">{{$costing->desc}}</span>  </h1>
</x-card>