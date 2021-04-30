<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeScreenController extends AbstractController
{

    /**
     * @Route("/home", name="home_screen", methods={"GET", "POST"})
     */
    public function home(Request $request): Response {

//        return new Response('<h1>Hello!<h1/>');

//        This is json encode
        return $this -> json(['message' => $request -> query -> get("page")]);
    }


    /**
     * @Route("/other", methods={"GET", "POST"})
     */
    public function other() {
        return $this -> redirectToRoute(route: "home_screen");
    }

    /**
     * @Route("/recipe/{id}", name="get_a_recipe", methods={"GET"})
     */
    public function recipe($id) {
        return $this -> json(['message' => "requesting recipe number " . $id]);
    }

    /**
     * @Route("/recipes/all", name="get_all_recipes", methods={"GET"})
     */
    public function getAllRecipes(){
        $rootPath = $this -> getParameter("kernel.project_dir");
        $recipes = file_get_contents($rootPath."/resources/recipes.json");
        $decodeRecipes = json_decode($recipes, true);
        return $this -> json($decodeRecipes);
    }


}

