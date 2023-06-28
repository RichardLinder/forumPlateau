<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;
    use Model\Managers\userManager;

    class UserManager extends Manager{

        protected $className = "Model\Entities\User";
        protected $tableName = "User";


        public function __construct(){
            parent::connect();
        }


    }