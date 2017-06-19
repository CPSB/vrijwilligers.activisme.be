@extends('layouts.app')

@section('title', 'Notifications')

@section('content')
    <div  class="row">
        <div class="col-md-3"> {{-- Sidebar --}}
            <div class="list-group">
                <a href="" class="list-group-item">
                    Unread notifications <span class="badge">{{ auth()->user()->unreadNotifications->count() }}</span>
                </a>
                <a href="" class="list-group-item">
                    All notifications.
                </a>
            </div>

            <div class="list-group">
                <a href="{{ route('notifications.all-read') }}" class="list-group-item">
                    <span class="fa fa-check" aria-hidden="true"></span> Mark all as read
                </a>
            </div>
        </div> {{-- Sidebar --}}

        <div class="col-md-9"> {{-- Content --}}
            @if (auth()->user()->unreadNotifications->count() > 0)
                <div class="panel panel-default">
                    <div class="panel-heading"> Notifications </div>

                    <ul class="list-group">
                        @foreach (auth()->user()->unreadNotifications as $unread)
                            <li class="list-group-item" href="test">
                                <span style="vertical-align: middle; padding-right: 5px; color: #28a745;" class="fa fa-bell"></span>
                                <span style="vertical-align: middle;">
                                    <a href="{{ $unread->data['url'] }}" class="text-muted">
                                        {{ $unread->data['message'] }}
                                        {{ $unread->markAsRead() }}
                                    </a>
                                </span>

                                <div class="pull-right">
                                    <span style="padding-left: 10px; vertical-align: middle;">{{ $unread->created_at->diffForHumans() }}</span>

                                    <a style="vertical-align: middle; padding-left: 15px;" href="">
                                        <span class="text-muted fa fa-check"></span>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @else
                <div class="blankslate">
                    <span class="mega-octicon octicon-bell blankslate-icon"></span>
                    <h3>No notifications</h3>
                    <p>You've read all your notifications. Good job!</p>
                </div>
            @endif
        </div> {{-- /Content --}}
    </div>
@endsection
