                <tr id="user-{{$user->id}}">
                    <td>{{$user->id}}</td>
                    <td>{{$user->full_name}}</td>
                    <td>{{$user->preferred_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->nameRole}}</td>
                    <td><!-- {{$user->status}} -->Active</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit" data-id="{{$user->id}}" data-email="{{$user->email}}" data-full-name="{{$user->full_name}}" data-preferred-name="{{$user->preferred_name}}" data-role="{{$user->role_id}}" data-url="{{route('user.edit', $user->id)}}" data-title="Edit"><i class="lni lni-pencil-alt"></i></a>
                        {{--@if(Auth::user()->levelUser < $user->levelUser && Auth::id() != $user->id)--}}
                        <a href="javascript:;" class="deletestyle1 delete" data-id="{{$user->id}}" data-url="{{route('user.move_to_trash', $user->id)}}" data-title="Delete"><i class="lni lni-trash"></i></a>
                        {{-- @endif --}}
                    </td>
                </tr>