@extends('layouts.app')

@section('content')



<header class="flex items-center mb-3 py-4">
    <div class="flex justify-between items-end w-full">
        <h2 class=" text-grey text-xl font-normal" style="color:rgba(0, 0, 0, 0.4)">My project</h2>
            <a  href="/projects/create" class=" bg-indigo-400 no-underline text-white rounded-lg text-sm py-2 px-4 " style="box-shadow: 0 2px 7px 0 #7D74FF; ">New Project</a>
    </div>
</header>

<main class="lg:flex flex-wrap -mx-3 ">
    @forelse ($projects as $project)
        <div class="lg:w-1/3 px-3 pb-6">
            @include('projects.card')
        </div>
    @empty
    <div>No project yet</div>
    @endforelse
    
</main>

  
@endsection 