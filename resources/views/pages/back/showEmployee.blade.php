@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])

    <div class="dashWrapper">
        <div class="adminHomePageTitle">{{$employee->name}} courses</div>
        @if(count($employeePackages))
            <table class="styled-table">
                <thead>
                <tr>
                    {{--                    <th class="hiddenRows">Action</th>--}}
                    <th class="hiddenRows">Package ID</th>
                    <th>Course Name</th>
                    <th class="hiddenRows">Status</th>
                    <th>Created at</th>
                    <th>Certificate</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employeePackages as $package)
                    <tr>
                        {{--                        <td class="hiddenRows actionRow">--}}
                        {{--                            <form action="{{route('delete.employer', $employee->id)}}" method="POST"> @csrf @method('DELETE')<button class="submitDeleteOrder"><img class="deleteFormOrders" src="{{asset('images/icons/bin.png')}}" alt=""></button></form>--}}
                        {{--                            <a href="{{route('employer.employee', $employee->id)}}" class="editLink"><img src="{{asset('images/icons/info.png')}}" alt=""></a>--}}
                        {{--                            --}}{{--                                <a href="{{route('employer.info', $employee->employee)}}" class="editLink"><img src="{{asset('images/icons/info.png')}}" alt=""></a>--}}
                        {{--                        </td>--}}
                        <td class="hiddenRows blackText">{{$package->id}}</td>
                        <td class="blackText">{{$package->course_name}}</td>
                        <td class="hiddenRows blackText">{{$package->status}}</td>
                        <td class="hiddenRows blackText">{{$package->created_at}}</td>
                        @if($package->certificate_id)
                            <td><a href="{{route('certificate.download', $package->certificate_id)}}"><img class="invoiceLink" src="{{asset('images/icons/pdf.png')}}" alt=""></a></td>
                        @else
                            <td>-</td>
                        @endif
                    </tr>
                @endforeach
                {{--        <tr class="active-row">--}}
                {{--            <td>Melissa</td>--}}
                {{--            <td>5150</td>--}}
                {{--        </tr>--}}
                {{--        <!-- and so on... -->--}}
                </tbody>
            </table>
        @else
            <div class="shareError">
                <div class="textAdmin">{{$employee->name}} has no courses</div>
                <a href="{{route('dashboard.employer')}}"><div class="buttonLink" style="font-weight: 600">Go to dashboard</div></a>
            </div>
        @endif
    </div>
@endsection
