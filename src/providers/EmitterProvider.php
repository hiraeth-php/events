<?php

namespace Hiraeth\Events;

use Hiraeth;
use League\Event\EventDispatcherAware;

/**
 * {@inheritDoc}
 */
class EmitterProvider implements Hiraeth\Provider
{
	/**
	 * {@inheritDoc}
	 */
	static public function getInterfaces(): array
	{
		return [
			EmitterAware::class,
			EventDispatcherAware::class
		];
	}


	/**
	 * {@inheritDoc}
	 *
	 * @param LoggerAwareInterface $instance
	 */
	public function __invoke($instance, Hiraeth\Application $app): object
	{
		$instance->setEventsEmitter($app->get(Emitter::class));

		return $instance;
	}
}
