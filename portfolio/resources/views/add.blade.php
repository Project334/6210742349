<?php
// Hello Kampu123
// Hello I'm James
?>
<x-app-layout> 
    <x-slot name="header">
        <h2>{{ __('Add Task') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div style="background-color:#FFEEAD;" class=" overflow-hidden shadow-xl sm:rounded-lg p-5">
            
                <form method="POST" action="/task">

                    <div class="form-group">
                        <textarea name="description" class="bg-blue-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Enter your task'></textarea>  
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>


                    <div class="form-group">
                        <button type="submit">Add Task</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>


</x-app-layout>
