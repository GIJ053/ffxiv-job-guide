<div class="role-banner">
    <h1> {{ $role->name }}</h1>
    <img src={{ asset('images/role-images/' .$role->name. 'Role.png')}}>
    <h3>{{ $role->description }}</h3>
</div>

<div class="job-quick-links">
    <div>
        <h1 style="text-align: center">JOB QUICK LINKS</h1>
    </div>

    <div class="links-menu">
        @foreach ($role->jobs as $job)
            <div class="job-button">
                <a id="job-link" href="/jobs/{{ $job->slug }}">
                    {{ $job->abbreviation}} 
                </a>
            </div>
        @endforeach
    </div>
</div>