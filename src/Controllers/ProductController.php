<?php

namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;


class ProductController {

    private $category;
    private $product;
    public function __construct(){
        $this->category = new Category();
        $this->product = new Product();
    }

    public function create(){
        $categories= $this->category->getAll();
        require __DIR__ ."/../Views/products/create.php";
    }

    public function store(){
        $data= $_POST;
        $this->product->create($data);

        print("create");
        
    }

    public function list(){
        $datos=$this->product->list();
        require __DIR__ ."/../Views/products/crudproducts.php";

        print("list");


    }
    public function edit($id){
        print_r($id);
    }

}