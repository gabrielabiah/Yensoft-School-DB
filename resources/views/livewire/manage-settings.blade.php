<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                {{ __('Settings') }}
            </h3>
        </div>

        <x-validation-errors />

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name_of_school">{{ __('Name of School') }}</label>
                        <input type="text" name="name_of_school" id="name_of_school" placeholder="School Name" value=""
                            class="form-control" wire:model.lazy="school_name">
                    </div>
                    <div class="form-group">
                        <label for="short_name">{{ __('Short Name') }}</label>
                        <input type="text" name="short_name" id="short_name" placeholder="{{ __('e.g. SDB') }}"
                            class="form-control" value="" wire:model.lazy="short_name">
                    </div>
                    <div class="form-group">
                        <label for="gps_address">{{ __('GPS Address') }}</label>
                        <input type="text" name="gps_address" id="gps_addresss" placeholder="{{ __('GPS Address') }}"
                            class="form-control" value="" wire:model.lazy="gps_address">
                    </div>
                    <div class="form-group">
                        <label for="postal_address">{{ __('Postal Address') }}</label>
                        <textarea name="postal_address" id="postal_address" placeholder="{{ __('Postal Address') }}" cols="30" rows="3"
                            class="form-control" wire:model.lazy="postal_address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="region">{{ __('Region') }}</label>
                        <input type="text" name="region" id="region" placeholder="{{ __('Region') }}"
                            class="form-control" value="" wire:model.lazy="region">
                    </div>
                    <div class="form-group">
                        <label for="city">{{ __('City') }}</label>
                        <input type="text" name="city" id="city" placeholder="{{ __('City') }}"
                            class="form-control" value="" wire:model.lazy="city">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_established">{{ __('Date of Establishment') }}</label>
                        <input type="date" name="date_established" id="date_established"
                            placeholder="{{ __('Select Date') }}" class="form-control" value=""
                            wire:model.lazy="date_of_establishment">
                    </div>
                    <div class="form-group">
                        <label for="sector">{{ __('Sector') }}</label>
                        <select name="sector" id="sector" class="form-control" wire:model.lazy="sector">
                            <option value="">{{ __('Select Sector') }}</option>
                            <option value="private">{{ __('Private') }}</option>
                            <option value="public">{{ __('Public') }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mobile">{{ __('Mobile') }}</label>
                        <input type="text" name="mobile" id="mobile" placeholder="{{ __('Mobile') }}"
                            class="form-control" wire:model.lazy="mobile">
                    </div>
                    <div class="form-group">
                        <label for="upload">{{ __('Upload Logo') }}</label>
                        <input type="file" name="upload" id="logo" class="form-control" wire:model.lazy="upload_logo">
                        @error('upload_logo')
                            <div class="mt-2 mb-2 alert alert-danger" id="upload_error" x-data="{ show: false }"
                                x-show="show" x-init="@this.on('error', () => { show = true; })">
                                <span class="">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="term_begins">{{ __('Term Begins') }}</label>
                        <input type="date" name="term_begins" id="term_begins" class="form-control"
                            wire:model.lazy="term_start">
                    </div>
                    <div class="form-group">
                        <label for="term_ends">{{ __('Term Ends') }}</label>
                        <input type="date" name="term_ends" id="term_ends" class="form-control"
                            wire:model.lazy="term_end">
                    </div>
                </div>

            </div>

        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4 btn-group">
                    <a href="{{ url('dashboard') }}" class="btn btn-danger">Cancel</a>
                    <a href="#" onclick="event.preventDefault()" class="btn btn-primary" wire:click="save">Submit</a>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        document.addEventListener('livewire:load', function() {



        })
        setTimeout(function() {
            $('#upload_error').fadeOut('fast');
        }, 30000);
    </script> --}}
</div>
