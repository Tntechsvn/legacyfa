<tr>
    <td>{{$key+1}}</td>
    <td>{{$dependant->title}}</td>
    <td>{{$dependant->name}}</td>
    <td>{{$dependant->relationship}}</td>
    <td>{{$dependant->birthday}}</td>
    <td>{{$dependant->age}}</td>
    <td>{{$dependant->genderDependant}}</td>
    <td>{{$dependant->year_to_support}}</td>
    <td>
        <a href="javascript:;" class="editstyle1 edit" data-id="{{$dependant->id}}" data-title1="{{$dependant->title}}" data-name="{{$dependant->name}}" data-relationship="{{$dependant->relationship}}" data-dob="{{$dependant->dob}}" data-gender="{{$dependant->gender}}" data-age="{{$dependant->age}}" data-year="{{$dependant->year_to_support}}" data-url="{{route('singlefact.dependant.edit', [$infoPfr->id, $dependant->id])}}" data-title="Edit"><i class="lni lni-pencil-alt"></i></a>
        <a href="javascript:;" class="deletestyle1 delete" data-url="{{route('singlefact.dependant.move_to_trash', [$infoPfr->id, $dependant->id])}}" data-title="Delete"><i class="lni lni-trash"></i></a>
    </td>
</tr>