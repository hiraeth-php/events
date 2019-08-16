<?php

namespace Hiraeth\Events;

use Hiraeth\Events\EventInterface as Event;

/**
 *
 */
class LogListener extends AbstractListener
{
	/**
	 *
	 */
	protected $app = NULL;


	/**
	 *
	 */
	public function __construct(Hiraeth\Application $app)
	{
		$this->app = $app;
	}

	/**
	 *
	 */
	public function __invoke(Event $event)
	{
		$this->app->info(sprintf('The "%s" event has been emitted', $event->getName()));
	}
}
