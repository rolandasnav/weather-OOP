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
        $__internal_499a88b4acf7ac3967abc4deb366aad6d5317cdd5d0f4ee9b4d930a28644c45c = $this->env->getExtension("native_profiler");
        $__internal_499a88b4acf7ac3967abc4deb366aad6d5317cdd5d0f4ee9b4d930a28644c45c->enter($__internal_499a88b4acf7ac3967abc4deb366aad6d5317cdd5d0f4ee9b4d930a28644c45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nfqWeatherBundle:Weather:index.html.twig"));

        // line 1
        echo "<h1>Currently it is ";
        echo twig_escape_filter($this->env, (isset($context["temp"]) ? $context["temp"] : $this->getContext($context, "temp")), "html", null, true);
        echo " degrees Celsius at your given location.</h1>
";
        
        $__internal_499a88b4acf7ac3967abc4deb366aad6d5317cdd5d0f4ee9b4d930a28644c45c->leave($__internal_499a88b4acf7ac3967abc4deb366aad6d5317cdd5d0f4ee9b4d930a28644c45c_prof);

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
/* <h1>Currently it is {{ temp }} degrees Celsius at your given location.</h1>*/
/* */
