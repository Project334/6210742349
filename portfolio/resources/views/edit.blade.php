<x-app-layout>
    <x-slot name="header">
    <h2 style="font-family: 'Courier New', monospace;
        margin-top: 10px;
        margin-left: 10px;
        font-weight: 600;
        font-size:36px;
        ">
            {{ __('Edit Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div style="background-color:#FFEEAD;" class=" overflow-hidden shadow-xl sm:rounded-lg p-5">
            

                <form method="POST" action="/task/{{ $task->id }}">

                    <div class="form-group">
                        <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$task->description }}</textarea>	
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>


                    <div class="form-group">
                        <button type="submit" name="update" style="
                        
                        color:#D9534F;
                        border-radius:10px;
                        margin-top: 20px;
                        margin-left:10px;
                        margin-bottom:10px;

                        padding-left:10px;
                        padding-right:10px;
                        padding-top: 5px;
                        padding-bottom:5px;
                        
                        font-family: 'Courier New', monospace;
                        font-weight: 1000;
                        font-size:20px;
                        text-shadow: 1px 1px 1px #FFFFFF;
                        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);" class="bg-yellow-400">Update task</button>
                    </div>
                {{ csrf_field() }}
                </form>

            </div>
        </div>
    </div>


</x-app-layout>