<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Symfony\Component\HttpFoundation\Response;
use App\Models\Image;
use App\Http\Resources\ImageCollection;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageSize = $request->page_size ?? 10;

        $response = Image::orderBy('updated_at', 'DESC')->paginate($pageSize);
        $response = new ImageCollection($response);

        return $response;
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'between:1,200'],
            'enable' => 'required|boolean',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
                $imageName = time().'.'.$request->file->extension();
                $path = Storage::putFileAs('images', $request->file('file'), $imageName);

                $image = Image::create([
                    'name' => $request->name,
                    'file' => 'storage/'.$path,
                    'enable' => $request->enable,
                ]);
            
                $response = [
                    'message' => 'Image success created',
                    'data' => $image
                ];

                return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $image = Image::findOrFail($id);
        
            $response = [
                'message' => 'Detail data Image',
                'data' => $image
            ];
            $httpResponse = Response::HTTP_OK;
            
            return response()->json($response, $httpResponse);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], Response::HTTP_NOT_FOUND);
        }
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
        try {
            $image = Image::findOrFail($id);

            try {
                $image->delete();

                $response = [
                    'message' => 'Image success deleted'
                ];

                return response()->json($response, Response::HTTP_OK);
            } catch (QueryException $e) {
                return response()->json([
                    'message' => "Failed" . $e->errorInfo
                ]);
            }
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateFile(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'between:1,200'],
            'enable' => 'required|boolean',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $image = Image::findOrFail($id);
            try {
                $image->update($request->all());
                $imageName = time().'.'.$request->file->extension();
                $path = Storage::putFileAs('images', $request->file('file'), $imageName);

                $image->update([
                    'name' => $request->name,
                    'file' => 'storage/'.$path,
                    'enable' => $request->enable,
                ]);
            
                $response = [
                    'message' => 'Image success updated',
                    'data' => $image
                ];

                return response()->json($response, Response::HTTP_CREATED);
            } catch (QueryException $e) {
                return response()->json([
                    'message' => "Failed" . $e->errorInfo
                ]);
            }
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], Response::HTTP_NOT_FOUND);
        }
    }

}
