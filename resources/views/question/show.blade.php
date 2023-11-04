<x-guest-layout>
    <div class="lg:w-[80%] m-auto ml-auto p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10">
        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">{{$question->title}}</h5>
        <span class="text-gray-500">{{ucfirst($question->category)}}</span>
        <p class="my-4  text-base text-gray-500 sm:text-lg dark:text-gray-400">{{$question->body}}</p>
        <ul>
            @foreach($answers as $answer)
               <li class="my-4 flex flex-col items-start">
                   <p class="border-2 w-full">
                       {{$answer->body}}
                   </p>
                   <span class="text-sm text-gray-400 mt-2"> Respondido por: {{$answer->user->name}}</span>

               </li>


            @endforeach
        </ul>
    </div>




</x-guest-layout>
