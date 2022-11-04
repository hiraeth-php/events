<?php

namespace Hiraeth\Events;

use League\Event\ListenerInterface;

/**
 *
 */
interface Listener extends ListenerInterface
{
	/**
	 * Invoke the listener with an event
	 *
	 * @param Event $event
	 * @return void
	 */
	public function __invoke(Event $event);
}
