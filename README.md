# Regex Match

This is a Craft CMS plugin that lets you to access PHP's preg_match function in your Twig templates.

### Install

Just clone this into your craft plugins folder and you likely know the rest.

### Examples

Use it via a pipe:

    {% set string = "Foo Bar Island" %}

    {% if string | match("/Island$/") %}
      Foo! You're on an island!
    {% endif }

Or via a "."

    {% set string = "Foo Bar Island" %}

    {% if string.match("/^Foo/") %}
      Foo! You're on an island!
    {% endif }

Cheers!

