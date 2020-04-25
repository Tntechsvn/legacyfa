<div class="header">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 logo-header">
        <div class="logo">
            <a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="" title=""/></a>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 profile-header dropdown">
        <div class="noti-bell">
            <a href="#noti-user" class="dropdown-toggle"  data-toggle="collapse" data-title="Notification">
                <i class="far fa-bell"></i>
                <span class="new-noti"></span>
            </a>
        </div>
        <div class="user-header">
            <a href="javascript:;"><i class="lni lni-user"></i>{{Auth::user()->full_name}}</a>
        </div>
        <div class="logout-user">
            <a href="{{route('logout')}}"><img src="{{asset('images/logout.png')}}"  alt=""/></a>
        </div>
        <div class="panel-collapse collapse list-noti" id="noti-user">
            <ul>
                @foreach(Auth::user()->unreadNotifications as $notif)
                    @php $data = json_decode(json_encode($notif->data,true)); @endphp
                    <li>
                        <a href="javascript:;">
                            <i class="far fa-bell"></i>
                            <span class="title-noti">{{$data->data->title ?? ''}}</span>
                            <span class="time-distance">{{$notif->created_at->diffForHumans()}}</span>
                        </a>
                    </li> 
                @endforeach
            </ul>
            <div class="clear"><a href="javascript:;" class="clear-noti">Clear</a></div>
        </div>
    </div>
    <div class="clear"></div>
</div>