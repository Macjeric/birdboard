<div class="card mt-6">
    <ul class="text-xs list-reset">
        @foreach ($project->activity as $activity)
            <li class="{{ $loop->last ? '' : 'pb-2' }}">
                @include ("projects.activity.{$activity->description}")
                <span class="text-green-600">- {{ $activity->created_at->toDayDateTimeString() }}</span>
            </li>
        @endforeach
    </ul>
</div>
