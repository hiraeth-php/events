<?php

namespace Hiraeth\Events;

use League;
use RuntimeException;

/**
 *
 */
abstract class AbstractListener extends League\Event\AbstractListener implements Listener
{
	/**
	 *
	 */
	public function handle(League\Event\EventInterface $event)
	{
		throw new RuntimeException('This event does not support legacy calling, use __invoke');
	}
}
