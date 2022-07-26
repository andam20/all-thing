<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.styles')
    
        
        

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dormitory</title>
      
    </head>
    <body class="sb-nav-fixed">

        @include('admin.navbar')
     
        <div id="layoutSidenav">
            @include('admin.sidebar')
       
          <div align="center">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    
 
                                <h2 class="text-2xl font-bold uppercase mb-1">
                                    Create Stages
                                </h2>
                            
                            <form action="/admin/subjects"  method="POST" enctype="multipart/form-data">
                                @csrf
                               
        @if (session()->has('message'))
        <div style="height: 94px;background-color: #5E5CBA;font-weight: bold" x-data="{show:true}" x-init="setTimeout(()=>show =false,3000)" x-show="show" class=" rounded fixed top-0 left-1/3 transform-translate-x-1/2  text-white px-48 py-3">
        <p>
           <h3 align="center">you teacher added successfully</h3>
        </p>
        </div>
    @endif
                                <div class="mb-6">
                                    <label for="name" class="inline-block text-lg mb-2">
                                        Name of the subject
                                    </label>
                                    <input
                                        type="text"
                                        class="border border-gray-200 rounded p-2 w-full"
                                        name="name"
                                        value="{{old('name')}}"
                                     />
                                    @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                                    @enderror
                                </div>


                                <div class="mb-6">
                                    <label for="teacherName" class="inline-block text-lg mb-2">
                                        teacherName
                                    </label>
                                    <input
                                        type="text"
                                        class="border border-gray-200 rounded p-2 w-full"
                                        name="teacherName"
                                        value="{{old('teacherName')}}"
                                     />
                                    @error('teacherName')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label
                                        for="department"
                                        class="inline-block text-lg mb-2"
                                        > Department</label
                                    >
                                    <select   value="{{old('department')}}" name="department" id="department">
                                        <option value="">Choose The department</option>
                                        <option value="software">Software</option>
                                        <option value="chemical">chemical</option>
                                        <option value="oil">oil</option>
                                        <option value="medical">medical</option>
                                        <option value="biology">biology</option>
                                        <option value="talarsazi">talarsazi</option>
                                        <option value="manufacturing">manufacturing</option>
                                        <option value="civil">civil</option>
                                        <option value="phisic">phisic</option>
                                         <option value="psychological">psychological</option>
                                        <option value="english">english</option>
                                        <option value="law">law</option>
                                    </select>
                                     
                                    @error('department')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                                    @enderror
                                </div>
                            

                                <div class="mb-6">
                                    <label
                                        for="stage"
                                        class="inline-block text-lg mb-2"> Stage </label>
                                    <select   value="{{old('stage')}}" name="stage" id="department">
                                       
                                        <option value="">Choose The stage</option>
                                        <option value="one">one</option>
                                        <option value="two">two</option>
                                        <option value="three">three</option>
                                        <option value="four">four</option>
                                        <option value="five">five</option>
                                        <option value="six">six</option>
                                    
                                    </select>
                                     
                                    @error('stage')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                                    @enderror
                                </div>



                                
                                <div class="mb-6">
                                    <label
                                        for="group"
                                        class="inline-block text-lg mb-2"
                                        > group</label
                                    >
                                    <select   value="{{old('group')}}" name="group" id="department">
                                        <option value="">Choose The group</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    
                                    </select>
                                     
                                    @error('group')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                                    @enderror
                                </div>


                                <div class="mb-6">
                                    <label
                                        for="faculty"
                                        class="inline-block text-lg mb-2"
                                        > faculty</label
                                    >
                                    <select   value="{{old('faculty')}}" name="faculty" id="department">
                                        <option value="">Choose The faculty</option>
                                        <option value="engineering">engineering</option>
                                        <option value="medical">medical</option>
                                        <option value="scince">scince</option>
                                        <option value="edication">edication</option>
                                    
                                    </select>
                                     
                                    @error('faculty')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="nameStudents" class="inline-block text-lg mb-2">
                                        nameStudents
                                    </label>
                                    <input
                                        type="text"
                                        class="border border-gray-200 rounded p-2 w-full"
                                        name="nameStudents"
                                        value="{{old('nameStudents')}}"
                                        placeholder="seperate by comma "
                                     />
                                    @error('nameStudents')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                                    @enderror
                                </div>
 
                               
                              
                            
                                <div class="mb-6">
                                    <button
                                    type="submit"
                                    style="background-color:  #5E5CBA;opacity: 1;"
                                        class=" text-white rounded py-2 px-4" >
                                        Add The Teacher
                                    </button>
                            
                                 </div>
                            </form>
                            


                    </div>
                </main>
               
            </div>


          </div>









        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
