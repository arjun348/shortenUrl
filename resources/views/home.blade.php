<!doctype html>
<html>
    <head>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container pt-5">
            <form method="POST" action="{{ route('url_shorten') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-8">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Make your links shorter" name="url">
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary">Shorten URL</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>