<?php
/**
 * Part of the Fuel framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2012 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */


return array(

	// the active pagination template
	'active'                      => 'default',

	// default FuelPHP pagination template, compatible with pre-1.4 applications
	'default'                     => array(
		'wrapper'                 => "<div id=\"pagelist\">\n\t{pagination}\n</div>\n",

		'previous'                => "{link}",
		'previous-link'           => "\t\t<a href=\"{uri}\">{page}</a>\n",

		'previous-inactive'       => "{link}",
		'previous-inactive-link'  => "\t\t<a href=\"{uri}\">{page}</a>\n",

		'regular'                 => "{link}",
		'regular-link'            => "\t\t<a href=\"{uri}\">{page}</a>\n",

		'active'                  => "{link}",
		'active-link'             => "<strong class=\"current\">{page}</strong>\n",

		'next'                    => "{link}",
		'next-link'               => "\t\t<a href=\"{uri}\">{page}</a>\n",

		'next-inactive'           => "{link}",
		'next-inactive-link'      => "\t\t<a href=\"{uri}\">{page}</a>\n",
	),

	// Twitter bootstrap 2.x template
	'bootstrap'                   => array(
		'wrapper'                 => "<div class=\"pagination\">\n\t<ul>{pagination}\n\t</ul>\n</div>\n",

		'previous'                => "\n\t\t<li>{link}</li>",
		'previous-link'           => "<a href=\"{uri}\">{page}</a>",

		'previous-inactive'       => "\n\t\t<li class=\"disabled\">{link}</li>",
		'previous-inactive-link'  => "<a href=\"{uri}\">{page}</a>",

		'regular'                 => "\n\t\t<li>{link}</li>",
		'regular-link'            => "<a href=\"{uri}\">{page}</a>",

		'active'                  => "\n\t\t<li class=\"active\">{link}</li>",
		'active-link'             => "<a href=\"{uri}\">{page}</a>",

		'next'                    => "\n\t\t<li>{link}</li>",
		'next-link'               => "<a href=\"{uri}\">{page}</a>",

		'next-inactive'           => "\n\t\t<li class=\"disabled\">{link}</li>",
		'next-inactive-link'      => "<a href=\"{uri}\">{page}</a>",
	),
);
