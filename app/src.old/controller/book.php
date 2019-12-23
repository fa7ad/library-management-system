<?php


class book{

    public function __construct()
    {
        $this->model = new book_model();
    }
    public function index(){
        $bookDetail = $this->model->bookDetail();
        $data['book'] = $bookDetail;

        $data['page_title'] = "Library : Book";
        $data['view_page'] = "users/books";
        $data['header'] = $GLOBALS['header'];
        $data['footer'] = $GLOBALS['footer'];

        return $data;
    }
    public function book_detail(){
        $book_id = $_GET['book_id'];
        print_r($book_id);
        die();
        $data['page_title'] = "Library : Book";
        $data['view_page'] = "users/books";
        $data['header'] = $GLOBALS['header'];
        $data['footer'] = $GLOBALS['footer'];

        return $data;
    }

}