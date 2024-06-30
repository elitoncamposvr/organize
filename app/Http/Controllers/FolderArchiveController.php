<?php

namespace App\Http\Controllers;

use App\Models\FolderArchive;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

class FolderArchiveController extends Controller
{
    public function index()
    {
        return view('folderarchives.folder', [
            'folders' => FolderArchive::query()
                ->where('company_id', '=', Auth::user()->company_id)
                ->paginate(20),
        ]);
    }

    public function create()
    {
        return view('folderarchives.folder_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'folder_name' => ['required', 'string', 'max:150'],
            'description' => ['required', 'string', 'max:255'],
        ]);

        $folder = FolderArchive::create([
            'folder_name' => $request->get('folder_name'),
            'description' => $request->get('description'),
            'company_id' => Auth::user()->company_id,
        ]);

        event(new Registered($folder));

        return redirect(route('folderarchives.index', absolute: false));
    }

    public function show(FolderArchive $folderArchive)
    {
        //
    }

    public function edit($id)
    {
        return view('folderarchives.folder_edit', [
            'folders' => FolderArchive::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'folder_name' => ['required', 'string', 'max:150'],
            'description' => ['required', 'string', 'max:255'],
        ]);

        $folders = FolderArchive::find($id);
        $folders->update($request->all());

        return redirect(route('folderarchives.index', absolute: false));
    }

    public function destroy(Request $request)
    {
        $folder = FolderArchive::find($request->get('id'));
        $folder->delete();

        return redirect(route('folderarchives.index', absolute: false));
    }
}
