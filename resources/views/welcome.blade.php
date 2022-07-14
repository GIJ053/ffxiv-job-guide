<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
</head>
<body>
    <x-site-banner>
    </x-site-banner>

    @foreach ($jobs as $job)
        <div class="job-info-container">
            <h1> {{ $job->name }}</h1>
        
            <div>
                <h3><strong>{{ $job->role->name }}</strong> - INSERT DIFFICULTY HERE</h3>
            </div>
        
            <h2>INSERT BASIC COMBOS HERE</h2>
        
            <a href="/{!! $job->slug !!}">LINK TO JOB PAGE HERE</a>
        </div>
    @endforeach
</body>
</html>