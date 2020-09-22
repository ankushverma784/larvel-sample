<?php
  
namespace App\Http\Controllers;
   
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
  
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
    
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required',
            'title' => 'required',
            'description' => '',
            'city' => 'required',
            'image' => '',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'no_of_days' => '',
        ]);
            

        // $image = $request->file('image');
        // $extension = $image->getClientOriginalExtension();
        // $originalname = $image->getClientOriginalName();
        // $path = $image->storeAs('', $originalname);
        // $mimetype = $image->getClientMimeType();

        // $picture = new mediaLibrary();
        // $picture->mime = $mimetype;
        // $picture->original_filename = $originalname;
        // $picture->filename = $path;   
        // $picture->save();

 
        Product::create($request->all());
     
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');



    }
    
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $product->update($request->all());
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // $product->delete();
    
        // return redirect()->route('products.index')
        //                 ->with('success','Product deleted successfully');
    }
}