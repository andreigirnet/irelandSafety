@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Edit User</div>
        <div class="formEdit">
            <form action="{{route('user.update', $user->id)}}" method="POST" class="registerEmployeeForm">
                @csrf
                @method('PUT')
                <label class="formLabel" for="editName">User Name</label>
                <input class="formInputProfile" type="text" id="editName" name="name" value="{{$user->name}}">
                <label class="formLabel" for="editEmail">Email</label>
                <input class="formInputProfile" type="text" id="editEmail" name="email" value="{{$user->email}}">
                <label class="formLabel" for="editEmail">Password</label>
                <input class="formInputProfile" type="text" id="editEmail" name="password">
                <button type="submit" class="adminButton">Update</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
