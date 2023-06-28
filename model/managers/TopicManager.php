<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;
    use Model\Managers\TopicManager;

    class TopicManager extends Manager{

        protected $className = "Model\Entities\Topic";
        protected $tableName = "topic";
        protected $id ="id";


        public function __construct(){
            $this->id =$id;
            parent::connect();
        }


    }