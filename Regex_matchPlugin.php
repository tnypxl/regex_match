<?php

namespace Craft;

class Regex_matchPlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('Regex Match');
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getDeveloper()
	{
		return 'Arik Jones';
	}

	public function getDeveloperUrl()
	{
		return 'http://initializd.com';
	}

	public function hookAddTwigExtension()
	{
		Craft::import('plugins.regex_match.twigextensions.Regex_matchTwigExtension');

		return new Regex_matchTwigExtension();
	}
}
