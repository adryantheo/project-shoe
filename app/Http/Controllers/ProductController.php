<?php

    namespace App\Http\Controllers;

    use App\Product;
    use Illuminate\Http\Request;

    //Controller Produk

    class ProductController extends Controller
    {
        //Fungsi untuk Menampilkan Semua Data Produk
        public function index()
        {
            return response()->json(Product::all(),200);
        }

        //Fungsi untuk Menambahkan Produk
        public function store(Request $request)
        {
            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'units' => $request->units,
                'price' => $request->price,
                'image' => $request->image
            ]);

            return response()->json([
                'status' => (bool) $product,
                'data'   => $product,
                'message' => $product ? 'Product Created!' : 'Error Creating Product'
            ]);
        }

        //Fungsi untuk Menampilkan Produk yang Dipilih
        public function show(Product $product)
        {
            return response()->json($product,200); 
        }

        //Fungsi Untuk Mengupload Gambar Produk
        public function uploadFile(Request $request)
        {
            if($request->hasFile('image')){
                $name = time()."_".$request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('images'), $name);
            }
            return response()->json(asset("images/$name"),201);
        }

        //Fungsi Untuk Melakukan Update/ Edit Pada Nama/ Deskripsi/ Stok/ Harga/ Gambar
        public function update(Request $request, Product $product)
        {
            $status = $product->update(
                $request->only(['name', 'description', 'units', 'price', 'image'])
            );

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Product Updated!' : 'Error Updating Product'
            ]);
        }

        //Fungsi untuk Melakukan Update/ Edit pada Stok tertentu
        public function updateUnits(Request $request, Product $product)
        {
            $product->units = $product->units + $request->get('units');
            $status = $product->save();

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Units Added!' : 'Error Adding Product Units'
            ]);
        }

        //Fungsi Untuk Menghapus Produk
        public function destroy(Product $product)
        {
            $status = $product->delete();

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Product Deleted!' : 'Error Deleting Product'
            ]);
        }
    }