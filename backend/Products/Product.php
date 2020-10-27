<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use Illuminate\Support\Facades\DB;

    class Product extends Model
    {   
        private $id;
        private $name;
        private $description;
        private $imgPath;
        private $stock;
        private $link;

        function __construct($name, $description, $imgPath, $stock, $link)
        {
            $this->name = $name;
            $this->description = $description;
            $this->imgPath = $imgPath;
            $this->stock = $stock;
            $this->link = $link;
        }

        //Getters
        public function getId() {
            return $this->id;
        }
        public function getName() 
        {
            return $this->name;
        }
        public function getDesc() 
        {
            return $this->description;
        }
        public function getImgPath() 
        {
            return $this->imgPath;
        }
        public function getStock()
        {
            return $this->stock;
        }
        function getLink() 
        {
            return $this->link;
        }

        //Product display methods
        public function print()
        {
            
        }

        //Product table management methods
        public function addProductToDB()
        {

            $array;
            $array['cod_shop'] = 'ZAR';
            $array['nombre'] = $this->getName();
            $array['descripcion'] = $this->getDesc();
            $array['imagen'] = $this->getImgPath();
            $array['link'] = $this->getLink();
            $array['cantidad'] = $this->getStock();

            DB::table('products')->insert($array);                                              

            //command to insert into database
        }
        public function deleteProductFromDB()
        {

        }
        public function modifyStock($newStock)
        {
            $this->$stock = $newStock;
        }
    }
