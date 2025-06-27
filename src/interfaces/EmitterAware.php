<?php

namespace Hiraeth\Events;

use Psr\EventDispatcher\EventDispatcherInterface;

/**
 * An interface for setting the events emitter
 */
interface Emitteraware
{
	/**
	 * Get the events emitter for this object
	 */
	public function getEventsEmitter(): ?EventDispatcherInterface;


	/**
	 * Set the events emitters for this object
	 */
	public function setEventsEmitter(EventDispatcherInterface $emitter): static;
}
