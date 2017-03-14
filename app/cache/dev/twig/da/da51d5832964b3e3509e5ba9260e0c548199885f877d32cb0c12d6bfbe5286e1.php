<?php

/* ::base.html.twig */
class __TwigTemplate_8ee18679bdc6bfceb3ccc839eee47bd19b712fe0649c9073965d62609b223aed extends Twig_Template
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
        $__internal_2964155e86b8c7ca1c4c659593cff975589af5d1cb22e65c001753bb41b08621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2964155e86b8c7ca1c4c659593cff975589af5d1cb22e65c001753bb41b08621->enter($__internal_2964155e86b8c7ca1c4c659593cff975589af5d1cb22e65c001753bb41b08621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <h1>Evaluación desarrollador</h1>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_2964155e86b8c7ca1c4c659593cff975589af5d1cb22e65c001753bb41b08621->leave($__internal_2964155e86b8c7ca1c4c659593cff975589af5d1cb22e65c001753bb41b08621_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcffda3ef74295b2195dd6cace27a85cadab6d9ffebf27eb17c3cf8aaee7c89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcffda3ef74295b2195dd6cace27a85cadab6d9ffebf27eb17c3cf8aaee7c89d->enter($__internal_dcffda3ef74295b2195dd6cace27a85cadab6d9ffebf27eb17c3cf8aaee7c89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evaluación desarrollador 2017";
        
        $__internal_dcffda3ef74295b2195dd6cace27a85cadab6d9ffebf27eb17c3cf8aaee7c89d->leave($__internal_dcffda3ef74295b2195dd6cace27a85cadab6d9ffebf27eb17c3cf8aaee7c89d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_64d94174a867e7a81b2d04119562fbfffcce1b252a8cc6bf2e863c3c14ab35b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d94174a867e7a81b2d04119562fbfffcce1b252a8cc6bf2e863c3c14ab35b2->enter($__internal_64d94174a867e7a81b2d04119562fbfffcce1b252a8cc6bf2e863c3c14ab35b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_64d94174a867e7a81b2d04119562fbfffcce1b252a8cc6bf2e863c3c14ab35b2->leave($__internal_64d94174a867e7a81b2d04119562fbfffcce1b252a8cc6bf2e863c3c14ab35b2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1aeb389a1ede8364b40e18fe70b0e6f27ab1a15ba83ba1f79e0aedab921590bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aeb389a1ede8364b40e18fe70b0e6f27ab1a15ba83ba1f79e0aedab921590bc->enter($__internal_1aeb389a1ede8364b40e18fe70b0e6f27ab1a15ba83ba1f79e0aedab921590bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1aeb389a1ede8364b40e18fe70b0e6f27ab1a15ba83ba1f79e0aedab921590bc->leave($__internal_1aeb389a1ede8364b40e18fe70b0e6f27ab1a15ba83ba1f79e0aedab921590bc_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3dc68651a612a8a0050c7df3728a8d1ae786008f289f63e17bcafd9bf8199554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc68651a612a8a0050c7df3728a8d1ae786008f289f63e17bcafd9bf8199554->enter($__internal_3dc68651a612a8a0050c7df3728a8d1ae786008f289f63e17bcafd9bf8199554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3dc68651a612a8a0050c7df3728a8d1ae786008f289f63e17bcafd9bf8199554->leave($__internal_3dc68651a612a8a0050c7df3728a8d1ae786008f289f63e17bcafd9bf8199554_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 12,  83 => 11,  72 => 6,  60 => 5,  51 => 13,  48 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Evaluación desarrollador 2017{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <h1>Evaluación desarrollador</h1>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/prueba-programador/app/Resources/views/base.html.twig");
    }
}
