<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadImageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = $request->file('image')->storePublicly('images', 'public');
        $fullPath = 'storage/' . $path;
        return response()->json([
            'status' => 201,
            'path' => $fullPath,
            'message' => 'Image uploaded',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $path = str_replace('storage/', 'public/', $request->path);
        if (!$path || !Storage::exists($path)) {
            return response()->json([
                'status' => 404,
                'message' => 'Image not found',
            ]);
        }

        Storage::delete($path);

        return response()->json([
            'status' => 200,
            'message' => 'Image deleted',
        ]);
    }
}
