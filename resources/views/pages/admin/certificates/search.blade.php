@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Search Result</div>
        <div class="landscape">
            <img src="{{asset('images/banners/landscape.png')}}" alt="">
            <div class="landscapeText">Please rotate your phone</div>
        </div>
        <div class="searchUser">
            <div class="searchText">Search for a Certificate</div>
            <form action="{{route('certificates.admin.search')}}">
                <input type="text" name="unique_id" placeholder="Type the certificate unique id">
                <button type="submit" class="searchButton">Search</button>
            </form>
            <a href="{{route('certificates.admin.index')}}">Go back to all certificates</a>
        </div>
        <table class="styled-table hide">
            <thead>
            <tr>
                <th>Action</th>
                <th>Certificate Id</th>
                <th class="hiddenRows">Created At</th>
                <th>Holder name</th>
                <th>Holder Email</th>
                <th>Unique Id</th>
                <th>Expiration Date</th>
                <th class="hiddenRows">Package Id</th>
                <th>Download</th>
            </tr>
            </thead>
            <tbody>
            @if($certificate)
                    <tr style="color: black;">
                        <td class="actionRow" style="display: flex; align-items: center">
                            <form action="{{route('certificates.admin.delete', $certificate->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="removeButton">
                                    <img src="{{asset('images/icons/bin.png')}}" alt="">
                                </button>
                            </form>
                        </td>
                        <td style="font-size: 16px">{{$certificate->id}}</td>
                        <td class="hiddenRows"  style="font-size: 16px">{{$certificate->created_at}}</td>
                        <td  style="font-size: 16px">{{$certificate->holderName}}</td>
                        <td  style="font-size: 16px">{{$certificate->email}}</td>
                        <td  style="font-size: 16px">{{$certificate->unique_id}}</td>
                        <td  style="font-size: 16px">{{$certificate->expiration_date}}</td>
                        <td class="hiddenRows"  style="font-size: 16px">{{$certificate->package_id}}</td>
                        <td  style="font-size: 16px"><a href="{{route('certificate.download', $certificate->id)}}"><img class="invoiceLink" src="{{asset('images/icons/pdf.png')}}" alt=""></a></td>
                    </tr>
                {{--        <tr class="active-row">--}}
                {{--            <td>Melissa</td>--}}
                {{--            <td>5150</td>--}}
                {{--        </tr>--}}
                {{--        <!-- and so on... -->--}}
            @else
                <td>No packages</td>
            @endif
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
