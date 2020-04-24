 <tr>
    <td>{{$pfr->id}}</td>
    <td><a href="{{$pfr->permalink()}}">{{$pfr->nameClient}}</a></td>
    @if(!Auth::user()->is_agency)
    <td>{{$pfr->nameUserAdd}}</td>
    @endif
    <td>{{$pfr->created_at}}</td>
    <td>{{$pfr->typePfr}}</td>
    <td>{{$pfr->approved_by}}</td>
    <td>{{$pfr->approved_at}}</td>
    <td><a href="{{route('downloadpdf',$pfr->id)}}">Download as PDF</a></td>
    <td><a class="tracking_log" href="javascript:;" data-id="{{$pfr->id}}" data-url="{{route('pfr.activity')}}">{{$pfr->tracking_last}}</a></td>
    <td>
        <span class="statuspfr status-{{$pfr->status_name}}">{{$pfr->status_name}}</span>
    </td>
    <td>
        @if($pfr->is_pending)
            <a href="javascript:;" class="pfr_action button-approved radius_4" data-type="approve" data-id="{{$pfr->id}}" data-url="{{route('pfr.action')}}">APPROVE</a>
            <a href="javascript:;" class="pfr_action button-cancel radius_4" data-type="cancel" data-id="{{$pfr->id}}" data-url="{{route('pfr.action')}}">cancel</a>
        @else
            @if(!Auth::user()->is_agency)
                <a href="javascript:;" class="deletestyle1 delete" data-url="{{route('pfr.move_to_trash', $pfr->id)}}" data-title="Delete"><i class="lni lni-trash"></i></a>
            @endif
        @endif
    </td>
</tr>