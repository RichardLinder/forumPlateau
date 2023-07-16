<?php
    namespace Model\Entities;

    use App\Entity;

    final class User extends Entity
    {
        private int $id;
        private string $pseudo;
        private string $password;
        private $registrationDate;
        private  $role;
        


        public function __construct($data){         
                $this->hydrate($data);        
            }


        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of pseudo
         */ 
        public function getPseudo()
        {
                return $this->pseudo;
        }

        /**
         * Set the value of pseudo
         *
         * @return  self
         */ 
        public function setPseudo($pseudo)
        {
                $this->pseudo = $pseudo;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of registrationDate
         */ 
        public function getRegistrationdate(){
                $formattedDate = $this->registrationdate->format("d/m/Y, H:i:s");
                return $formattedDate;
            }

        /**
         * Set the value of registrationDate
         *
         * @return  self
         */ 
        public function setRegistrationdate($date){
                $this->registrationdate = new \DateTime($date);
                return $this;
            }

        /**
         * Get the value of role
         */ 
        public function getRole()
        {
                return $this->role;
        }


        /**
         * Set the value of role
         *
         * @return  self
         */ 
        public function setRole($role)
        {
                $role = json_decode($role);
                if (empty($role)) {
                        return $this->role[] = $role;
                }
                return $this;
        }

        public function hasRole($role) {
                return in_array($role, ["ROLE_ADMIN","ROLE_USER"], true);
        }
        public function __toString()
        {return "testa";} 
    }
    