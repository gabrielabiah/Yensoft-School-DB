    <!-- Knowing is not enough; we must apply.
        Being willing is not enough; we must do.
        - Leonardo da Vinci -->
    <div>

        @if (!is_null(session()->has('message')))

            @if (isset($alert))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="alert alert-{{ $alert['type'] }}"
                    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90">
                    <i class=" fa fa-check cool-green"></i>
                    {{ $alert['message'] }}
                </div>
            @endif
        @endif

        @if ($errors->any())
            <div {{ $attributes }}>
                @foreach ($errors->all() as $error)
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
                        class="alert alert-{{ $alert['type'] }}" x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                        class="alert alert-danger" role="alert">

                        {{ $error }}
                    </div>
                @endforeach
            </div>
        @endif

    </div>
