<div>
    <!-- He who is contented is rich. - Laozi -->
    @if ($errors->any())

        <div class="alert alert-info" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => { show = false }, 3000)">
            <div class="font-medium text-red-600">
                <h4 class="alert-heading"> {{ __('Whoops! Action Failed') }} </h4>
            </div>
            <ul class="alert alert-danger mt-3 text-sm text-red-600" style="list-style-type: ' - '">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
