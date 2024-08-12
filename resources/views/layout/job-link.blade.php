<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('dashback/assets/img/favicon_new.png')}}">
    <title>TalentLoom :: Redirect</title>
</head>
<body>
    <strong>
        <h4>
             <img src="{{ asset('dashback/assets/img/spinner.gif') }}" alt="Loading..." />
        <p>The page is redirecting. If it takes too long, <a href="{{ $postJobsLink }}" target="_blank">click here to proceed to the application page</a>.</p>
        </h4>
    </strong>

    <!-- Optionally, auto-redirect after a few seconds -->
    <script>
        setTimeout(function() {
            window.location.href = "{{ $postJobsLink }}";
        }, 2000); // 2 seconds delay
    </script>
</body>
</html>
