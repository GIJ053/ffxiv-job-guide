<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app.css"/>
    <title>Landing Page</title>
</head>
<body>
    <x-site-banner>
    </x-site-banner>

    <div id="roles-container">
        @for ($i = 1; $i < 4; $i++)
            @php $role = $roles->find($i) @endphp<!-- Grab each role(Tank, Healer, DPS) -->

            <div class="role-container {{ $role->slug }}-container">
                <x-role-card :role="$role"><!-- /resources/views/components/role-card.blade.php -->
                </x-role-card><!-- -->

                <div class="jobs-container">
                    @foreach ($role->jobs as $job)
                        <x-job-card :role="$role" :job="$job">
                        </x-job-card>
                    @endforeach
                </div>

                <div class="bottom-role-link">
                    <a href="/role/{!! $role->slug !!}" class="role-link">More info on {{ $role->slug }} jobs here!</a>
                </div>
            </div>
        @endfor
    </div>
</body>
</html>