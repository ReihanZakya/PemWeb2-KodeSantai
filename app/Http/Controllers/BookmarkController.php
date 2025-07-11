<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($module_id)
    {
        $user = Auth::user();

        $existing = Bookmark::where('user_id', $user->id)
                            ->where('module_id', $module_id)
                            ->first();
    
        if ($existing) {
            return back()->with('info', 'Sudah ditambahkan ke bookmark.');
        }
    
        Bookmark::create([
            'user_id' => $user->id,
            'module_id' => $module_id
        ]);
    
        return back()->with('success', 'Bookmark berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookmark = Bookmark::findOrFail($id);
        
        if ($bookmark->user_id == Auth::id()) {
            $bookmark->delete();
            return back()->with('success', 'Bookmark berhasil dihapus.');
        }

        return back()->with('error', 'Tidak diizinkan.');
    }
}
