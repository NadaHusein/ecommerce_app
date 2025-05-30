@extends('layouts.app')

@section('header-title', __('Orders'))

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div>
                    {{ __('Orders') }}
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <div class="cardTitleBox">
                <h5 class="card-title chartTitle">
                    {{ __('Orders Summary') }}
                </h5>
            </div>

            <div class="table-responsive">
                <table class="table table-responsive-lg">
                    <thead>
                        <tr>
                            <th>{{ __('Order ID') }}</th>
                            <th>{{ __('Order Date') }}</th>
                            <th>{{ __('Customer') }}</th>
                            <th>{{ __('Total Amount') }}</th>
                            <th>{{ __('Payment Method') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>
                                    {{ $order->prefix . $order->order_code }}
                                </td>
                                <td>{{ $order->created_at->format('d M Y, h:i A') }}</td>
                                <td>{{ $order->customer?->user?->name }}</td>
                                <td>
                                    {{ showCurrency($order->payable_amount) }}
                                    <br>
                                    <span class="badge rounded-pill text-bg-primary">
                                        {{ __($order->payment_status->value) }}
                                    </span>
                                </td>
                                <td>{{ __($order->payment_method->value) }}</td>
                                <td>{{ __($order->order_status->value) }}</td>
                                <td>
                                    @hasPermission('shop.order.show')
                                    <a href="{{ route('shop.order.show', $order->id) }}" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="{{__('view order details')}}"
                                        class="circleIcon btn-outline-primary svg-bg">
                                        <img src="{{ asset('assets/icons-admin/eye.svg') }}" alt="icon" loading="lazy" />
                                    </a>
                                    @endhasPermission
                                    <a href="{{ route('shop.download-invoice', $order->id) }}" data-bs-toggle="tooltip" data-bs-placement="left"
                                        data-bs-title="{{__('Download Invoice')}}" class="circleIcon btn-outline-secondary">
                                        <img src="{{ asset('assets/icons-admin/download-alt.svg') }}" alt="icon" loading="lazy" />
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>

    <div class="my-3">
        {{ $orders->links() }}
    </div>
@endsection
