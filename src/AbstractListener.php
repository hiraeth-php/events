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
	abstract public function __invoke(EventInterface $event);


	/**
	 *
	 */
	public function isListener($listener)
	{
		return $listener === $this;
	}
}
