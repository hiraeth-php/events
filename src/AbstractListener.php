<?php

namespace Hiraeth\Events;

/**
 *
 */
abstract class AbstractListener implements ListenerInterface
{
	/**
	 *
	 */
	public function __invoke(EventInterface $event)
	{
		return $this->handle(...func_get_args());
	}


	/**
	 *
	 */
	public function isListener($listener)
	{
		return $listener === $this;
	}
}
