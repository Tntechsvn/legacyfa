 <tr>
    <td>{{$pfr->id}}</td>
    <td><a href="{{$pfr->permalink()}}">{{$pfr->nameClient}}</a></td>
    <td>{{$pfr->nameUserAdd}}</td>
    <td>{{$pfr->createDate}}</td>
    <td>{{$pfr->typePfr}}</td>
    <td>Admin</td>
    <td>March 17, 2020</td>
    <td><a href="{{route('downloadpdf',$pfr->id)}}">Download as PDF</a></td>
    <td><a href="javascript" data-toggle="modal" data-target="#modal_checking_log">Last Edit 4 year</a></td>
    <td>
        <span class="statuspfr status-pending">PENDING</span>
        <span class="statuspfr status-draft">DRAFT</span>
        <span class="statuspfr status-approved" >APPROVED</span>
        <span class="statuspfr status-cancelled" >CANCELLED</span>
    </td>
    <td>
        <button class="button-approved radius_4">APPROVED</button>
        <button class="button-cancel radius_4">CANCEL</button>
        <a href="javascript:;" class="deletestyle1 delete" data-url="{{route('pfr.move_to_trash', $pfr->id)}}" data-title="Delete"><i class="fas fa-trash"></i></a>
    </td>
</tr>