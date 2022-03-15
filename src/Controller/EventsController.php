<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\Events;

class EventsController extends AbstractController
{
    #[Route('/events/{eventId}/register', name: 'app_events', methods: ['GET', 'POST'])]
    public function register(int $eventId): Response
    {
        if (Request::createFromGlobals()->getMethod() === 'GET') {
            // TODO: show registration form in HTML based on $formConfig
            $formConfig = (new Events())->getRegistrationForm($eventId);

            return new Response();
        }

        // TODO: show the invoice in plain text
        return new Response();
    }
}
