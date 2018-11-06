<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        die('asd');
        // Get data image
        $query = Image::query();
                $query->where('image_active', 1);
                // $query->where('image_path', null);
                if (!empty($_GET)) {
                    foreach ($_GET as $key => $get) {
                        $query->where($key, $get);
                    }
                }

        $data = $query->get();
        
        $images = [];
        // loop throught data
        foreach ($data as $key => $image) {
            // collect images
            $images[$key]['url'] = "storage/" . $image->image_name;
            if ($image->image_path != null) {
                $images[$key]['url'] = "storage/" 
                    . $image->image_path 
                    . "/" 
                    .$image->image_name;
            }
            $images[$key]['id'] = $image->id;
        }

        // return view
        return view('images.index', compact('images'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        // Check if has file
        if (!$request->hasFile('image_name')) {
            return back()
                ->with('danger', 'Please select an image.');    
        }

        $images = $request->image_name;
        $path = 'public';

        if (!empty($request->get('image_path'))) {
            $path = 'public/' . $request->get('image_path');
        }

        foreach ($images as $key => $image) {
            // get image name
            $imageName = $image->getClientOriginalName();
            
            // Save image
            $image->storeAs($path,$imageName);

            // get all request
            $image = $request->all();

            // image name
            $image['image_name'] = $imageName;

            // save data to database
            Image::create($image);
        }
        return back()
            ->with('success','You have successfully upload image.');
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
        //
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
        //
    }
}
