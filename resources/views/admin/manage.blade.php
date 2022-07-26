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
       




            <h1 class="mt-4">Tables</h1>
 <ol class="breadcrumb mb-4">
     <li class="breadcrumb-item active">tables</li>
 </ol>
                        


<h1>andam</h1>


 <div class="card mb-4">
    <h1>andam</h1>
                            <div class="card-header">
                                DataTable for Teachers
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>teacherName</th>
                                            <th>stage</th>
                                            <th>group</th>
                                            <th>faculty</th>
                                            <th>department</th>
                                         

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>teacherName</th>
                                            <th>stage</th>
                                            <th>group</th>
                                            <th>faculty</th>
                                            <th>department</th>
                                         
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       

                                        @foreach ($subjects as $subject)
                                        <tr align="center" style="background-color: skyblue;color:black">
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->id}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->name}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->teacherName}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->stage}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->group}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->faculty}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->department}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->created_at}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;"><a style="background-color: green;color:white;padding-left:8px;padding-right:8px;;padding:8px;border-radius: 8px" href="">Edit</a></td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;"><a style="background-color: red;color:white;padding-left:8px;padding-right:8px;;padding:8px;border-radius: 8px" href="">Delete</a></td>
                                        
                                            
                                         </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>



                            <div class="card-header" style="background-color: blueviolet;color:white;margin-top: 112px">
                              <h1>  DataTable for Teachers of software department</h1>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>teacherName</th>
                                            <th>stage</th>
                                            <th>group</th>
                                            <th>faculty</th>
                                            <th>department</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>teacherName</th>
                                            <th>stage</th>
                                            <th>group</th>
                                            <th>faculty</th>
                                            <th>department</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       

                                        @foreach ($subjects as $subject)
                                        <tr align="center" style="background-color: skyblue;color:black">
                                            @if ($subject->department=="software")
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->id}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->name}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->teacherName}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->stage}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->group}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->faculty}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->department}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$subject->created_at}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;"><a style="background-color: green;color:white;padding-left:8px;padding-right:8px;;padding:8px;border-radius: 8px" href="">Edit</a></td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;"><a style="background-color: red;color:white;padding-left:8px;padding-right:8px;;padding:8px;border-radius: 8px" href="">Delete</a></td>
                                        
                                            @endif
                                            
                                         </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
