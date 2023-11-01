<?php

namespace Hiraeth\Events;

use League\Event;

/**
 *
 */
interface Listener extends Event\Listener
{
	/**
	 * Invoke the listener with an event
	 *
	 * @param object $event
	 * @return void
	 */
	public function __invoke(object $event): void;
}
