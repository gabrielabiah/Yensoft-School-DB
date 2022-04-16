    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
<!-- Start main footer -->
<div class="section-body">
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    Copyright © {{date('Y')}} <a href="https://yensoftgh.com">Yensoft</a>
                </div>
                <div class="col-md-6 col-sm-12 text-md-right">
                    <ul class="list-inline mb-0">
                        {{-- <li class="list-inline-item"><a href="">Documentation</a></li> --}}
                        {{-- <li class="list-inline-item"><a href="">FAQ</a></li> --}}
                        {{-- <li class="list-inline-item"><a href="" class="btn btn-outline-primary btn-sm">Buy Now</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>    
</div>

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="{{asset('ericsson/bundles/lib.vendor.bundle.js')}}"></script>

<!-- Start all plugin js -->
<script src="{{asset('ericsson/bundles/counterup.bundle.js')}}"></script>
<script src="{{asset('ericsson/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('ericsson/bundles/summernote.bundle.js')}}"></script>

<!-- Start project main js  and page js -->
<script src="{{asset('ericsson/js/core.js')}}"></script>
<script src="{{asset('ericsson/js/page/index.js')}}"></script>
<script src="{{asset('ericsson/js/page/summernote.js')}}"></script>

@livewire('weekly-fee-payment-chart-data')

@livewireScripts
</body>
</html>
