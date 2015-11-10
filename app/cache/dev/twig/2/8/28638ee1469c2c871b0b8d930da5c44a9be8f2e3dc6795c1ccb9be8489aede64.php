<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c31afa68c6ca7ab34f0df444fa8c3f734b0eeff3b0b484a1ac4cff44e5e18c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89d50b57e4303e7d3c534506ee5c8c5d34893ad40d1c872a1722ff8d3efdb837 = $this->env->getExtension("native_profiler");
        $__internal_89d50b57e4303e7d3c534506ee5c8c5d34893ad40d1c872a1722ff8d3efdb837->enter($__internal_89d50b57e4303e7d3c534506ee5c8c5d34893ad40d1c872a1722ff8d3efdb837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89d50b57e4303e7d3c534506ee5c8c5d34893ad40d1c872a1722ff8d3efdb837->leave($__internal_89d50b57e4303e7d3c534506ee5c8c5d34893ad40d1c872a1722ff8d3efdb837_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_faa42f947bf65430702a5aedba5c48efd9fc2ae065405e164c3f5d4bd3a46d4b = $this->env->getExtension("native_profiler");
        $__internal_faa42f947bf65430702a5aedba5c48efd9fc2ae065405e164c3f5d4bd3a46d4b->enter($__internal_faa42f947bf65430702a5aedba5c48efd9fc2ae065405e164c3f5d4bd3a46d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_faa42f947bf65430702a5aedba5c48efd9fc2ae065405e164c3f5d4bd3a46d4b->leave($__internal_faa42f947bf65430702a5aedba5c48efd9fc2ae065405e164c3f5d4bd3a46d4b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b42c982475283d302e9a955fc47f17ffb10ec4339191a6da09e80ff42d309ec = $this->env->getExtension("native_profiler");
        $__internal_4b42c982475283d302e9a955fc47f17ffb10ec4339191a6da09e80ff42d309ec->enter($__internal_4b42c982475283d302e9a955fc47f17ffb10ec4339191a6da09e80ff42d309ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b42c982475283d302e9a955fc47f17ffb10ec4339191a6da09e80ff42d309ec->leave($__internal_4b42c982475283d302e9a955fc47f17ffb10ec4339191a6da09e80ff42d309ec_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9893925fd431ea54604a98e12da1ef4d47d9e76970f170b92167dc9a8084cfa2 = $this->env->getExtension("native_profiler");
        $__internal_9893925fd431ea54604a98e12da1ef4d47d9e76970f170b92167dc9a8084cfa2->enter($__internal_9893925fd431ea54604a98e12da1ef4d47d9e76970f170b92167dc9a8084cfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9893925fd431ea54604a98e12da1ef4d47d9e76970f170b92167dc9a8084cfa2->leave($__internal_9893925fd431ea54604a98e12da1ef4d47d9e76970f170b92167dc9a8084cfa2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
