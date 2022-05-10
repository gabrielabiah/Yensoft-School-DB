<x-backend-layout>
    <x-slot name="pagetitle"> Select a Plan </x-slot>
    <x-navigation />
    {{-- @livewire('user-profile') --}}


    <div class="container">
        <div class="text-center mt-30 mb-0">
            <h2>Subscription Plans</h2>
            <p class="w-45 m-h-auto m-b-30">Get access to Premium Features with a Paid Subscription</p>
            {{-- <div class="btn-group">
                <button type="button" id="monthly-btn" class="btn btn-default active">
                    <span>Monthly</span>
                </button>
                <button type="button" id="annual-btn" class="btn btn-default">
                    <span>Annually</span>
                </button>
            </div> --}}
        </div>
        {{-- Monthly Subscription Plans --}}
        <div class="row align-items-center" id="monthly-view">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between p-b-20 border-bottom">
                            <div class="media align-items-center">
                                <div class="avatar avatar-blue avatar-icon" style="height: 55px; width: 55px;">
                                    <i class="anticon anticon-coffee font-size-25" style="line-height: 55px"></i>
                                </div>
                                <div class="ml-15">
                                    <h4 class="mb-0">Basic</h4>
                                    <h6 class="font-weight-bold mb-2">
                                        GHS1.50 <br /> per student
                                        <span class="font-size-13 font-weight-semibold">/ term</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled mv-30">
                            <li class="mt-3 mb-2">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">7 Users</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2 mb-2">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">0-200 pupils</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2 mb-2">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Email Support</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2 mb-2">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Exam Center</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center">
                            <button class="btn btn-primary">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between p-b-20 border-bottom">
                            <div class="media align-items-center">
                                <div class="avatar avatar-cyan avatar-icon" style="height: 55px; width: 55px;">
                                    <i class="anticon anticon-shop font-size-25" style="line-height: 55px"></i>
                                </div>
                                <div class="ml-15">
                                    <h4 class="mb-0">Plus</h4>
                                    <h6 class="font-weight-bold  m-b-0">
                                        GHS1.75 <br />per student
                                        <span class="font-size-13 font-weight-semibold">/ term</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled mv-30">
                            <li class="mt-3 mb-2">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">14 Users</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2 mb-2">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">201-300 pupils</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2 mb-2">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">SMS Support</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2 mb-2">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Lifetime Updates</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        <div class="text-center">
                            <button class="btn btn-primary">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between p-b-20 border-bottom">
                            <div class="media align-items-center">
                                <div class="avatar avatar-gold avatar-icon" style="height: 55px; width: 55px;">
                                    <i class="anticon anticon-experiment font-size-25" style="line-height: 55px"></i>
                                </div>
                                <div class="ml-15">
                                    <h4 class="m-b-0">Optimal</h4>
                                    <h6 class="font-weight-bold font-size-30 m-b-0">
                                        GHS2.00 <br />per student
                                        <span class="font-size-13 font-weight-semibold">/ term</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled m-v-30">
                            <li class="mt-2 mb-2">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Unlimited users</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2 mb-2">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Unlimited pupils</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2 mb-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">24/7 Dedicated Support</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2 mb-2">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">SMS Support</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2 mb-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Lifetime Updates</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        <div class="text-center">
                            @php
                                $amount = 2;
                                $fee = 2;
                            @endphp
                            <form method="POST" action="{{ route('pay', ['amount' => $amount]) }}">
                                @csrf

                                <input type="hidden" name="metadata"
                                    value="{{ json_encode($array = ['invoiceId' => 'invoice_id']) }}">


                                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                {{-- required --}}

                                <input type="hidden" name="orderID" value="345">


                                <input type="hidden" name="amount" value="{{ $fee }}">

                                <input type="hidden" name="currency" value="GHS">

                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">

                                <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">

                                    <i class="fa fa-plus-circle fa-lg"></i> Get Started</button>
                                {{-- </form>
                            <button class="btn btn-primary" onclick="buy()">Get
                                Started</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Annual Subscription Plans --}}
        <div class="row align-items-center d-none" id="annual-view">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between p-b-20 border-bottom">
                            <div class="media align-items-center">
                                <div class="avatar avatar-blue avatar-icon" style="height: 55px; width: 55px;">
                                    <i class="anticon anticon-coffee font-size-25" style="line-height: 55px"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="font-weight-bold font-size-30 m-b-0">
                                        $0
                                        <span class="font-size-13 font-weight-semibold">/ year</span>
                                    </h2>
                                    <h4 class="m-b-0">Basic</h4>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled m-v-30">
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">1 Organization</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">3 Members</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Unlimited Invoices</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Unlimited Quotes</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Verified Listings</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">24/7 Email Support</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Smart E-Contract</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center">
                            <button class="btn btn-primary">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between p-b-20 border-bottom">
                            <div class="media align-items-center">
                                <div class="avatar avatar-cyan avatar-icon" style="height: 55px; width: 55px;">
                                    <i class="anticon anticon-shop font-size-25" style="line-height: 55px"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="font-weight-bold font-size-30 m-b-0">
                                        $149
                                        <span class="font-size-13 font-weight-semibold">/ year</span>
                                    </h2>
                                    <h4 class="m-b-0">Plus</h4>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled m-v-30">
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">5 Organizations</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Unlimited Organization Members</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Unlimited Invoices</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Unlimited Quotes</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Verified Listings</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">24/7 Priority Support</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Smart E-Contract</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center">
                            <button class="btn btn-primary">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between p-b-20 border-bottom">
                            <div class="media align-items-center">
                                <div class="avatar avatar-gold avatar-icon" style="height: 55px; width: 55px;">
                                    <i class="anticon anticon-experiment font-size-25" style="line-height: 55px"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="font-weight-bold font-size-30 m-b-0">
                                        $499
                                        <span class="font-size-13 font-weight-semibold">/ year</span>
                                    </h2>
                                    <h4 class="m-b-0">Optimal</h4>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled m-v-30">
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Unlimited Organizations</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Featured Listings </span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">24/7 Dedicated Support</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Dedicated Account Manager</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Marketing Tools</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Custom Branding</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">Public Profile</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center">
                            <button class="btn btn-primary">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Wrapper END -->

</x-backend-layout>
