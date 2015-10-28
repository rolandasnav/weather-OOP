<?php

/* base.html.twig */
class __TwigTemplate_093d6982738b9fbe30f981e9fe34a2939c7a3689bc41a1ec8fb0156d5e71188c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4317c269806078da93a40d63c0653bc70fcc01fb954dfc2ff1a8423ee198f1f9 = $this->env->getExtension("native_profiler");
        $__internal_4317c269806078da93a40d63c0653bc70fcc01fb954dfc2ff1a8423ee198f1f9->enter($__internal_4317c269806078da93a40d63c0653bc70fcc01fb954dfc2ff1a8423ee198f1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4317c269806078da93a40d63c0653bc70fcc01fb954dfc2ff1a8423ee198f1f9->leave($__internal_4317c269806078da93a40d63c0653bc70fcc01fb954dfc2ff1a8423ee198f1f9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae5fc42cb2c86a053a977a801d4cf716fd5e785b150ff9a6bd9048e72646ec33 = $this->env->getExtension("native_profiler");
        $__internal_ae5fc42cb2c86a053a977a801d4cf716fd5e785b150ff9a6bd9048e72646ec33->enter($__internal_ae5fc42cb2c86a053a977a801d4cf716fd5e785b150ff9a6bd9048e72646ec33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ae5fc42cb2c86a053a977a801d4cf716fd5e785b150ff9a6bd9048e72646ec33->leave($__internal_ae5fc42cb2c86a053a977a801d4cf716fd5e785b150ff9a6bd9048e72646ec33_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1e930b9072950cd74cc2c1998cd398299243d21dd7bbfdcb056aa7b04343aa0 = $this->env->getExtension("native_profiler");
        $__internal_a1e930b9072950cd74cc2c1998cd398299243d21dd7bbfdcb056aa7b04343aa0->enter($__internal_a1e930b9072950cd74cc2c1998cd398299243d21dd7bbfdcb056aa7b04343aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a1e930b9072950cd74cc2c1998cd398299243d21dd7bbfdcb056aa7b04343aa0->leave($__internal_a1e930b9072950cd74cc2c1998cd398299243d21dd7bbfdcb056aa7b04343aa0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f3221b7ff9e732354e51692f6114ce160dcfcab86028d2ffffffa70ec51dfad = $this->env->getExtension("native_profiler");
        $__internal_7f3221b7ff9e732354e51692f6114ce160dcfcab86028d2ffffffa70ec51dfad->enter($__internal_7f3221b7ff9e732354e51692f6114ce160dcfcab86028d2ffffffa70ec51dfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f3221b7ff9e732354e51692f6114ce160dcfcab86028d2ffffffa70ec51dfad->leave($__internal_7f3221b7ff9e732354e51692f6114ce160dcfcab86028d2ffffffa70ec51dfad_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_34e8afebbaa6fc2e8b6923900415486681d8fd0ce193cd5a7a1ca2b2fdae62c4 = $this->env->getExtension("native_profiler");
        $__internal_34e8afebbaa6fc2e8b6923900415486681d8fd0ce193cd5a7a1ca2b2fdae62c4->enter($__internal_34e8afebbaa6fc2e8b6923900415486681d8fd0ce193cd5a7a1ca2b2fdae62c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_34e8afebbaa6fc2e8b6923900415486681d8fd0ce193cd5a7a1ca2b2fdae62c4->leave($__internal_34e8afebbaa6fc2e8b6923900415486681d8fd0ce193cd5a7a1ca2b2fdae62c4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
