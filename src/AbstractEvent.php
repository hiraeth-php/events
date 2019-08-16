<?php

namespace Hiraeth\Events;

use League\Event;

/**
 *
 */
abstract class AbstractEvent extends Event\AbstractEvent
{
	/**
	 *
	 */
	public function getName()
	{
		return implode('.', array_map('lcfirst', explode('\\', get_called_class())));
	}
}
