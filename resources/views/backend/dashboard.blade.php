@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>{{ __('strings.backend.dashboard.welcome') }} {{ $logged_in_user->name }}!</strong>
                </div><!--card-header-->
                <div class="card-block">
                    <a href="{{ route('admin.team_members.create') }}">hello</a>
                </div><!--card-block-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection