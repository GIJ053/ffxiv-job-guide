<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app.css"/>
    <title>Role jobs view</title>
</head>
<body>
    <x-site-banner>
    </x-site-banner>

    <div class="jobs-container">
        @foreach ($role->jobs as $job)
            <x-job-card :role="$role" :job="$job">
            </x-job-card>
        @endforeach
    </div>
</body>
</html>