<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Redirect, Storage;

class BookController extends Controller
{   
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $books = Book::select(
                        'books.*', 
                        'author.first_name',
                        'author.last_name',
                        'author.middle_name',
                        'category.name',
                    )
                    ->join('author', 'author.id', 'books.author_id')
                    ->join('category', 'category.id', 'books.category_id')
                    ->get(); 

        return view('book.index')->withBooks($books);
    }

    public function create()
    {
        return view('book.create')->with([
            'authors' => Author::all(),
            'categories' => Category::all()
        ]);
    }

    public function create_save()
    {
        $img_name = strtotime(date('Y-m-d'))
            .'_'.rand(11111,99999)
            .'.'.$this->request->img->extension();

        /**
         * putFileAs(path, image object, image name);
         */
        Storage::disk('public')->putFileAs(
            'books',
            $this->request->img,
            $img_name
        );

        $this->request->merge([
            'image' => 'books/'.$img_name
        ]);

        Book::create(
            $this->request->except('_token')
        );

        return Redirect::route('book.home');
    }
}
