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
    <td><a href="javascript:;" data-toggle="modal" data-target="#modal_checking_log">{{$pfr->tracking_last}}</a></td>
    <td>
        <span class="statuspfr status-{{$pfr->status_name}}">{{$pfr->status_name}}</span>
    </td>
    <td>
        @if($pfr->is_pending)
            <a href="javascript:;" class="pfr_action button-approved radius_4" data-type="approve" data-id="{{$pfr->id}}">APPROVE</a>
            <a href="javascript:;" class="pfr_action button-cancel radius_4" data-type="cancel" data-id="{{$pfr->id}}">CANCEL</a>
        @else
            @if(!Auth::user()->is_agency)
                <a href="javascript:;" class="deletestyle1 delete" data-url="{{route('pfr.move_to_trash', $pfr->id)}}" data-title="Delete"><i class="fas fa-trash"></i></a>
            @endif
        @endif
    </td>
</tr>