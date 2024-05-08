{{--@dd($question)--}}
<div class="w-11/12 lg:w-6/12 m-auto mt-14 text-center">
    <div>
        <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">{{$question->title}}</h5>
        <p class="mb-3 mt-3 font-bold text-xl text-gray-700 dark:text-gray-400">{{$question->body}}</p>
        <div class="flex flex-col text-end text-gray-600 text-sm mb-6">
            <span>{{ucfirst($question->user->name)}}</span>
            <span>{{date('d/m/Y', strtotime($question->created_at->toDateTimeString()))}}</span>
        </div>
    </div>
    <div class="grid grid-cols-1">
        @foreach($answers as $answer)
            <div class="bg-white dark:bg-gray-900 p-4 rounded-lg shadow-lg mb-4 mt-4">
                <p>
                {{$answer->body}}
                </p>
                <div class="flex justify-between mt-3">
                    @if(\Illuminate\Support\Facades\Auth::user())
                        <form wire:submit="vote({{$answer->id}})">
                            <button type="submit" class="flex">
                                <x-heroicon-o-hand-thumb-up class="w-6 h-6 hover:text-green-700" />
                                <span class="ml-2">{{$answer->votes}}</span>
                            </button>
                        </form>

                    @else
                        <div class="flex">
                            <x-heroicon-o-hand-thumb-up class="w-6 h-6" />
                            <span class="ml-2">{{$answer->votes}}</span>
                        </div>
                    @endif

                    <div class="flex flex-col text-gray-600 text-sm mt-2">

                        @if($answer->ai_generated)
                            <span class="text-right flex items-center text-gray-800">
                            - Resposta gerada por IA <x-tabler-robot-face class="w-5 h-5 ml-1 text-blue-800" />
                        </span>
                        @else
                            <span class="text-right">
                            - {{$answer->user->name}}
                        @endif
                        </span>
                            <span class="text-right">
                            {{date('d/m/Y', strtotime($answer->created_at->toDateTimeString()))}}
                        </span>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
