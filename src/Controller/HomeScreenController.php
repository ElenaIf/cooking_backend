<?php


namespace App\Controller;

use App\Entity\Recipe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeScreenController extends AbstractController
{
    /**
     * @Route("/recipes/add", name="add_new_recipe", methods={"GET", "POST"})
     */
    public function addRecipe(){
        $entityManager = $this->getDoctrine()->getManager();

        $newRecipe = new Recipe();
        $newRecipe->setName($_GET["name"]);
        $newRecipe->setIngredients($_GET["ingredients"]);
        $newRecipe->setDifficulty($_GET["difficulty"]);


        $entityManager->persist($newRecipe);

//        Perform saving into database
        $entityManager->flush();

        return new Response('Add a new recipe ' . $newRecipe->getId());

    }

    /**
     * @Route("/recipes/all", name="get_all_recipes")
     */
    public function getAllRecipe(){
        $recipes = $this->getDoctrine()->getRepository(Recipe::class)->findAll();

        $response = [];

        foreach ($recipes as $recipe) {
            $response[] = array(
                'name'=>$recipe->getName(),
                'ingredients'=>$recipe->getIngredients(),
                'difficulty'=>$recipe->getDifficulty()
            );
        }

        return $this->json($response);


    }




}

