<?php

namespace Hiraeth\Events;

use League\Event\ListenerInterface;

/**
 *
 */
interface Listener extends ListenerInterface
{
	public function __invoke(Event $event);
}
