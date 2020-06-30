<!doctype html>
<html>
    <head>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body style="background-color: aliceblue;">
        <div class="container pt-5" style="background-color: aliceblue;">
            <p>Total visit : {{ $total_visit }}</p>
            <p>Created time : {{ $created_time }}</p>
            <p>Total visit in last hour : {{ $last_hour_visit_count }}</p>
        </div>
    </body>
</html>