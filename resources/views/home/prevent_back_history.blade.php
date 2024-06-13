<!DOCTYPE html>
<html>
<head>
    <title>Disable Back Button</title>
</head>
<body>
    <h1>Welcome to the Page</h1>

    <script>
        // Initial state, prevents the browser back button
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            // Push the state again to prevent back navigation
            history.go(1);
        };
    </script>
</body>
</html>
