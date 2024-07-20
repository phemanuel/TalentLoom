<!DOCTYPE html>
<html>
<head>
    <title>Redirecting...</title>
</head>
<body>
    <script type="text/javascript">
        // URL to redirect to
        var url = "https://talentloom.kingsconsult.com.ng/TalentLoom";
        // Open URL in a new tab
        window.open(url, '_blank');
        // Optional: Redirect the current tab to a specific page or close it
        window.location.href = "{{ url('/') }}"; // Redirect to the home page or any other page
    </script>
    <p>Redirecting...</p>
</body>
</html>
