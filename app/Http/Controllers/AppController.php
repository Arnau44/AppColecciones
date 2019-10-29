<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Collection;

class AppController extends Controller
{

    // HOME PUBLIC VIEW APP
    public function vueHome()
    {
        return view ('app.public.home');
    }
    public function collectionShow()
    {
        return view ('app.public.collection');
    }


    public function apiHome() {

        //TODO IF AUTH ONLY USER CATEGORIES

        $categories = Category::all();

        // foreach ($categories as $category) {
        //     $category['collections'] = $category->collections;

        // }

        return $categories;
    }
    // TODO AT MODEL
    public function apiCategoriesFromUser(User $user) {

    }

    public function apiCollectionsByCotegory(Category $category) {

        //TODO IF AUTH ONLY USER CATEGORIES

        $collections = $category->collections;

        // foreach ($categories as $category) {
        //     $category['collections'] = $category->collections;

        // }

        return $collections;
    }

    public function apiCollectionShow(Collection $collection) {

        //RETURN ITEMS FROM COLLECTION



        // foreach ($categories as $category) {
        //     $category['collections'] = $category->collections;

        // }

        return $items;
    }

    public function apiCollectionsFromCategories(Array $categories){

    }
}

