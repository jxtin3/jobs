<x-layout>
    <h1>Jobs</h1>
    <p>This is the job page.</p>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job->id }}">
                    <strong>{{ $job->title }}</strong>
                </a>
                <br>
                Salary: {{ $job->salary }}
            </li>
            <br>
        @endforeach
    </ul>
</x-layout>