<?php
namespace App\Controller;

use App\Entity\Flashcards;
use App\Form\FlashcardsType;
use App\Repository\FlashcardsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FlashcardsController extends AbstractController
{

    public function __construct(private FlashcardsRepository $flashcardsRepository,private EntityManagerInterface $entityManager)
    {
        
    }
    #[Route('/', name: 'homepage', methods: ['GET'])]
    public function getHomepage(): Response
    {
        return $this->render('/flashcards/home.html.twig');
    }

    #[Route('/api/flashcards', name: "flashcards_all", methods: ['GET'])]
    public function getFlashcards(){
      $flashcards = $this->flashcardsRepository->findAll();

      return $this->render('flashcards/flashcards.html.twig',[
        'flashcards' => $flashcards,
      ]);
    }

    #[Route('/api/flashcards/add', name: "flashcards_add", methods: ['GET','POST'])]
    public function addFlashcard(Request $request){
        $flashcard = new Flashcards();

        $form = $this->createForm(FlashcardsType::class, $flashcard);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $flashcard = $form->getData();
            $this->entityManager->persist($flashcard);
            $this->entityManager->flush();

            return $this->redirectToRoute('flashcards_all');
        }

        return $this->render('flashcards/new.html.twig',[
            'form' => $form,
        ]);
    }


}