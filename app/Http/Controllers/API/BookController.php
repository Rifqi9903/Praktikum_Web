<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;
class BookController extends Controller
{
    public function books(){
        try{
            $books=Book::all();
            return response()->json([
                'mesage'=>'Success',
                'books'=>$books,
            ],200);
        }catch(Exception $e){
            return response()->json([
              'message'=>'Request Failed',
            ],401);
        }
    }
    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:155',
            'year' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'publisher' => 'required|max:100',
            'city' => 'required|max:75',
            'quantity' => 'required|numeric|min:1|max:100',
            'bookshelf_id' => 'required',
            'cover' => 'nullable|image',
        ]);        
        if($request->hasFIle('cover')){
            $path=$request->file('cover')->storeAs(
                'public/cover_buku',
                'cover_buku_'.time().'.'.$request->file('cover')->extension()
            );
            $validated['cover']=basename($path);
        }
        $book=Book::create($validated);
        return response()->json([
          'message'=>'buku berhasil ditambahkan',
           'book'=>$book,
        ],200);
    }
    public function update(Request $request, string $id){
        $book=Book::find($id);
        if($request->method()=='PUT'){
            $validated = $request->validate([
                'title' =>'required|max:255',
                'author' =>'required|max:155',
                'year' =>'required|digits:4|integer|min:1900|max:'. date('Y'),
                'publisher' =>'required|max:100',
                'city' =>'required|max:75',
                'quantity' =>'required|numeric|min:1|max:100',
                'bookshelf_id' =>'required',
                'cover' => 'nullable|image',
            ]);
        }else{
            $validated = $request->validate([
                'title' => 'sometimes|max:255',
                'author' => 'sometimes|max:155',
                'year' => 'sometimes|digits:4|integer|min:1900|max:' . date('Y'),
                'publisher' => 'sometimes|max:100',
                'city' => 'sometimes|max:75',
                'quantity' => 'sometimes|numeric|min:1|max:100',
                'bookshelf_id' => 'sometimes',
                'cover' => 'nullable|image',
            ]);
        }
        if($request->hasFile('cover')){
            if($book->cover!=null){
                Storage::delete('public/cover_buku/'.$request->old_cover);
            }
            $path=$request->file('cover')->storeAs(
                'public/cover_buku',
                'cover_buku_'.time().'.'.$request->file('cover')->extension()
            );
            $validated['cover']=basename($path);

        }
        
        Book::where('id',$id)
        ->update($validated);
         $res=Book::find($id);
             return response()->json([
                'message'=>'buku berhasil diubah',
                'book'=>$res,
        ],200);
    }

    public function destroy(string $id){
        $book=Book::findOrFail($id);
        if($book->cover!=null){
            Storage::delete('public/cover_buku/'.$book->cover);
        }
        $book->delete();
        return response()->json([
          'message'=>'buku berhasil dihapus',
        ],200);
    }
    
}
