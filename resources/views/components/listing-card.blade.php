@props(['listing'])
<style>
    #comment:hover {
    color: #5E5CBA; 
}
</style>
 <x-card>
    <div  style="height: 122px" class="flex">
        <a href="/listings/{{$listing->id}}">
            <img
            class="hidden w-48 mr-6 md:block"
            src="doctorimage/{{$listing->logo}}"
            alt="" />

            <img src="{{ asset($listing->logo) }}" width= '100' height='100' class="img img-responsive" />
 
        </a>
        <div>
            <h3 class="text-3xl uppercase" style="font-weight: bold;">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>

            <x-listing-tags :tagsCsv="$listing->tags" />

            <div class="text-lg mt-4 rounded text-center" style="padding-right: 13px;background-color: #5E5CBA;color: white">
                <i class="fa-solid fa-location-dot" style="padding-right: 13px;padding-left: 9px;color:white"></i>{{$listing->location}}
            </div>
        </div>
    </div>
</x-card>