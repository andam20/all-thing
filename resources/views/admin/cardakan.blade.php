<h1 class="mt-4">Cards</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">cards</li>
</ol>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Registered Students</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
               <h1>

                {{count($users)}}


               </h1>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Pending Students</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h1>12</h1>
             </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Students in Block One</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h1>
                    
                    
                    @php
                    $count=0;
                         foreach ($users as $user){
                    
                    if ($user->block=="block1"){
                        

                        // {{count($user->block)}}   
                        $count++;       
                    }
                }
                echo $count;
              
                    @endphp

                </h1>
             </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary text-white mb-4">
            <div class="card-body">Students in Block Two</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h1>
                     @php
                    $count=0;
                         foreach ($users as $user){
                    
                    if ($user->block=="block2"){

                        // {{count($user->block)}}   
                        $count++;       
                    }
                }
                echo $count;
              
                    @endphp
                </h1>
             </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-info text-white mb-4">
            <div class="card-body">Students in Block Three</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h1>
                    @php
                    $count=0;
                         foreach ($users as $user){
                    
                    if ($user->block=="block3"){

                        // {{count($user->block)}}   
                        $count++;       
                    }
                }
                echo $count;
              
                    @endphp
                </h1>
             </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body">Students in Block Four</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h1>
                    @php
                    $count=0;
                         foreach ($users as $user){
                    
                    if ($user->block=="block4"){

                        // {{count($user->block)}}   
                        $count++;       
                    }
                }
                echo $count;
              
                    @endphp
                   
                </h1>
             </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Students in Block Five</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h1>
                    @php
                    $count=0;
                         foreach ($users as $user){
                    
                    if ($user->block=="block5"){

                        // {{count($user->block)}}   
                        $count++;       
                    }
                }
                echo $count;
              
                    @endphp
                </h1>
             </div>
        </div>
    </div>

</div>