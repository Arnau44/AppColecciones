<?php

namespace App\Http\Controllers;

use App\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::all();
        return view('public.listCollection', ['collections' => $collections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('self.newCollection');

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
        $newimage->storeImagecollection($request, $collection->id);
        }

        return redirect('home/'.$collection->category_id.'/collections');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {
       // $items = $collection->items();
        $comments = $collection->comments();
        return view('self.myCollection', ['collection' => $collection, 'comments'=>$comments]);
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
        return redirect('home/'.'myCollections');
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
        return redirect('home'.'/myCollections');
    }
}
