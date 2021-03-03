<?php declare(strict_types=1);

namespace Star\IssueTracking\Infrastructure\Symfony\Http\Controller;

use Symfony\Bundle\FrameworkBundle\Routing;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="/tickets")
 */
final class TicketController
{
    /**
     * @Route(name="ticket_create", path="/", methods={"GET", "POST"})
     *
     * @return Response
     */
    public function createAction(): Response
    {
    }
}
