<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $books = Book::all();

        return view('libreria', compact('books'));
    }

    public function create(Request $request)
    {
        $imageName = 'default.jpg';

    // Validazione dei dati
    $dati = $request->validate([
        'nome' => 'required|string|max:255',
        'autore' => 'required|string|max:255',
        'img' => 'image' // Assicura che 'img' sia un'immagine e che la dimensione sia inferiore a 2MB
    ]);

    // Se è stata caricata un'immagine
    if ($request->hasFile('img')) {
        $image = $request->file('img');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img'), $imageName);
        // Ora $imageName contiene il nome del file dell'immagine caricata
    } 

    // Creazione del libro
    $book = new Book();
    $book->nome = $request->input('nome');
    $book->autore = $request->input('autore');
    $book->img = $imageName;
    $book->save();

    return redirect('libreria')->with('success','Libro caricato!');



    }

    public function modifica($id){
        $book = Book::find($id);

        return view('modifica', compact('book'));
    }

    public function update(){
        
    }


    public function delete($id){
        Book::where($id)->fid();

        return redirect('libreria')->with('success','Libro Eliminato con Successo!');

    }
}
