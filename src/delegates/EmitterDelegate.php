<?php

namespace Hiraeth\Events;

use Hiraeth;

/**
 *
 */
class EmitterDelegate implements Hiraeth\Delegate
{
	/**
	 * Get the class for which the delegate operates.
	 *
	 * @static
	 * @access public
	 * @return string The class for which the delegate operates
	 */
	static public function getClass(): string
	{
		return Emitter::class;
	}


	/**
	 * Get the instance of the class for which the delegate operates.
	 *
	 * @access public
	 * @param Hiraeth\Application $app The application instance for which the delegate operates
	 * @return object The instance of the class for which the delegate operates
	 */
	public function __invoke(Hiraeth\Application $app): object
	{
		$emitter = new Emitter();
		$configs = $app->getConfig('*', 'listener', []);
		$signal  = $app->get(Hiraeth\Utils\Signal::class);

		usort($configs, function($a, $b) {
			$a_priority = $a['priority'] ?? 50;
			$b_priority = $b['priority'] ?? 50;

			return $a_priority - $b_priority;
		});

		foreach ($configs as $config) {
			if (!$config || $config['disabled'] ?? FALSE) {
				continue;
			}

			$listener_signal = $signal->create($config['class']);

			foreach ($config['events'] as $event) {
				$emitter->addListener(strtolower($event), $listener_signal);
			}
		}

		return $app->share($emitter);
	}
}
