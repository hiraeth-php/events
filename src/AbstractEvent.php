<?php

namespace Hiraeth\Events;

/**
 *
 */
abstract class AbstractEvent implements EventInterface
{
	/**
	 *
	 */
	public function getName()
	{
		return implode('.', array_map('lcfirst', explode('\\', get_called_class())));
	}
}
