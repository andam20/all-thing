<x-layout>
 
<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
<x-card class="p-10">
    <div
        class="flex flex-col items-center justify-center text-center">
        <img
            class="rounded w-half mr-6 mb-2"
            src="{{ asset($listing->logo) }}"
            alt=""
        />
        <h6 style="margin-right: 25%" class=" flex w-full flex-col items-end justify-end text-end text-3xl uppercase mb-2">{{$listing->created_at}}</h6>
        


        <h3 class="text-7xl uppercase mb-2">{{$listing->title}}</h3>
        <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
     
<x-listing-tags :tagsCsv="$listing->tags" />

        <div>
            <h1 class="text-5xl font-bold mb-4 mt-14">
                Post Description
            </h1>
            <h1 class="text-3xl font-bold mb-4">
                {{$listing->description}} 
            
            </h1>
          
        </div>
        <hr class="w-full">
        <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i>{{$listing->location}}
        </div>
    </div>
</div>
    </div>
</x-card>

<footer
class="fixed bottom-0  w-full bg-white   h-20  opacity-100 "
>

<a
    href="/listings/create"
    style="background-color:  #5E5CBA;font-weight: bol"
    class="rounded absolute top-1/3 right-10 bg-black text-white py-2 px-5"
    >Create Your own Post</a
>
</footer> 


@auth
         
<div  class="flex flex-col items-center justify-center text-center"  style="display: inline" >
    <div class="row" >
      <div class="flex w-full flex-col items-center justify-center text-center col-sm" style="width: 100%">
        <a id="comment" href="/register" style="width: 40%">
            <h1 class="rounded bg-grey text-3xl font-bold mt-4 px-2" style=" width: 100%;height: 23%;
            background-color: grey;padding: 2px;padding-left: 18px">
                <i class="fa-solid fa-thumbs-up"></i>
               Like 
            </h1>
            </a>
      </div>
      

      
      <div class="flex w-full flex-col items-center justify-center text-center col-sm" style="width: 100%">
        <a id="comment" href="/register" style="width: 40%">
            <h1 class="rounded bg-grey text-3xl font-bold mt-4 px-2" style=" width: 100%;height: 23%;
            background-color: grey;padding: 2px;padding-left: 18px">
                <i class="fa-solid fa-share"></i>
               Share 
            </h1>
            </a>
      </div>


      <div class="flex w-full flex-col items-center justify-center text-center col-sm" style="width: 100%">
        <a id="comment"  style="width: 40%">
            <h1 class="rounded bg-grey text-3xl font-bold mt-4 px-2" style=" width: 100%;height: 23%;
            background-color: grey;padding: 2px;padding-left: 18px">
                <i class="fa-solid fa-comment"></i>
               leave a comment 
               <form action="{{url( 'comments'   )}}" method="POST" class="mt-4">
                @csrf
               <input type="hidden" name="post_slug" value="{{$listing->id}}" id="">
                <textarea style="border: #5E5CBA solid 2px" cols="30" name="comment_body" id="" required class="rounded form-control" rows="5">
                
                </textarea>
                <button type="submit" style="background-color: #5E5CBA;padding: 0.5%;font-size: 1rem " class="rounded btn btn-primary mb-6">submit</button>
            </form>
            </h1>
            </a>
            
      </div>

  

      
    </div>
  </div>
  <div class="ml-20 mr-20 mt-8">
    <h3 class="rounded bg-grey text-2xl font-bold mt-4 px-2">    Comments about this post    </h3>
    
<div class="rounded" style="background-color: grey;border: #5E5CBA solid 1px;padding: 7px">
<h1 class=" bg-grey text-2xl font-bold px-2">name of the writer</h1>
<p style="padding: 22px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque molestiae perferendis quam repellendus illo ad quis quos nam, velit enim sapiente esse omnis adipisci ab optio aperiam voluptas aliquam saepe officiis eum sunt error fuga placeat laboriosam! Explicabo officiis quo eveniet amet labore odit, assumenda, rerum molestiae exercitationem culpa numquam fugiat sint doloremque, aut iste alias laboriosam sapiente eaque soluta aspernatur inventore aliquam illum qui. Accusamus debitis ipsum deleniti neque delectus nihil cupiditate dignissimos suscipit doloribus cumque omnis reprehenderit eum obcaecati, repudiandae fuga eos mollitia fugiat eaque numquam blanditiis eius qui adipisci ratione! Commodi ipsam nihil natus minus dignissimos, provident fugiat porro voluptates consequuntur. Voluptatem quaerat voluptates hic. Cumque dolorum quidem maxime pariatur eligendi temporibus impedit praesentium dolorem molestiae! Sed alias nesciunt id!</p>
<a href="" class=" roundded" style="background-color: skyblue;padding: 7px;border-radius: 5px;margin-left: 1%;">edit</a>
<a href="" class=" roundded" style="background-color: red;padding: 7px;border-radius: 5px;margin-left: 1%;">delete</a>
</div>


  </div>
        @else


        <div class="container" style="display: inline" >
            <div class="row" style="display: inline" >
              <div class="col-sm" style="width: 40%;">
                <a id="comment" href="/register">
                    <h1 class="text-3xl font-bold mt-4" style=" width: 100%;height: 23%;
                    background-color: grey;border-radius: 15px;padding: 2px;padding-left: 18px">
                        <i class="fa-solid fa-thumbs-up"></i>
                       Like 
                    </h1>
                    </a>
              </div>
              
              <div class="col-sm" style="width: 40%;">
                <a id="comment" href="/register">
                    <h1 class="text-3xl font-bold mt-4" style=" width: 100%;height: 23%;
                    background-color: grey;border-radius: 15px;padding: 2px;padding-left: 18px">
                        <i class="fa-solid fa-comment"></i>
                       comment 
                    </h1>
                    </a>
              </div>
              <div class="col-sm" style="width: 40%">
                <a id="comment" href="/register">
                    <h1 class="text-3xl font-bold mt-4"style="
                         width: 100%;height: 23%; background-color: grey;border-radius: 15px;padding: 2px;padding-left: 18px;">
                        <i class="fa-solid fa-share"></i>
                       Share 
                    </h1>
                    </a>
              </div>
              
            </div>
          </div>


      

        @endauth
</x-layout>