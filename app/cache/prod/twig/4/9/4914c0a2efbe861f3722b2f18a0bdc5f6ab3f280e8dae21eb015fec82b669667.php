<?php

/* nfqWeatherBundle:Weather:index.html.twig */
class __TwigTemplate_f7cd27b3230a85bc92bc349da112621f50465cc3d6eb6ae1493b840fbab78349 extends Twig_Template
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
        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["temp"]) ? $context["temp"] : null), "html", null, true);
        echo "</h1>
";
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
        return array (  19 => 1,);
    }
}
/* <h1>{{ temp }}</h1>*/
/* */
