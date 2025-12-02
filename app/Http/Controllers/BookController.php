<?php

    namespace App\Http\Controllers;

    use App\Models\Book;

    class BookController extends Controller
    {
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $books = Book::all(); // Retrieve all books from the database
            return response()->json($books); // Return books as JSON
        }
    }
