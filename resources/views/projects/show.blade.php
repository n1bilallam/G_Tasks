@extends('layouts.app')

@section('content')

<header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class=" text-gray-400 text-xl font-normal">
               <a href="/projects" class="text-gray text-xl font-normal "> My project</a> / {{ $project->title}}
            </p>
            <div class="flex items-center">   
                @foreach ($project->members as $member)
                    <img src="{{ gravatar_url($member->email) }}" alt="{{$member->name}}'s avatar" class="rounded-full w-8 mr-2">
                @endforeach 
                <img src="{{ gravatar_url($project->owner->email) }}" alt="{{$project->owner->name}}'s avatar" class="rounded-full w-8 mr-2">          
                <a href="{{$project->path() .'/edit'}}" class=" bg-indigo-400  text-white rounded-lg text-sm py-2 px-4 ml-4" style="box-shadow: 0 2px 7px 0 #7D74FF; ">Edit Project</a>
        
            </div>
        </div>
</header>

<main>
    <div class="lg:flex -mx-3 ">
        <div class="lg:w-3/4 px-3 mb-6">
            <div class="mb-8">
                <h2 class="text-lg text-gray-400 text-xl font-normal mb-3" >Tasks</h2>
                {{--tasks--}}

                @foreach($project->tasks as $task)
                    <div class="bg-white  p-4 rounded-lg shadow mb-3">
                    <form method="POST" action="{{ $task->path()}}">
                            @method('PATCH')
                            @csrf 

                            <div class="flex">
                                <input name="body"  value="{{ $task->body }}" class="w-full {{ $task->completed ? 'text-gray-500' : '' }}">
                                <input name="completed" type="checkbox" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                            </div>
                                
                    </form>
                        
                    </div>
                @endforeach
                <div class="bg-white  p-4 rounded-lg shadow mb-3">
                    <form action="{{ $project->path() . '/tasks'}}" method="POST">
                        @csrf

                        <input placeholder="Brgin adding Tasks ..." class="w-full" name="body">

                    </form>
                </div>
               

            </div>

            <div>
                <h2 class="text-lg text-grey text-xl font-normal mb-3" style="color:rgba(0, 0, 0, 0.4)">General Notes</h2>
                {{--general notes--}}
                <form method="POST" action="{{ $project->path() }}" >
                    @csrf
                    @method('PATCH')
                    
                        <textarea 
                            name="notes"
                            class="bg-white  p-4 rounded-lg shadow  w-full mb-4" 
                            style="min-height: 200px" placeholder="what you want ..."
                            >{{ $project->notes }}
                        </textarea>
                        <button type="submit" class=" bg-indigo-400  text-white rounded-lg text-sm py-2 px-4 ml-4" style="box-shadow: 0 2px 7px 0 #7D74FF; ">Save</button>
                </form>

                @include('errors')
            </div>

        </div>   
        <div class="lg:w-1/4 px-3 lg:py-8">
            
                    @include('projects.card')
                    @include('projects.activity.card')
                    @can('manage',$project)
                        @include('projects.invite')
                    @endcan
    
        </div>
    </div>
</main>


@endsection