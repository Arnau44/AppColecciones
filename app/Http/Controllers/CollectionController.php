<?php

namespace App\Http\Controllers;

use App\Collection;
use App\User;
use App\Image;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAuthor()
    {

        //$collections = Collection::all();
        return view('self.Collections');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('self.NewCollection');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $collection = new Collection();
        $collection->name = $request->name;
        $collection->category_id = $request->category_id;
        $collection->description = $request->description;
        $collection->user_id = Auth::user()->id;
        $collection->save();
        if($request->image){
        $newimage = new Image();
        $newimage->storeImageCollection($request, $collection->id);
        }

        return redirect('home/collections');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {

        $items = $collection->items;
        return view('public.itemsList',['collection' => $collection,
                                        'items' => $items]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {
        $categories = Category::all();
        return view('self.updateCollection', ['collection' => $collection,'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {
        if($request->image){
            $newimage = new Image();
            $newimage->storeImageCollection($request, $collection->id);
            }
            $collection->update($request->all());
        return redirect('home/'.'Collections');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection)
    {

        $collection->delete();
        return redirect()->back();
    }
}
