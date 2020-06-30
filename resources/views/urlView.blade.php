<html>
    <head>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body style="background-color: #f8fafc;">
        <div class="container pt-5">
            <p>Shorten URL : <a href="{{ route('short_link', $input->shorten_url) }}" target="_blank" style="text-decoration: none; color: blue;">{{ $input->shorten_url }}</a></p>
            <a href="{{ route('all_urls') }}" style="text-decoration: none; color: blue;">View all URLs</a>
            <div><a href="/" style="text-decoration: none; color: blue;">Back to home</a></div>
        </div>
    </body>
</html>