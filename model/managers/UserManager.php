<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;
    use Model\Managers\UserManager;

    class UserManager extends Manager{

        protected $className = "Model\Entities\User";
        protected $tableName = "User";


        public function __construct(){
            parent::connect();
        }



        public function checkPass($pseudo) 
        {
            $sql = "SELECT u.password
                    FROM ".$this->tableName." u 
                    WHERE u.pseudo = :pseudo";
            
            return 
            $this->getOneOrNullResult(
                DAO::select($sql, ['pseudo' => $pseudo], false), 
                $this->className
            );
        }

        public function findUserByPseudo($pseudo) 
        {
            $sql = "SELECT 
                        u.id_user,
                        u.pseudo,
                        u.role,
                        u.password,
                        u.registration_date
                    FROM ".$this->tableName." u
                    WHERE u.pseudo = :pseudo";
                    
            return $this->getOneOrNullResult(
            DAO::select($sql, ['pseudo' => $pseudo], false), 
            $this->className
            );
        }

    }