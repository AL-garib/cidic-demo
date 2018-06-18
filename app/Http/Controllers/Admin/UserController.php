<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return view('admin.users.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('admin.users.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    return "STORE";
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    return view('admin.users.show');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    return view('admin.users.edit');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    return "UPDATED";
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    return "BOOOM !!";
  }

  /**
   * Get All The Poster To Late Datatable Handle It
   * 
   * 
   */

  public function get_datatable()
  {

  //   return datatables()->of(User::withCount(['posters'])->get())
  //     ->addColumn(
  //       'action',
  //       '<a class="btn bttn-material-flat bttn-xs bttn-success" href="{{route("user.edit",$id)}}"><i class="fa fa-paste fa-xs"></i></a>
  //       <a class="btn bttn-material-flat bttn-xs bttn-info" href="{{route("user.show",$id)}}"><i class="fa fa-eye fa-xs"></i></a>
  //       <form data-remote action="{{ route("user.destroy",$id) }}" method="POST" class="deleted inline-form">
	// 							@csrf
  //               {{ method_field("DELETE") }}
  //               <button type="submit" class="btn bttn-material-flat bttn-xs bttn-danger">
  //               <i class="fa fa-trash fa-md"></i>
  //               </button>
  //       </form>
  //       '
  //     )->addColumn('created_at', function ($user) {

  //       return "<label class='label label-info'>" . $user->created_at->format('Y-m-d') . ' ' . $user->created_at->diffForHumans() . "</label>";

  //     })->addColumn('awereded', function ($user) {

  //       return '<span class="badge badge-secondary">' . number_format($user->awereded) . "xp</span>";

  //     })->addColumn('role', function ($user) {

  //       return "<label class='label label-primary'>" . $user->roles()->pluck('name')->implode(' ') . "</label>";

  //     })->addColumn('costamIs_type', function ($user) {

  //       return $user->is_type ? "معروض" : "طلب";

  //     })->escapeColumns([])->make(true);
  // }

}

