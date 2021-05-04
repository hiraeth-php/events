<?php

namespace Hiraeth\Events;

use League;

/**
 *
 */
abstract class AbstractListener extends League\Event\AbstractListener implements Listener
{
	/**
	 *
	 */
	public function __invoke(Event $event)
	{
		return $this->handle(...func_get_args());
	}
}
