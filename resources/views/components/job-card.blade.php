<div class="job-container {{ $role->slug }}-container">
    <div class="job-banner">
        <h2 class="job-name">{{ $job->name }}</h2>
        <img src={{ asset('images/job-icons/' .$job->slug. '.png') }} class="transparent-job-icon">
    </div>

    <h3 class="job-description">{{ $job->description }}</h3>

    <div class="icon-container">
        <img src={{ asset('images/border-job-icons/' .$job->slug. '.png') }} class="job-icon">
    </div>
</div>