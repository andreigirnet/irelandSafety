@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="row">
            <div class="col-xl-12">
                <!-- Todo-->
                <div class="card">
                    <div class="searchUser">
                        {{--            <div class="searchText">Search for a user</div>--}}
                        <form action="{{route('user.admin.search')}}" style="display: flex; column-gap: 20px">
                            <input type="text" name="email" placeholder="Search the users here" required>
                            <button type="submit" class="searchButton">Search</button>
                        </form>
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
                                        <th>Action Buttons</th>
                                        <th>User Id</th>
                                        <th>Created At</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Registered By</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr style="color: black">
                                            <td style="display: flex; column-gap: 15px">
                                                <form action="{{route('user.delete', $user->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="removeButton">
                                                        <img src="{{asset('images/icons/bin.png')}}" alt="">
                                                    </button>
                                                </form>
                                                <a href="{{route('user.edit', $user->id)}}" class="editLink"><img src="{{asset('images/icons/edit.png')}}" alt=""></a>
                                                <a href="{{route('user.info', $user->id)}}" class="editLink"><img src="{{asset('images/icons/info.png')}}" alt=""></a>
{{--                                                <a href="{{route('user.ip', $user->id)}}" class="editLink"><img src="{{asset('images/icons/ip-address.png')}}" alt=""></a>--}}
                                            </td>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            @if($user->phone)
                                                <td>{{$user->phone}}</td>
                                            @else
                                                <td>No record</td>
                                            @endif
                                            <td>{{$user->registeredBy}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->
    </div>
    {{ $users->links('paginator') }}
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
