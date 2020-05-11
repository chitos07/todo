<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<link rel="stylesheet" href="{{asset('/css/main.css')}}">

<script src="{{asset('/js/app.js')}}"></script>

</head>
<body class="h-auto">
    <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
          <span class="font-semibold text-xl tracking-tight">Todo-App</span>
        </div>
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
          <div class="text-sm lg:flex-grow">
            <a href="{{route('create.todo')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
              Create TODO
            </a>
   
          </div>
         
        </div>
      </nav>

    <div class="container mx-auto ">

            <div class="  p-4 flex justify-center  ">
                
                <div class="w-2/5 rounded overflow-hidden shadow-lg ">
                  
                     

                       
                    <div class=" text-center mt-5 font-bold text-2xl mb-2 bg-gray-400 p-4   font-semibold text-gray-700 ">
                    
                        All Todo</div>
                    <div class="px-6 py-4">

                        @if (session()->has('success'))

                            <div class=" mb-2 bg-green-100 border border-green-400 text-white-700 px-4 py-3 rounded relative" role="alert">
                              
                                <span class="block sm:inline">{{session()->get('success')}}</span>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                  <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                </span>
                              </div>
                        
                            
                        @endif
                        <ul class="">
                            @foreach ($todo as $todos)
                               <li class="bg-gray-800 text-white mb-2 p-3 leading-loose">
                                   {{ $todos->title}}
                                   <span class="float-right ml-1">
                                   <a href="{{route('delete.todo', $todos)}}">
                                  
                                        <i class=" text-red-500 far fa-trash-alt"></i>
                                       </a>
                                   </span>
                                   <span class="float-right ml-1">
                                   <a href="{{route('show.todo', $todos)}}">
                                     <i class="text-teal-500 far fa-eye"></i>
                                    </a>
                                </span>
                                <span class="float-right">
                                <a href="{{route('edit.todo',$todos)}}">
                                     <i class=" text-green-600 far fa-edit"></i>
                                    </a>
                                </span>
                                <span class="float-right mr-1">
                                    <a href="{{route('completed.todo',$todos)}}">
                                         <i class=" text-green-600 fas fa-check"></i>
                                        </a>
                                    </span>
                            </li>
                            @endforeach
                            
                          
                        </ul>

                    </div>

                  
                      {{$todo->links()}}
                  
                    
                  </div>

            </div>
            
      </div>
</body>
</html>