<div class="w-10/12 lg:w-6/12 m-auto text-center">
    <div>
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$question->title}}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$question->body}}</p>
    </div>

    @if(!auth()->check())
        <div class="w-6/12 mt-14 m-auto flex flex-col content-center flex-wrap text-center gap-y-2 py-2 bg-gray-100 border-0 rounded-2xl border-blue-800">
            <h2 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Faça login para responder.</h2>
            <h3>Não é cadastrado?</h3>
            <a href="{{route('register')}}">
                <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 ">
                    Cadastre-se
                </button>
            </a>
            <b>ou</b>
            <a href="{{route('login')}}">
                <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">
                    Faça login para fazer uma pergunta
                </button>
            </a>
        </div>
    @else
        <section class="bg-white dark:bg-gray-900 pt-6">
            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Responder</h2>
                <form wire:submit="save" class="grid grid-flow-row">
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            {{--                            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resposta</label>--}}
                            <textarea wire:model="body" id="body" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Escreva sua resposta aqui." required minlength="10" maxlength="500"></textarea>
                        </div>
                    </div>
                    <button type="submit" class=" w-2/12 inline-flex items-start px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Responder
                    </button>
                </form>
                @if($question->user_id == Auth::id())
                    <form wire:submit="openAi" class="grid grid-flow-row">
                        <button type="submit" class=" w-4/12 flex justify-center items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-black bg-green-500 rounded-lg focus:ring-4 focus:ring-green-200 hover:bg-green-600">
                            <x-tabler-brand-openai class="mr-2"/>
                            Responder com IA
                        </button>
                    </form>
                @endif

            </div>
        </section>
    @endif

</div>
