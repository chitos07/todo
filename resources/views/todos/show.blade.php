
</html><!DOCTYPE html>
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

                  <div class="container mx-auto ">

                    <h1 class="mt-5 text-center text-2xl">{{$todo->title}}</h1>
                    

                    <div class="flex pt-5 justify-center  ">
                    <div class="rounded overflow-hidden shadow-lg border-2 
                         {{ boolval($todo->completed) ? " border-green-500 border-opacity-100" : " border-red-500 border-opacity-100" }}
                     ">
                            <div class="  font-semibold ">
                                <div class="  pl-5 card-header bg-gray-200 p-2">
                                    <span >Details</span>
                                <span class="
                                {{ boolval($todo->completed) ? " text-green-500 " : " text-red-500 " }}
                                     rounded float-right pr-2">
                                    {{ boolval($todo->completed) ? 'Completed' : 'Non Completed' }}
                                </span>
                                </div>
                                <div class="p-4">
                                    {{ $todo->description }}
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>

            </div>
            
      </div>
</body>
</html>