<?php
namespace Model\Entities;

    use App\Entity;


    final class Category extends Entity
    {
        private int $id;
        private string $wording;

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
         * Get the value of wording
         */ 
        public function getWording()
        {
                return $this->wording;
        }

        /**
         * Set the value of wording
         *
         * @return  self
         */ 
        public function setWording($wording)
        {
                $this->wording = $wording;

                return $this;
        }
        
    }