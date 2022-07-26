 
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="icon" href="images/favicon.ico" />
            <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
            <link href="css/styles.css" rel="stylesheet" />
            <style>
                .card-body {
      flex: 1 1 auto;
      padding: 1rem 1rem;
    }
            </style>
            <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
            <link
                rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
                integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
                crossorigin="anonymous"
                referrerpolicy="no-referrer"
            />
            <script src="//unpkg.com/alpinejs" defer></script>
            <script src="https://cdn.tailwindcss.com"></script>
            <script>
                tailwind.config = {
                    theme: {
                        extend: {
                            colors: {
                                laravel: "#ef3b2d",
                            },
                        },
                    },
                };
                
            </script>
            <title>Dormitory Management System</title>
          
    
    
            
        {{-- for styling the scroll bar --}}
            <style>
                /* width */
                ::-webkit-scrollbar {
                  width: 18px;
                }
                
                /* Track */
                ::-webkit-scrollbar-track {
                  box-shadow: inset 0 0 4px grey; 
                  border-radius: 10px;
                }
                 
                /* Handle */
                ::-webkit-scrollbar-thumb {
                  background:linear-gradient(180deg, #5E5CBA 1%, #ff00b3 99%);
                  border-radius: 10px;
                }
                
                /* Handle on hover */
                ::-webkit-scrollbar-thumb:hover {
                  background: linear-gradient(0deg, #5E5CBA 1%, #ff00b3  99%);
                }
    
                /* for hover */
                #edit:hover {
        color: #5E5CBA;
    }
    #logout:hover {
        color: #5E5CBA;
        
    }
    #login:hover {
        color: #5E5CBA;
        
    }
    #register:hover {
        color: #5E5CBA;
        
    }
    #profile:hover {
        color: #5E5CBA;
        
    }
                </style>
        </head>
        <body class="section mb-48">
        
            <nav class="flex justify-between items-center">
                <a href="/">
                    <img
                    class="w-48 mr-6 mb-6 px-3"
                    src="{{asset('/images/logo.jpg')}}" 
                    alt=""
                />
                </a>
    
                <ul class="flex space-x-12 mr-6 text-lg">
                    @auth
    
                    <li  id="edit" >
                        <a href="/"
                            ><i class="fa-solid fa-home"></i>
                            Home</a>
                    </li>
                    <li id="profile">
                        <a href="/users/profile"> 
                             <span  class="font-bold uppercase">
                            <i class="fa-solid fa-user" style="padding-right: 5px"> 
                                </i>Hi,  {{auth()->user()->name}}
                          </span>
                        </a>
                    </li>
                    <li  id="edit" >
                        <a href="/listings/manage"
                            ><i class="fa-solid fa-gear"></i>
                            Edit Your Posts</a>
                    </li>
                  
                    <li  id="edit" >
                        <a href="/costs/create"
                            ><i  style="color:black">$</i>
                          Add  Your Costs </a>
                    </li>
    
                    <li  id="edit" >
                        <a href="/costs/manage"
                            ><i class="fa fa-eye" style="color:black"></i>
                           show Your Costs </a>
                    </li> 
                    <li  id="logout" >
                        <form action="/logout" method="POST" class="inline" >
                        @csrf
                        <button
                        type="submit">
                    <i class="fa-solid fa-door-closed"></i>logout
                    </button>
                        </form>
                    </li>
    
                    @if(Auth::user()->usertype=='1')
                        <li>
                           <a href="/admin/home"
                           ><i class="fa fa-share" style="color:black"></i>
                           goto admin </a>
                        </li>
                    @endif

                    @if(Auth::user()->usertype=='2')
                        <li>
                           <a href="/teacher/manage"
                           ><i class="fa fa-share" style="color:black"></i>
                           goto Subjects </a>
                        </li>
                    @endif
                   
                    @else
                    <li id="register">
                        <a href="/users/register" class="hover:text-laravel"
                            ><i class="fa-solid fa-user-plus"></i> Register</a>
                    </li>
                    <li id="login">
                        <a href="/users/login" class="hover:text-laravel"
                            ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                            Login</a
                        >
                    </li>
                    @endauth
                </ul>
            </nav>
    
     <main>
        
    {{$slot}}
     </main>
    
    
    
    
    
     
    
    <x-flash-message />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    </body>
    </html>