
 <h1 class="mt-4">Tables</h1>
 <ol class="breadcrumb mb-4">
     <li class="breadcrumb-item active">tables</li>
 </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example for All blocks
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>dept</th>
                                            <th>gender</th>
                                            <th>room</th>
                                            <th>block</th>
                                            <th>live Place</th>
                                            <th>birthdate</th>
                                            <th>email</th>
                                            <th>created At</th>


                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>dept</th>
                                            <th>gender</th>
                                            <th>room</th>
                                            <th>block</th>
                                            <th>live Place</th>
                                            <th>birthdate</th>
                                            <th>email</th>
                                            <th>created At</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       

                                        @foreach ($users as $user)
                                        <tr align="center" style="background-color: skyblue;color:black">
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->id}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->name}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->phone}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->dept}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->gender}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->room}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->block}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->liveplace}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->birthday}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->email}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->created_at}}</td>
                                         </tr>
                                        @endforeach
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>









 <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example  for block 2
                            </div>





                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>dept</th>
                                            <th>gender</th>
                                            <th>room</th>
                                            <th>block</th>
                                            <th>live Place</th>
                                            <th>birthdate</th>
                                            <th>email</th>
                                            <th>created At</th>
                                            <th>Edit</th>
                                            <th>Update</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>dept</th>
                                            <th>gender</th>
                                            <th>room</th>
                                            <th>block</th>
                                            <th>live Place</th>
                                            <th>birthdate</th>
                                            <th>email</th>
                                            <th>created At</th>
                                            <th>Edit</th>
                                            <th>Update</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       

                                        @foreach ($users as $user)
                                        <tr align="center" style="background-color: skyblue;color:black">
                                            @if ($user->block=="block2")
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->id}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->name}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->phone}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->dept}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->gender}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->room}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->block}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->liveplace}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->birthday}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->email}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;">{{$user->created_at}}</td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;"><a style="background-color: green;color:white;padding-left:8px;padding-right:8px;;padding:8px;border-radius: 8px" href="">Edit</a></td>
                                            <td style="padding: 10px;width: 14%;border-width: 1px;"><a style="background-color: red;color:white;padding-left:8px;padding-right:8px;;padding:8px;border-radius: 8px" href="">Delete</a></td>
                                        
                                            @endif
                                            
                                         </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>