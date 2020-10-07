<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Image;
use App\Informations;
use App\User;
use DB;


class DashboardController extends Controller
{
    public function __construct()
    {
        # checkt bij alle functies of hij/zij is ingelogd en een admin is
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        $fillings = Informations::all();

        return view('admin.dashboard', compact('fillings'));
    }

    public function create() {

        return view('admin.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'required',
            'text' => 'required',
            
        ]);

        $store = new Informations();
        
        $store->title  = request('title');
        $store->text  = request('text');
 
        $store->save();

        return redirect('/admin/dashboard'); 
    }

    public function Edit($id)
    {
        $edit = Informations::find($id);

        return view('admin.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {

        $data = request()->validate([
            'text' => 'required',
            'title' => 'required',            
        ]);

        $change = Informations::find($id);

        $change->title = $request->input('title');
        $change->text = $request->input('text');

        $change->save();

        return redirect('/admin/dashboard');
    }

    public function delete($id)
    {
        $Del = Informations::find($id);
        $Del->delete();
        return redirect('/admin/dashboard');
    }

}
