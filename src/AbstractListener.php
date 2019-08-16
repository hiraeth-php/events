<?php

namespace Hiraeth\Events;

use League\Event;

/**
 *
 */
abstract class AbstractListener extends Event\AbstractListener
{
	/**
	 *
	 */
	public function __invoke(EventInterface $event)
	{
		return $this->handle(...func_get_args());
	}
}
