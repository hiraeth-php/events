<?php

namespace Hiraeth\Events;

use League;

/**
 *
 */
abstract class AbstractEvent extends League\Event\AbstractEvent implements Event
{
	/**
	 *
	 */
	public function getName()
	{
		return implode('.', array_map('strtolower', explode('\\', get_called_class())));
	}
}
