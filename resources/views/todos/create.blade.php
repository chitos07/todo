
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

    <form class="w-full max-w-lg mt-3" method="POST" action="{{route('store.todo')}}">
        @csrf
            <div class="flex flex-wrap  -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                  Title 
                </label>
                <input
                 class="appearance-none block w-full bg-gray-200 text-gray-700
                   rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                   @error('title') is-invalid @enderror   
                   id="grid-first-name" 
                   type="text" 
                   placeholder="Jane"
                   name="title"
                   >
                   @error('title')
                   <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                       {{$message}}
                   </div>
                   @enderror
          
                  
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Description
                </label>
                <textarea 
                class="appearance-none block w-full bg-gray-200 text-gray-700 
                border border-gray-200 rounded py-3 px-4 leading-tight 
                focus:outline-none focus:bg-white focus:border-gray-500" 
                @error('description') is-invalid @enderror   
                id="grid-last-name" 
                type="text" 
                placeholder="Doe"
                name="description"
                >
                </textarea>
              </div>
            </div>
     @error('description')
                   <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                       {{$message}}
                   </div>
                   @enderror
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Sign In
              </button>
          </form>
            
      </div>
</body>
</html>