<?php

namespace Hiraeth\Events;

use Hiraeth;

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
	public function handle(Event $event)
	{
		$this->app->info(sprintf('The "%s" event has been emitted', $event->getName()));
	}
}
