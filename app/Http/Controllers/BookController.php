<?php

namespace foobooks\Http\Controllers;

use foobooks\Http\Controllers\Controller;

class BookController extends Controller {

    /**
    * Responds to requests to GET /books
    */
    public function getIndex() {
        return 'List all the books';
    }

    /**
     * Responds to requests to GET /books/show/{id}
     */
    public function getShow($title = null) {
        #return 'Show book: '.$title;
        return view('books.show', ['title' => $title, 'abc' => '123']);
    }

    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {
        $view = "<form method='POST' action='/book/create'>";
        $view .= csrf_field();
        $view .= "Book Title: <input type='text' name='title'>";
        $view .= "<input type='submit'>";
        $view .= "</form>";

        return $view;
    }

    /**
     * Responds to requests to POST /books/create
     */
    public function postCreate() {
        return 'Adding book: '.$_POST['title'];
    }
}
