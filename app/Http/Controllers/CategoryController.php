<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    private $category;

    public function __construct(Categories $category)
    {
        $this->category = $category;
    }

    public function ProductByCategory($category_id)
    {
        $cate = Product::where('category_id', $category_id)->with('category')->get();
        //dd($cate);
        return view('pages.productlist', compact('cate'));
    }

    public function adminIndexCate()
    {
        $cate = $this->category->latest()->simplePaginate(5);
        return \view('admin.category.indexCate')->with('categories', $cate);
    }

    public function adminCreateCate()
    {
        return \view('admin.category.addCate');
    }

    public function store(Request $request)
    {
        $this->category->create([
            'name' => $request->name
        ]);
        // $categories = new \Categories();
        // $categories->name = $request->name;
        // $categories->save();
        return \redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = $this->category->find($id);
        return \view('admin.category.editCate', \compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->category->find($id)->update(
            ['name' => $request->name]
        );
        return \redirect()->route('categories.index');
    }

    public function delete($id)
    {
        $this->category->find($id)->delete();
        return \redirect()->route('categories.index');
    }
}
