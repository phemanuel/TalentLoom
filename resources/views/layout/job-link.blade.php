<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('dashback/assets/img/favicon_new.png') }}">
    <title>TalentLoom :: Redirect</title>

    <style>
        .table-container {
            width: 100%;
            max-width: 100%; /* Adjust as needed */
            height: 100%; /* Adjust as needed */
            overflow: auto;
            border: 1px solid #ccc;
            padding: 5px;
            box-sizing: border-box;
        }

        table {
            width: 60%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            position: sticky;
            top: 0;
        }
    </style>
</head>
<body>
    <table align="center" class="table">
        <tr>
            <td><div align="center"><img src="{{asset('loginback/img/big_logo.png')}}" alt=""></div></td>
        </tr>
        @if($applicationType == 'Application Link')
        <tr>
            <td>
                <strong>
                    <h4>
                        <img src="{{ asset('dashback/assets/img/spinner.gif') }}" alt="Loading..." />
                        <p>The page is redirecting. If it takes too long, <a href="{{ $postJobsLink }}">click here to proceed to the application page</a>.</p>
                    </h4>
                </strong>
            </td>
        </tr>
        @elseif($applicationType == 'Send to Mail')
        <tr>
            <td>
                <strong>
                    <h4>
                        <img src="{{ asset('dashback/assets/img/spinner.gif') }}" alt="Loading..." />
                        <p>Send your CV, cover letter, and portfolio to <u>{{$postJobsLink}}</u> .</p>
                        <p>The page is redirecting. If it takes too long, <a href="mailto:{{ $postJobsLink }}">Click to send an email to the employer</a></p>
                    </h4>
                </strong>
            </td>
        </tr>
        @endif
    </table>
    
    <!-- Optionally, auto-redirect after a few seconds -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var applicationType = "{{ $applicationType }}";
            var postJobsLink = "{{ $postJobsLink }}";

            if (applicationType === 'Application Link') {
                setTimeout(function() {
                    window.location.href = postJobsLink;
                }, 2000); // 2 seconds delay
            } else if (applicationType === 'Send to Mail') {
                setTimeout(function() {
                    window.location.href = 'mailto:' + postJobsLink;
                }, 2000); // 2 seconds delay
            }
        });
    </script>
</body>
</html>

