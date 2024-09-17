<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\FolderArchive;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArchiveController extends Controller
{
    public function index()
    {
        $user = Auth::user()->company_id;
        return view('archives.archives', [
            'folders' => FolderArchive::query()->where('company_id', '=', $user)->get(),
        ]);

//        dump($user);
    }

    public function list($id)
    {
        return view('archives.archives_list', [
            'archives' => Archive::query()
                ->where('folder_archive_id', $id)
                ->leftJoin('users', 'users.id', '=', 'archives.user_id')
                ->paginate(30),
            'folder_id' => $id,
        ]);
    }

    public function create($id)
    {
        return view('archives.archives_create', [
            'id' => $id
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'filename' => 'required|file|mimes:pdf,jpg,xls,png,jpeg,doc,txt|max:2048',
            'file_slug' => 'required|string|max:255',
            'description' => 'required',
            'folder_archive_id' => 'required',
        ]);

        $company_id = Auth::user()->company_id;

//        $filenameWithExt = $request->file('filename')->getClientOriginalName();
//        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
//        $extension = $request->file('filename')->getClientOriginalExtension();
//        $fileNameToStore= md5(uniqid()).$company_id.Auth::user()->id.time().'.'.$extension;
//        $path = $request->file('filename')->storeAs('public/images/'.$company_id, $fileNameToStore);

//        $request->validate([
//            'filename' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);

//        $imageName = $request->filename->getClientOriginalName();
//        $imagePath = 'uploads/' . $imageName;
//
//        $path = Storage::disk('idrive')->put($imagePath, file_get_contents($request->image));
//        $path = Storage::disk('idrive')->url($path);

//        Storage::disk('s3')->put('filename.txt', 'Conteúdo do arquivo');
        Storage::disk('s3')->put('example3.jgp', file_get_contents('https://cdn.pixabay.com/photo/2024/08/06/10/43/wine-8949009_1280.jpg'));

//        $contents = Storage::disk('s3_idrive')->get('filename.txt');

//        $archive = Archive::create([
//            'filename' => $fileNameToStore,
//            'file_slug' => $request->file_slug,
//            'description' => $request->description,
//            'folder_archive_id' => $request->folder_archive_id,
//            'company_id' => Auth::user()->company_id,
//            'user_id' => Auth::user()->id,
//        ]);
//
//        event(new Registered($archive));
//
//        return Redirect::to('archives/list/'.$archive->folder_archive_id);


    }

    public function search(Request $request, $folder_id)
    {
        $search = $request->get('search');
        $filter = $request->get('filter_type');

        if($filter == 1) {
            $results = Archive::where('folder_archive_id', '=', $folder_id)
                ->where('file_slug', 'like', '%' . $search . '%')
                ->get();
        }

        if($filter == 2) {
            $results = Archive::where('folder_archive_id', '=', $folder_id)
                ->where('description', 'like', '%' . $search . '%')
                ->get();
        }

        return view('archives.archives_search', [
            'archives_results' => $results,
            'folder_id' => $folder_id,
        ]);

        dump($request->filter_type);
    }

    public function edit(Archive $archive)
    {
        //
    }

    public function update(Request $request, Archive $archive)
    {
        //
    }

    public function destroy(Archive $archive)
    {
        //
    }
}
