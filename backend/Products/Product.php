<?php
    namespace App\Models;

    use DB;

    use Illuminate\Database\Eloquent\Model;

    use Illuminate\Support\Facades\DB;

    class Product extends Model
    {   
        private $id;
        private $codShop;
        private $name;
        private $description;
        private $price
        private $stock;
        private $imgPath;
        

        function __construct($codShop, $name, $description, $price, $stock, $imgPath)
        {
            $this->codShop;
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->stock = $stock;
            $this->imgPath = $imgPath;
        }

        //Getters
        public function getCodShop() {
            return $codShop;
        }
        public function getName() {
            return $name;
        }
        public function getDescription() {
            return $description;
        }
        public function getPrice() {
            return $price;
        }
        public function getStock() {
            return $stock;
        }
        public function getImgPath() {
            return $imgPath;
        }

        //Product table management methods
        public function addProductToDB()
        {
            $array;
            $array['cod_shop'] = $this->getCodShop();
            $array['name'] = $this->getName();
            $array['description'] = $this->getDesc();
            $array['price'] = $this->getPrice();
            $array['stock'] = $this->getStock();
            $array['imgpath'] = $this->getImgPath();

            DB::table('products')->insert($array);                                              
        }
        public function deleteProductFromDB()
        {

        }
        public function modifyStock($newStock)
        {
            $this->$stock = $newStock;
        }
    }
