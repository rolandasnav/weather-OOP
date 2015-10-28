<?php

/* nfqWeatherBundle:Weather:index.html.twig */
class __TwigTemplate_0827fd6fdfccefd481a23dc6e85ec1dc7461b0bb29625cdfb77b43679f54ab34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_448aadb5afd23d17a5a0c90e67a933c021fafb705b28ca4ac8d740b144a63bb7 = $this->env->getExtension("native_profiler");
        $__internal_448aadb5afd23d17a5a0c90e67a933c021fafb705b28ca4ac8d740b144a63bb7->enter($__internal_448aadb5afd23d17a5a0c90e67a933c021fafb705b28ca4ac8d740b144a63bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nfqWeatherBundle:Weather:index.html.twig"));

        // line 1
        echo "<h1>Current temperature near NFQ office is:<br> ";
        echo twig_escape_filter($this->env, (isset($context["yahooTemp"]) ? $context["yahooTemp"] : $this->getContext($context, "yahooTemp")), "html", null, true);
        echo " &#8451;, according to Yahoo;<br> ";
        echo twig_escape_filter($this->env, (isset($context["openWeatherTemp"]) ? $context["openWeatherTemp"] : $this->getContext($context, "openWeatherTemp")), "html", null, true);
        echo ", &#8451; according to Open Weather Map.</h1>
";
        
        $__internal_448aadb5afd23d17a5a0c90e67a933c021fafb705b28ca4ac8d740b144a63bb7->leave($__internal_448aadb5afd23d17a5a0c90e67a933c021fafb705b28ca4ac8d740b144a63bb7_prof);

    }

    public function getTemplateName()
    {
        return "nfqWeatherBundle:Weather:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <h1>Current temperature near NFQ office is:<br> {{ yahooTemp }} &#8451;, according to Yahoo;<br> {{ openWeatherTemp }}, &#8451; according to Open Weather Map.</h1>*/
/* */
