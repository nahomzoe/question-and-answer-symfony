<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class MainController extends AbstractController {

    #[Route('/', name:'home')]
    public function home(): Response
    {   

       

        
        
      
        return $this->render('html/home.html.twig');
    }




    #[Route('/about', name:'about')]
    public function question(): Response
    {
        
        return $this->render('html/about.html.twig');
    }


    #[Route('/classroom', name:'classroom')]
    public function answer(): Response
    {
        

        function randAns () {

            $array = [

                "no questions, ok lets continue",
                
                "people in the remote are you there?",
                
                "if you get an error is good!",
                
                "...and thats the whole idea!",
                
                "ok, give it a try!",
                
                "who, is reading next?"];
           return $array[array_rand($array)];
        }

        function randQus () {

            $arrayQ = [

                "What means symfony?",
                
                "Why we need PHP?",
                
                "What is twig for?",
                
                "Can you give more time for the assignment?",
                
                "Can you be slower please?",
                
                "Screen share plaese?"];
           return $arrayQ[array_rand($arrayQ)];
        }
            
        
        return $this->render('html/classroom.html.twig',[
            'answer' => randAns(),'question' => randQus()
          ]);
    }

    

}


