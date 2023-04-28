<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-center text-center mt-8">
{{--                    @if($errors->any())--}}
{{--                        @foreach($errors->all() as $error)--}}
{{--                            <p class="text-red-700 block">{{ $error  }}</p><br>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
                </div>
                <div class="p-6 bg-white border-b border-gray-200 flex justify-center">
                    <form class="w-full max-w-sm" action="{{ route('mail') }}" method="POST">
                        @csrf
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                       for="inline-full-name">
                                    Nombre
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                    id="inline-full-name" type="text"
                                    name="name"
                                >
                                <div class="mt-0 text-red-700 text-center">
                                   <br> {{ $errors->first('name') }}
                                </div>
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                       for="inline-password">
                                    Mensaje
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                    id="inline-password" name="message" type="text">
                                <div class="mt-2 text-red-700 text-center">
                                    {{ $errors->first('message') }}
                                </div>
                            </div>
                        </div>
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <button
                                    class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                    type="submit">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
