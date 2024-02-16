<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#@
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use Illuminate\Support\Facades\DB;
#@
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // function show()
    // {
    //     // $usersz = User::find($id);
    //     return view('home.admin')
    //     ->with('usersz', 'User::find($id)');
    // }
    // public function getIDD($id)
    // {
    //     $userszx = User::find($id);
    //     return view('home.admin')
    //     ->with('userszx', User::find($id));
    // }
    // public function index()
    // {

    //     $users = User::all();
    //     return view('Home.admin',
    //     [
    //     'users' => $users,
    //     ]);   
    // }
    // public function index()
    // {

    //     $users = User::all();                                                
    //     return view('Home.admin', compact('users'));   
    // }
    public function index()
    {

        $users = User::all(); 
        if(auth()->user()->hasRole("admin"))
          {
              return view('Home.admin', compact('users'));  
          }
            else    
          {
              return view('welcome');
          }                                                    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function givePerm($id)
    {   
        $userss = User::find($id);        
        $userss->givePermissionTo('edit_project');
        // $userss->assignRole('admin');
        return redirect('admin')->with('success', true)->with('message','That was great!');
    }

    public function revokeP($id)
    {   
        $userss = User::find($id);        
        $userss->revokePermissionTo('edit_project');
        // $userss->assignRole('admin');
        return redirect('admin');
    }
    public function removeP($id)
    {   
        $userss = User::find($id);        
        $userss->givePermissionTo('remove_project');
        // $userss->assignRole('admin');
        return redirect('admin');
    }
    public function revoke_removeP($id)
    {   
        $userss = User::find($id);        
        $userss->revokePermissionTo('remove_project');
        // $userss->assignRole('admin');
        return redirect('admin');
    }
///////////////////////////////////////////////////////////////////
    public function dis($id)
    {   
        $userss = User::find($id);        
        $userss->givePermissionTo('disabled');
        // $userss->assignRole('admin');
        return redirect('admin');    
    }
    public function disR($id)
    {   
        $userss = User::find($id);        
        $userss->revokePermissionTo('disabled');
        // $userss->assignRole('admin');
        return redirect('admin');
    }
///////////////////////////////////////////////////////////////////    
    public function giveM($id)
    {   
        $userss = User::find($id);        
        $userss->givePermissionTo('edit_machine');
        // $userss->assignRole('admin');
        return redirect('admin');    
    }

    public function revokeM($id)
    {   
        $userss = User::find($id);        
        $userss->revokePermissionTo('edit_machine');
        // $userss->assignRole('admin');
        return redirect('admin');
    }
    public function removeM($id)
    {   
        $userss = User::find($id);        
        $userss->givePermissionTo('remove_machine');
        // $userss->assignRole('admin');
        return redirect('admin');
    }
    public function revoke_removeM($id)
    {   
        $userss = User::find($id);        
        $userss->revokePermissionTo('remove_machine');
        // $userss->assignRole('admin');
        return redirect('admin');
    }
///////////////////////////////////////////////////////////////////
    public function giveR($id)
    {   
        $userss = User::find($id);        
        $userss->givePermissionTo('edit_research');
        // $userss->assignRole('admin');
        return redirect('admin');
    }

    public function revokeR($id)
    {   
        $userss = User::find($id);        
        $userss->revokePermissionTo('edit_research');
        // $userss->assignRole('admin');
        return redirect('admin');   
    }
    public function removeR($id)
    {   
        $userss = User::find($id);        
        $userss->givePermissionTo('remove_research');
        // $userss->assignRole('admin');
        return redirect('admin');
    }
    public function revoke_removeR($id)
    {   
        $userss = User::find($id);        
        $userss->revokePermissionTo('remove_research');
        // $userss->assignRole('admin');
        return redirect('admin');
    }
///////////////////////////////////////////////////////////////////
    public static function getID($id)
    {   
        $usersss = User::find($id);
        return view('Home.admin', compact('usersss'));                                  
    }
    public function getID2(Request $request)
    {   
        $userID = $request->input('name');                                  
    }
///////////////////////////////////////////////////////////////////
    public function alertP()
    {   

      return redirect()->route('admin')->with('jsAlert', 'updated succesfully');


    }
///////////////////////////////////////////////////////////////////
}


