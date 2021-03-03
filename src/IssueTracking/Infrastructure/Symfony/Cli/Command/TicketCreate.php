<?php declare(strict_types=1);

namespace Star\IssueTracking\Infrastructure\Symfony\Cli\Command;

use Symfony\Component\Console\Command\Command;

final class TicketCreate extends Command
{
    public function __construct()
    {
        parent::__construct('ticket:create');
    }
}
