<?php

namespace Hiraeth\Events;

use Hiraeth;

/**
 *
 */
class LogListener extends AbstractListener
{
	/**
	 * @var Hiraeth\Application
	 */
	protected $app;


	/**
	 *
	 */
	public function __construct(Hiraeth\Application $app)
	{
		$this->app = $app;
	}

	/**
	 * {@inheritDoc}
	 */
	public function __invoke(object $event): void
	{
		$this->app->info(sprintf('The "%s" event has been emitted', get_class($event)));
	}
}
