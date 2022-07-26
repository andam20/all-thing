@props(['tagsCsv'])
{{-- Csv=>comma seperated value --}}

@php

$tags=explode(',',$tagsCsv);

@endphp

<ul class="flex m-3">

    <div class="card-body" style="width:100%">
        <table id="datatablesSimple" style="width:100%">
            <thead>
                <tr>

                    <th style="background-color:  #5E5CBA;font-size: 200%">Name</th>
                    <th style="background-color:  #5E5CBA;font-size: 200%">Attendance</th>
                    <th style="background-color:  #5E5CBA;font-size: 200%">Edit Name</th>

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th style="background-color: #5E5CBA;font-size: 200%">Name</th>
                    <th style="background-color:  #5E5CBA;font-size: 200%">Attendance</th>
                    <th style="background-color:  #5E5CBA;font-size: 200%">Edit Name</th>
                </tr>
            </tfoot>
            <tbody>
               

                @foreach ($tags as $tag)
                <tr align="center" style="background-color: azure;color:black;border-radius: 23px" class="rounded">
                    <td style="padding: 10px;border-width: 1px;font-size: 212%;font-weight: bold;text-transform: capitalize">{{$tag}}</td>
                    <td style="width: 12%;padding: 10px;border-width: 1px;"><input  checked style="width: 12vw;height: 7vh"  type="checkbox"></td>  
                   <td style="width:12%;height: 6%;padding: 10px;border-width: 1px;background-color: green"><a style="background-color: green;color:white;padding-right:8px;;padding:8px;border-radius: 8px" href="">Edit Name</a></td>
                                
                 </tr>
                @endforeach
            </tbody>
        </table>
     

        <input type="submit" name="submit"
         style="background-color: #5E5CBA;padding:10px;margin-top: 5%;font-weight: bold;width: 100%;font-size: 200%" class="rounded" id="">
    </div>
</ul>