<?php

/* nfqWeatherBundle:Weather:index.html.twig */
class __TwigTemplate_647cb0691848a189f1c3182f922dacd5d452cd5333921ecd3e68c88273baed45 extends Twig_Template
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
        $__internal_481b0ff258cd79ce588c078a6602e87510c36600b7b9b1c7f32972fda984b56b = $this->env->getExtension("native_profiler");
        $__internal_481b0ff258cd79ce588c078a6602e87510c36600b7b9b1c7f32972fda984b56b->enter($__internal_481b0ff258cd79ce588c078a6602e87510c36600b7b9b1c7f32972fda984b56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nfqWeatherBundle:Weather:index.html.twig"));

        // line 1
        echo "<h1>Current temperature near NFQ office is ";
        echo twig_escape_filter($this->env, (isset($context["yahooTemp"]) ? $context["yahooTemp"] : $this->getContext($context, "yahooTemp")), "html", null, true);
        echo " &#8451;, according to Yahoo.</h1>
";
        
        $__internal_481b0ff258cd79ce588c078a6602e87510c36600b7b9b1c7f32972fda984b56b->leave($__internal_481b0ff258cd79ce588c078a6602e87510c36600b7b9b1c7f32972fda984b56b_prof);

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
/* <h1>Current temperature near NFQ office is {{ yahooTemp }} &#8451;, according to Yahoo.</h1>*/
/* */
