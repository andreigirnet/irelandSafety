@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="row">
        <div class="col-xl-12">
            <!-- Todo-->
            <div class="card">
                <div class="searchUser">
                    {{--            <div class="searchText">Search for a user</div>--}}
                    <form action="{{route('order.search')}}" style="display: flex; column-gap: 20px">
                        <input type="text" name="id" placeholder="Search the orders here" required>
                        <button type="submit" class="searchButton">Search</button>
                    </form>
                    <a href="{{route('orders.index')}}">Go back to all orders</a>
                </div>
                <div class="card-body p-0">
                    <div class="p-3">
                        <div class="card-widgets">
                            <a href="javascript:;" data-bs-toggle="reload"><i class="ri-refresh-line"></i></a>
                            <a data-bs-toggle="collapse" href="#yearly-sales-collapse" role="button"
                               aria-expanded="false" aria-controls="yearly-sales-collapse"><i
                                    class="ri-subtract-line"></i></a>
                            <a href="#" data-bs-toggle="remove"><i class="ri-close-line"></i></a>
                        </div>
                        <h5 class="header-title mb-0">Projects</h5>
                    </div>

                    <div id="yearly-sales-collapse" class="collapse show">

                        <div class="table-responsive">
                            <table class="table table-nowrap table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Order Id</th>
                                    <th class="hiddenRows">Created At</th>
                                    <th>Owner</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Paid</th>
                                    <th>Status</th>
                                    <th class="hiddenRows">Address</th>
                                    <th class="hiddenRows">County</th>
                                    <th class="hiddenRows">City</th>
                                    <th class="hiddenRows">Country</th>
                                    <th>Invoice</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($orders)
                                    @foreach($orders as $order)
                                        <tr style="color: black">
                                            <td class="actionRow">
                                                <form action="{{route('order.admin.delete', $order->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="removeButton">
                                                        <img src="{{asset('images/icons/bin.png')}}" alt="">
                                                    </button>
                                                </form>
                                                <a href="{{route('order.edit', $order->id)}}" class="editLink"><img src="{{asset('images/icons/edit.png')}}" alt=""></a>
                                            </td>
                                            <td>{{$order->id}}</td>
                                            <td class="hiddenRows">{{$order->created_at}}</td>
                                            <td>{{$order->email}}</td>
                                            <td>{{$order->product_name}}</td>
                                            <td>{{$order->quantity}}</td>
                                            <td>{{$order->paid}}</td>
                                            <td>{{$order->status}}</td>
                                            <td class="hiddenRows">{{$order->address}}</td>
                                            <td class="hiddenRows">{{$order->county}}</td>
                                            <td class="hiddenRows">{{$order->city}}</td>
                                            <td class="hiddenRows">{{$order->country}}</td>
                                            <td><a href="{{route('invoice.download',$order->id)}}"><img class="invoiceLink" src="{{asset('images/icons/pdf.png')}}" alt=""></a></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <td>No orders</td>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
