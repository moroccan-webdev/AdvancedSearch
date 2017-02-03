<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;

class HomeController extends Controller
{
    public function search($text){
      $picture = Picture::where('name', 'like', '%'.$text.'%')->paginate(10); //works great

      $pictureTags = Picture::whereHas('tags', function($query) use ($text){
      return $query->where('name', 'like', '%'.$text.'%');//'name',$text
    })->paginate(10);

      $pictureCategories = Picture::whereHas('category', function($query) use ($text){
      return $query->where('name',$text);
      })->paginate(10);

      $total = $picture->total() + $pictureTags->total() + $pictureCategories->total();
      //dd($total);
      //merging all the results in one variable
      $items = array_merge($picture->items() ,$pictureTags->items() ,$pictureCategories->items());
      //dd($items);
      $itemsCollection = collect($items)->unique();
      //dd($itemsCollection);
      //get the current page from length aware paginator
      $currentPage = \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage();
      //dd($currentPage);
      $count = count($itemsCollection) == 0 ? 1 : count($itemsCollection) ;//hardcoded by 10 in $page
      // new instance of the object LengthAwarePaginator
      $page = new \Illuminate\Pagination\LengthAwarePaginator($itemsCollection, $total, 10, $currentPage);

      return view('welcome', compact('page','text'));
    }
}
