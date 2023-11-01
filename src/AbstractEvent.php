<?php

namespace Hiraeth\Events;

/**
 *
 */
abstract class AbstractEvent implements Event
{
	/**
	 * {@inheritDoc}
	 */
	public function getName(): string
	{
		return implode('.', array_map('strtolower', explode('\\', get_called_class())));
	}
}
