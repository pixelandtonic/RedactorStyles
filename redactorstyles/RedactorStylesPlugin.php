<?php
namespace Craft;

/**
 * Redactor Styles plugin
 */
class RedactorStylesPlugin extends BasePlugin
{
	public function getName()
	{
		return 'Redactor Styles';
	}

	public function getVersion()
	{
		return '0.1';
	}

	public function getDeveloper()
	{
		return 'Pixel & Tonic';
	}

	public function getDeveloperUrl()
	{
		return 'http://pixelandtonic.com';
	}

	public function init()
	{
		if (craft()->request->isCpRequest())
		{
			craft()->templates->includeCssFile('//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css');
			craft()->templates->includeJsResource('redactorstyles/styles.js');
		}
	}
}
