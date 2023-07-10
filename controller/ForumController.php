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
use DateTime;
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
                        "categories" => $categoryManager->findAll(),
                        
                        
                    ]
                   
                ];
                
            }

            public function detailTopic($id)  
            {
                $topicManager = new TopicManager();
                $postManager =  new PostManager();


                return 
                [
                   
                    "view" => VIEW_DIR."forum/detailTopic.php",
                    "data" => 
                    [

                        "topic" => $topicManager->findOneById($id),
                        "posts" => $postManager->findListByIdDep($id, "topic")

                        
                    ]
                ];

               
                
            }

            public function detailCategory($id)  
            {
                $categoryManager = new CategoryManager();
                $topicManager =new TopicManager;



                return [
                    "view" => VIEW_DIR."forum/detailCategory.php",
                    "data" => [
                        "category" => $categoryManager->findOneById($id),
                        "topics" => $topicManager->findListByIdDep($id, "category")

                        
                    ]
                ];
                
            }
        public function addCategory()
        { 

                  
            $wording = filter_input (INPUT_POST, "wording", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $data = ["wording"=>$wording];
            $CategoryManager = new CategoryManager();
            $CategoryManager->add($data);

            return 
                 $this->listCategories();
        }

        function delletCategory($id)
        {
            $CategoryManager = new CategoryManager();

          $CategoryManager->delete($id);
          return 
          $this->listCategories();
        }

        function addTopic()
        {
            $title = filter_input (INPUT_POST, "title", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $category_id = filter_input (INPUT_POST, "category_id", FILTER_SANITIZE_NUMBER_INT);
            $user_id = filter_input (INPUT_POST, "user_id", FILTER_SANITIZE_NUMBER_INT);


            date_default_timezone_set('europe/Paris');
            $date= date('Y-m-d H:i:s');

          

            $data = 
            ["title"=>$title,
            "creationdate"=>$date , 
            "category_id" =>$category_id,
            "user_id" =>$user_id
            ];
            $topicManager =new TopicManager;
            
            $topicManager->add($data);

            return 
                $this->detailCategory($category_id);
            
        }
    }

