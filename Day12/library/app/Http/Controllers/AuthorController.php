<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Redirect;

class AuthorController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $author = Author::all();

        return view('author.index')->withAuthor($author);
    }

    public function create()
    {
        return view('author.create');
    }

    public function update($id)
    {
        $author = Author::find($id);

        return view('author.update')->withAuthor($author);
    }

    public function update_save($id)
    {
        $author = Author::find($id);

        $author->update(
            $this->request->except('_token')
        );
       
        return Redirect::route('author.home'); 
    }

    public function delete($id)
    {
        $author = Author::find($id);

        $author->delete();
       
        return Redirect::route('author.home'); 
    }

    public function create_save()
    {
        Author::create(
            $this->request->except('_token')
        );

        return Redirect::route('author.home');
    }
}
