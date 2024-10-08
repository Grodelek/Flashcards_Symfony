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
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FlashcardsController extends AbstractController
{

    public function __construct(private FlashcardsRepository $flashcardsRepository,private EntityManagerInterface $entityManager)
    {
        
    }
    #[Route('/', name: 'homepage', methods: ['GET'])]
    public function home(): Response
    {
        return $this->render('/flashcards/home.html.twig');
    }

    #[Route('/api/flashcards', name: "cards_all", methods: ['GET'])]
    public function getCard(){
      $flashcards = $this->flashcardsRepository->findAll();

      return $this->render('flashcards/flashcards.html.twig',[
        'flashcards' => $flashcards,
      ]);
    }

    #[Route('/api/flashcards/add', name: "cards_add", methods: ['GET','POST'])]
    public function add(Request $request){
        $flashcard = new Flashcards();

        $form = $this->createForm(FlashcardsType::class, $flashcard);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $flashcard = $form->getData();
            $this->entityManager->persist($flashcard);
            $this->entityManager->flush();

            return $this->redirectToRoute('cards_all');
        }

        return $this->render('flashcards/new.html.twig',[
            'form' => $form,
        ]);
    }

    #[Route('/api/flashcards/{id}', name:"cards_find")]
    public function findById($id): Response
    {
        $card = $this->flashcardsRepository->find($id);
    
        return $this->render('flashcards/foundcard.html.twig',[
            'id' => $id,
            'card' => $card,
        ]);
    }

    #[Route('/api/flashcards/{id}/delete', name:"cards_delete", methods: ['GET'])]
    public function delete($id): Response
    {

        $card = $this->flashcardsRepository->find($id);
        if(!$card){
            throw $this->createNotFoundException('Flashcard not found');
        }
        $this->entityManager->remove($card);
        $this->entityManager->flush();
        $this->addFlash('notice', 'Card deleted successfully!');

        return $this->redirectToRoute('cards_all');
    }

    #[Route('/api/flashcards/{id}/update', name:"cards_update")]
    public function update($id,Request $request): Response
    {
        $card = $this->flashcardsRepository->find($id);
        $form = $this->createFormBuilder($card)
        ->add('topic', TextType::class)
        ->add('answer', TextType::class)
        ->add('save', SubmitType::class)
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->entityManager->flush();

            $this->addFlash('success', 'Card updated successfully!');
           return $this->redirectToRoute('cards_all');
        }

        return $this->render('flashcards/cardupdate.html.twig',[
            'form' => $form,
        ]);
    }


}