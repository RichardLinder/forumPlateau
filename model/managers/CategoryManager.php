<?php

// chaqu'un des fichier de la classe manageur on pour vocation de donné au entité les méthode de manager 
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;
    use Model\Managers\CategoryManager;

    class CategoryManager extends Manager{

        protected $className = "Model\Entities\Category";
        protected $tableName = "Category";

        public function __construct(){
            parent::connect();
        }


    }