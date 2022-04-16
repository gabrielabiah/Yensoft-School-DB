    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <!doctype html>
    <html lang="en" dir="ltr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    
    <title>:: Error :: {{$pagetitle}}</title>
    
    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="{{asset('ericsson/plugins/bootstrap/css/bootstrap.min.css')}}" />
    
    <!-- Core css -->
    <link rel="stylesheet" href="{{asset('ericsson/css/style.min.css')}}"/>
    
    </head>
    <body class="font-muli theme-cyan gradient">
    
    {{$slot}}
    
    <!-- Start Main project js, jQuery, Bootstrap -->
    <script src="{{asset('ericsson/bundles/lib.vendor.bundle.js')}}"></script>
    
    <!-- Start project main js  and page js -->
    <script src="{{asset('ericsson/js/core.js')}}"></script>
    </body>
    </html>