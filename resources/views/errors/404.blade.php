<x-error-layout> 
    <x-slot name="pagetitle">404</x-slot>
<div class="auth option2">
    <div class="auth_left">
        <div class="card">
            <div class="card-body text-center">
                <div class="display-3 text-muted mb-5"><i class="si si-exclamation"></i> 404</div>
                <h1 class="h3 mb-3">Oops.. resource not found!</h1>
                <p class="h6 text-muted font-weight-normal mb-3">We couldn't find the page or resource you're looking for&hellip;</p>
                <a class="btn btn-primary" href="{{URL::previous()}}"><i class="fe fe-arrow-left mr-2"></i>Go back</a>
            </div>
        </div>        
    </div>
</div>
</x-error-layout>