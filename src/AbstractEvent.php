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
		$parts = explode('\\', get_called_class());
		$class = array_pop($parts);

		return implode('.', array_map('sttolower', $parts)) . '.' . lcfirst($class);
	}
}
