<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\FolderArchive;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function index()
    {
        return view('archives.archives', [
            'folders' => FolderArchive::all(),
        ]);
    }

    public function list($id)
    {
        return view('archives.archives_list', [
            'archives' => Archive::query()->where('folder_archive_id', $id)->paginate(30),
        ]);
    }

    public function create()
    {
        return view('archives.archives_create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Archive $archive)
    {
        //
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
