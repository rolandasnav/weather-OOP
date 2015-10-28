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
        $__internal_fd3ee152f1767562dacb560cc2cc80d97491409b244d1b4749b8ed5613ecd2c4 = $this->env->getExtension("native_profiler");
        $__internal_fd3ee152f1767562dacb560cc2cc80d97491409b244d1b4749b8ed5613ecd2c4->enter($__internal_fd3ee152f1767562dacb560cc2cc80d97491409b244d1b4749b8ed5613ecd2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd3ee152f1767562dacb560cc2cc80d97491409b244d1b4749b8ed5613ecd2c4->leave($__internal_fd3ee152f1767562dacb560cc2cc80d97491409b244d1b4749b8ed5613ecd2c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ef6d8101c8a572838b23dc215a766100a7c358ed1cb86556e3ce7dc8c3441a3 = $this->env->getExtension("native_profiler");
        $__internal_0ef6d8101c8a572838b23dc215a766100a7c358ed1cb86556e3ce7dc8c3441a3->enter($__internal_0ef6d8101c8a572838b23dc215a766100a7c358ed1cb86556e3ce7dc8c3441a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0ef6d8101c8a572838b23dc215a766100a7c358ed1cb86556e3ce7dc8c3441a3->leave($__internal_0ef6d8101c8a572838b23dc215a766100a7c358ed1cb86556e3ce7dc8c3441a3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ad24a49049b54813c2a7617986788f14b7414c4a5c67ca728b26e3ef87825dd = $this->env->getExtension("native_profiler");
        $__internal_7ad24a49049b54813c2a7617986788f14b7414c4a5c67ca728b26e3ef87825dd->enter($__internal_7ad24a49049b54813c2a7617986788f14b7414c4a5c67ca728b26e3ef87825dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7ad24a49049b54813c2a7617986788f14b7414c4a5c67ca728b26e3ef87825dd->leave($__internal_7ad24a49049b54813c2a7617986788f14b7414c4a5c67ca728b26e3ef87825dd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_147c597da173e359e1b2247bc53cb54ad094d1d6ba8a7fef0e50fdb0aedba7ee = $this->env->getExtension("native_profiler");
        $__internal_147c597da173e359e1b2247bc53cb54ad094d1d6ba8a7fef0e50fdb0aedba7ee->enter($__internal_147c597da173e359e1b2247bc53cb54ad094d1d6ba8a7fef0e50fdb0aedba7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_147c597da173e359e1b2247bc53cb54ad094d1d6ba8a7fef0e50fdb0aedba7ee->leave($__internal_147c597da173e359e1b2247bc53cb54ad094d1d6ba8a7fef0e50fdb0aedba7ee_prof);

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
