
      
<div class="bg-white  p-4 rounded-lg shadow mt-3">
    <ul class="text-xs list-reset">
        @foreach ($project->activity as $activity)
            <li class="{{ $loop->last ? '' : 'mb-1' }}">
                @include ("projects.activity.{$activity->description}").
                <br>
                <span class="text-gray-400">{{ $activity->created_at->diffForHumans(null, true) }}</span>
            </li>
        @endforeach
    </ul>
</div>