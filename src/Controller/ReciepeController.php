<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ReciepeController extends AbstractController
{
    #[Route('/recette/{slug}-{id}', name: 'recipe.show', requirements: ['id'=> '\d+', 'slug'=> '[a-z0-9-]+'])]
    public function index(Request $request,string $slug, int $id): Response
    {
        //! 1ere mfaçon de recuperer sans parametres
        // dd($request->attributes->get('slug'),$request->attributes->getInt('id'));

        //! 2eme façon de recuperer avec parametres
        dd($slug,$id);
    }
}
