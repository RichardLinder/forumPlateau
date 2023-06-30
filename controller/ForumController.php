<?php

/*
controler qui gére la partie forum du site elle comprendr une function index qui apel topic MAIS 
je ne suis pas sur que cette fonction qui es celle par defaut sera celle que je garderais a la fin 
chaqu'un des fonction apel un manager d'entity et une vue afin de repondre au besoin utilisateur 
*/

    namespace Controller;

    use App\Session;
    use App\AbstractController;
    use App\ControllerInterface;
    use Model\Managers\TopicManager;
    use Model\Managers\PostManager;
    use Model\Managers\CategoryManager;
    
    class ForumController extends AbstractController implements ControllerInterface{

        public function index()
        {
   
           $topicManager = new TopicManager();

            return [
                "view" => VIEW_DIR."forum/listTopics.php",
                "data" => [
                    "topics" => $topicManager->findAll(["creationdate", "DESC"])
                    
                ]
            ];
        }
            public function listCategories() 
            {
                $categoryManager= new CategoryManager;
                
                return [
                    "view" => VIEW_DIR."forum/listCategories.php",
                    "data" => [
                        "categories" => $categoryManager->findAll()
                        
                    ]
                ];
                
            }

            public function detailTopic($id)  
            {
                $topicManager = new TopicManager();
                return [
                    "view" => VIEW_DIR."forum/detailTopic.php",
                    "data" => [
                        "topic" => $topicManager->findOneById($id)
                        
                    ]
                ];

               
                
            }

            public function detailCategory($id)  
            {
                $CategoryManager = new CategoryManager();
                return [
                    "view" => VIEW_DIR."forum/detailCategory.php",
                    "data" => [
                        "category" => $CategoryManager->findOneById($id)
                        
                    ]
                ];
                
            }
        
        

        

    }
