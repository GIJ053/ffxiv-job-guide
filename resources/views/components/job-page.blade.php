<div class="job-container {{ $job->roles->slug}}-container">
    <div class="job-banner">
        <h2 class="job-name">{{ $job->name }}</h2>
        <img src={{ asset('images/job-icons/' .$job->slug. '.png') }} class="transparent-job-icon">
    </div>

    <h3 class="job-description">{{ $job->description }}</h3>

    <div class="icon-container">
        <img src={{ asset('images/border-job-icons/' .$job->slug. '.png') }} class="job-icon">
    </div>

    <div class="skills-container">
        @foreach ($job->skills as $skill)
            <div class="skill-icon-container">
                <img src={{ asset('images/skill-icons/' .$job->slug. '-icons/' .$skill->slug. '.png')}}>
            </div>
        @endforeach
    </div>
</div>