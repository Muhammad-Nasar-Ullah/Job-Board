<x-layout>

    <x-breadcrumbs class="mb-4"
    :links="['jobs' => route('jobs.index'), $job->title => '#']"    />

    <x-job-card :$job>
        <div class="text-sm mb-4 text-slate-500">
            {!! nl2br(e($job->description)) !!}
        </div>
    </x-job-card>
</x-layout>
