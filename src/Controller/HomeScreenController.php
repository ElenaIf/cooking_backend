<?php


namespace App\Controller;

use App\Entity\Recipe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeScreenController extends AbstractController
{
    /**
     * @Route("/recipes/add", name="add_new_recipe", methods={"POST"})
     */
    public function addRecipe(Request $request){
        $entityManager = $this->getDoctrine()->getManager();
        $data = json_decode($request->getContent(),true);

        $newRecipe = new Recipe();
        $newRecipe->setName($data["name"]);
        $newRecipe->setPhoto($data["photo"]);
        $newRecipe->setInstructions($data["instructions"]);
        $newRecipe->setDifficulty($data["difficulty"]);
        $newRecipe->setIngredients($data["ingredients"]);


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
                'id' => $recipe->getId(),
                'name'=>$recipe->getName(),
                'photo'=>$recipe->getPhoto(),
                'instructions'=>$recipe->getInstructions(),
                'difficulty'=>$recipe->getDifficulty(),
                'ingredients'=>$recipe->getIngredients(),

            );
        }

        return $this->json($response);


    }

    /**
     * @Route("/recipe/find/{id}", name="find_a_recipe")
     */
    public function findRecipe($id){
        $recipe = $this->getDoctrine()->getRepository(Recipe::class)->find($id);

        if (!$recipe) {
            throw $this->createNotFoundException(
                'No recipe was found with the id of ' . $id
            );
        } else {
            return $this->json([
                'id' => $recipe->getId(),
                'name'=>$recipe->getName(),
                'ingredients'=>$recipe->getIngredients(),
                'difficulty'=>$recipe->getDifficulty()
            ]);
        }

    }

    /**
     * @Route("/recipe/edit/{id}/{name}", name="edit_a_recipe")
     */
public function editRecipe($id, $name) {
    $recipe = $this->getDoctrine()->getRepository(Recipe::class)->find($id);
    $entityManager = $this->getDoctrine()->getManager();

    if (!$recipe) {
        throw $this->createNotFoundException(
            'No recipe was found with the id of ' . $id
        );
    } else {
        $recipe->setName($name);

        $entityManager->flush();

        return $this->json([
            'message' => 'Adited a recipe with id of ' . $id
        ]);
    }

}

    /**
     * @Route("/recipe/remove/{id}", name="remove_a_recipe")
     */
public function removeRecipe($id){
    $recipe = $this->getDoctrine()->getRepository(Recipe::class)->find($id);
    $entityManager = $this->getDoctrine()->getManager();

    if (!$recipe) {
        throw $this->createNotFoundException(
            'No recipe was found with the id of ' . $id
        );
    } else {
      $entityManager->remove($recipe);
      $entityManager->flush();
      return $this->json([
          'message' => 'Removed the recipe with the id of ' . $id
      ]);
    }
}

// to call to my backend
//fetch('https://secret-shore-65901.herokuapp.com/recipes/all')
//.then(resp => resp.json())
//.then(resp => console.log(resp))

}

