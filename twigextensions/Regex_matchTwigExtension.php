<?php

namespace Craft;

class Regex_matchTwigExtension extends \Twig_Extension
{
	protected $env;

	public function getName()
	{
		return 'Regex Match';
	}

	public function getFilters()
	{
		return array('match' => new \Twig_Filter_Method($this, 'match'));
	}
	
	public function getFunctions()
	{
		return array('match' => new \Twig_Function_Method($this, 'match'));
	}

	public function initRuntime(\Twig_Environment $env)
	{
		$this->env = $env;
	}

	public function match($var, $find = '')
	{
		if (is_string($var) && strlen($var))
		{
			$var = preg_match($find, $var);
		}
		return $var;
	}
}
