@extends('frontend.layout.layout')

@section('stylesheet')
@show

@section('content')

    <div class="w-100 bg-secondary py-5 mt-5">
        <div class="w-100 py-5">
            <div class="container-lg">
                <div class="row">

                    @include('frontend.pages.profile.aside-menu')

                    <!-- Page content -->
                    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                        <h1 class="h2 mb-4">Billing</h1>

                        <div class="w-100">
                            @if($errors->has('success'))
                                <p class="alert alert-success">{{$errors->first('success')}}</p>
                            @endif
                            @if($errors->has('error'))
                                <p class="alert alert-danger">{{$errors->first('error')}}</p>
                            @endif
                        </div>

                        <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                                    <i class="ai-open-book text-primary lead pe-1 me-2"></i>
                                    <h2 class="h4 mb-0">Invoices</h2>
                                </div>

                                @if(count($billings) == 0)
                                    <h6 class="alert alert-warning">No payment/billing history found!</h6>
                                @endif


                                @if(count($billings) > 0)
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Invoice</th>
                                                <th class="text-center">Amount</th>
                                                <th class="text-center">Discount</th>
                                                <th class="text-center">Total</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-end"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($billings as $billing)
                                                <tr>
                                                    <td>{{$billing['invoice_date']}}</td>
                                                    <td><a href="{{$billing['invoice_receipt']}}" target="_blank">{{$billing['invoice_number']}}</a></td>
                                                    <td class="text-center">{{$billing['invoice_amount']}}</td>
                                                    <td class="text-center">{{$billing['invoice_discount']}}</td>
                                                    <td class="text-center">{{$billing['invoice_total']}}</td>
                                                    <td class="text-center">
                                                        @if($billing['invoice_status'] == 'paid')
                                                            <span class="badge bg-success text-uppercase">{{$billing['invoice_status']}}</span>
                                                        @else
                                                            <span class="badge bg-warning text-uppercase">{{$billing['invoice_status']}}</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-end"><a href="{{$billing['invoice_receipt']}}" target="_blank" class="btn btn-sm btn-outline-primary">View Receipt</a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif


                            </div>
                        </section>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
@endsection
