
    <div class="bg-white  p-4 rounded-lg shadow flex flex-col " style="height:200px;">
        <h3 class=" font-normal text-xl py-3 -ml-6 mb-3 border-l-4 border-indigo-400 pl-4">
            <a href="{{ $project->path() }}" class="text-black no-underline"> {{ $project->title }}</a>
        </h3>
        <div  class="text-gray-400 mb-4 flex-1">{{ str_limit($project->description,250) }}</div>
        @can('manage', $project)
        <footer>
        <form method="POST" action=" {{ $project->path() }}" class="text-right">
                @method('DELETE')
                @csrf
                <button type="submit" class="text-xs text-red-500">Delete</button>
            </form>
        
        </footer>
        @endcan
    </div>

   