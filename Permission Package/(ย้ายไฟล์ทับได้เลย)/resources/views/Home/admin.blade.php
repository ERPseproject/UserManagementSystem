@extends('layouts.app')
<style>
    .main
 {
   /* background-color: #8B0000; */
 padding-top: 5%;
 padding-bottom: 5%;
 }
    </style>
@section('content')
<div class="container">     
  <table class="table table-bordered">
    <br>
    <thead>
        <h1>User Management System</h1>
      <tr>
        <th>Name</th>        
        <th>Project System</th>        
        <th>Machine System</th>        
        <th>Research System</th>
        <th>Activation Status</th>
        {{-- <th>Roles</th>    --}}    
      </tr>      
    </thead>
    <tbody>
        <div class='form-group'>
</div>
        @foreach($users as $row)       
            <tr>    
                <tbody>           
                    <td>{{$row['name']}} <br>
                        @if($row->can('disabled'))
                        (Inactive)
                        @endif
                        <br></td>                              
                    <td>
                        {{-- Project SYSTEM --}}
                    @if($row->can('edit_project'))
                        <a href="{{ route('admin.revokeP', $row['id']) }}">
                            <button type="submit" name="revokeP" class="btn btn-danger" id="getPermB">Edit</button>
                        </a>
                    @else
                        <a href="{{ route('admin.givePerm', $row['id']) }}">
                            <button type="submit" name="giveP" class="btn btn-success">Edit</button>
                        </a>                       
                    @endif
                    @if($row->can('remove_project'))
                        <a href="{{ route('admin.revoke_removeP', $row['id']) }}">
                            <button type="submit" name="revokeP" class="btn btn-danger" id="getPermB">Remove</button>
                        </a>
                    @else
                        <a href="{{ route('admin.removeP', $row['id']) }}">
                            <button type="submit" name="giveP" class="btn btn-success">Remove</button>
                        </a>
                    @endif                     
                    </td>
                    {{-- Machine SYSTEM --}}
                    <td>
                    @if($row->can('edit_machine'))
                        <a href="{{ route('admin.revokeM', $row['id']) }}">
                            <button type="submit" name="revokeP" class="btn btn-danger" id="getPermB">Edit</button>
                        </a>
                    @else
                        <a href="{{ route('admin.giveM', $row['id']) }}">
                            <button type="submit" name="giveP" class="btn btn-success">Edit</button>
                        </a>                       
                    @endif
                    @if($row->can('remove_machine'))
                        <a href="{{ route('admin.revoke_removeM', $row['id']) }}">
                            <button type="submit" name="revokeP" class="btn btn-danger" id="getPermB">Remove</button>
                        </a>
                    @else
                        <a href="{{ route('admin.removeM', $row['id']) }}">
                            <button type="submit" name="giveP" class="btn btn-success">Remove</button>
                        </a>
                    @endif                     
                    </td>
                    {{-- Research SYSTEM --}}
                    <td>
                    @if($row->can('edit_research'))
                        <a href="{{ route('admin.revokeR', $row['id']) }}">
                            <button type="submit" name="revokeP" class="btn btn-danger" id="getPermB">Edit</button>
                        </a>
                    @else
                        <a href="{{ route('admin.giveR', $row['id']) }}">
                            <button type="submit" name="giveP" class="btn btn-success">Edit</button>
                        </a>                       
                    @endif
                    @if($row->can('remove_research'))
                        <a href="{{ route('admin.revoke_removeR', $row['id']) }}">
                            <button type="submit" name="revokeP" class="btn btn-danger" id="getPermB">Remove</button>
                        </a>
                    @else
                        <a href="{{ route('admin.removeR', $row['id']) }}">
                            <button type="submit" name="giveP" class="btn btn-success">Remove</button>
                        </a>
                    @endif                     
                    </td>
                    <td>
                    @if($row->can('disabled'))                        
                        <a href="{{ route('admin.disR', $row['id']) }}">
                            <button type="submit" name="revokeP" class="btn btn-success" id="getPermB">Active</button>
                        </a>
                    @else
                        <a href="{{ route('admin.dis', $row['id']) }}">
                            <button type="submit" name="giveP" class="btn btn-danger">Inactive</button>
                        </a>
                    @endif   
                    </td>                             
                </tbody>
            </tr> 
            @endforeach       
    </table>
</div>
@endsection
@section('footer')
@endsection
