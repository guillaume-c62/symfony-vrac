<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class TestController extends AbstractController
{
    // pour crée une page
    /**
     * @Route ("/test")
     */
    public function hello()
    {
        return new Response('<body>hello world!!!</body>');
    }

    //page deux juste a copier le route et la fonction


     /**
     * @Route ("/home" , name="homepage")
     */
    public function home()
    {
        return $this->render('base.html.twig');
    }
      /**
     * @Route ("/page-one", name="page_one")
     */
    public function pageOne()
    {
        return $this->render('pages/pageOne.html.twig');
    }
      /**
     * @Route ("/page-two", name="page_Two")
     */
    public function pageTwo()
    {
        return $this->render('pages/pagetwo.html.twig');
    }
      /**
     * @Route ("/page-three", name="page_Three")
     */
    public function pageThree()
    {
        return $this->render('pages/pagethree.html.twig');
    }
      /**
     * @Route ("/page-four", name="page_Four")
     */
    public function pageFour()
    {
        return $this->render('pages/pagefour.html.twig');
    }
      /**
     * @Route (
     * "/hero/{name}/{age}",
     * name="hero",
     * defaults={"name":"inconnu",
     * "age":18
     * })
     */
    public function Hero(string $name , int $age)
    {
        
        return $this->render('pages/hero.html.twig', [
            "name" => $name,
            "age"=>$age
            ]);
    }
  /**
     * @Route (
     * "/heroes", name="heroes" )
     */
    public function heroes()
    {
        $names =["iron-Man","superman","thor"];
        $hero=[
            "name"=>"iron-Man ",

            // si on mais un script on peut cree une faille de securiter de type alerte          <script> alert </script>
            "age"=>62,
            "size"=> 1.83
    ];
        return $this->render('pages/heroes.html.twig',[
            "names" => $names,
            "hero" => $hero
        ]);
    }
      /**
     * @Route ("/variable", name="variable")
     */
    public function variable()
    {

        return $this->render('pages/variable.html.twig');
    }
         /**
     * @Route ("/req", name="req")
     */
    public function req(Request $request)
    {
// pour recuper une requete
    $number = $request->get("number");
    $letter = $request->get("letter");
        
        return $this->render('pages/req.html.twig', [
            "request"=> $request,
            "number"=> $number,
            "letter"=> $letter
        ]);
    }
}