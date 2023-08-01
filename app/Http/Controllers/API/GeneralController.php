<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;

class GeneralController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    // get all permissions
    public function getAllPermissions(Request $request)
    {
        $permissions = Permission::whereNotNull('module')->orderBy('position_order', 'asc')->get();
        $modules = collect($permissions)
        ->groupBy('module');
        $result = [];
        foreach($modules as $module)
        {
            array_push($result, [
                "module" => $module[0]['module'] ?? '',
                "permissions" => collect($module)->sortBy('permission_order')->values(),
            ]);
        }
        return $result;
    }

   //  get all roles
   public function getAllRoles(Request $request)
   {
       //
       //Declare a global variable with relation orders!
       $role=Role::with('permissions');
       //Check if there is any search value
       if($request->search!=""){
           $role->where( 'name', 'LIKE', '%' . $request->search . '%' );
       }
       //Check in any type of sorting
       if($request->sortBy!=""){
           //If the sorting is not related to Relations
           $role=$role->orderBy($request->sortBy, ($request->sortDesc=="true")?"desc":"asc");
       }else{
           //Default Sorting
           $role=$role->orderBy("id", "desc");
       }
       //Pagination
       if(isset($request->numRows) && $request->numRows>0){
           return $role->paginate($request->numRows);
       }else{
           return $role->get();
       }
   }

    //    Get Settings Data
   public function getSetting(Request $request)
    {
        //
        return Setting::first();
    }

}
