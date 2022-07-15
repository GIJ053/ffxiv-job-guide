<div class="role-banner">
    <h1 class="banner-role-name"> {{ $role->name }}</h1>
    <div  class="role-img-container">
        <img src={{ asset('images/role-icons/bordered_' .$role->name. '.png')}}>
    </div>
    <h3 class="role-description">{{ $role->description }}</h3>
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