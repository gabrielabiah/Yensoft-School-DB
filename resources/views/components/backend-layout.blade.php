<!doctype html>
<!-- He who is contented is rich. - Laozi -->
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Yensoft :: {{$pagetitle}}</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{asset('ericsson/plugins/bootstrap/css/bootstrap.min.css')}}" />

<!-- Plugins css -->
<link rel="stylesheet" href="{{asset('ericsson/plugins/summernote/dist/summernote.css')}}"/>


<!-- Core css -->
<link rel="stylesheet" href="{{asset('ericsson/css/style.min.css')}}"/>
</head>

<body class="font-muli theme-cyan gradient">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">
    <x-top-header /> 
    <x-right-sidebar /> 
    <x-theme-panel /> 
    <x-quick-menu />
    <x-left-sidebar /> 
    <!-- Start project content area -->
    <div class="page">
        {{-- <x-topbar /> --}}
        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                   <x-header-breadcrumbs />
                   <x-header-tabs />
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
           {{$slot}}
        </div>
        <x-footer /> 