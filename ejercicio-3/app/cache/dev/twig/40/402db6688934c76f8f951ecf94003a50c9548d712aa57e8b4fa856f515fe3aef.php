<?php

/* base.html.twig */
class __TwigTemplate_8abd86ba5a091b8357353d34804851d3676b98bbe01d126cc51af51bf1b1db45 extends Twig_Template
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
        $__internal_9ad407691bb28c5dee0762ca292ed26d974f7cb3b6644c61915943916d4f977a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad407691bb28c5dee0762ca292ed26d974f7cb3b6644c61915943916d4f977a->enter($__internal_9ad407691bb28c5dee0762ca292ed26d974f7cb3b6644c61915943916d4f977a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9ad407691bb28c5dee0762ca292ed26d974f7cb3b6644c61915943916d4f977a->leave($__internal_9ad407691bb28c5dee0762ca292ed26d974f7cb3b6644c61915943916d4f977a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfceee09b5829d4aa42f889d919f9a9c2bccdf9309b94a9391bb541bc1bc8a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfceee09b5829d4aa42f889d919f9a9c2bccdf9309b94a9391bb541bc1bc8a0b->enter($__internal_bfceee09b5829d4aa42f889d919f9a9c2bccdf9309b94a9391bb541bc1bc8a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evaluación desarrollador 2017";
        
        $__internal_bfceee09b5829d4aa42f889d919f9a9c2bccdf9309b94a9391bb541bc1bc8a0b->leave($__internal_bfceee09b5829d4aa42f889d919f9a9c2bccdf9309b94a9391bb541bc1bc8a0b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6c60a477119f005db65cea86a581c399290ecd1d816a0173bd76a3254b4bd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c60a477119f005db65cea86a581c399290ecd1d816a0173bd76a3254b4bd93->enter($__internal_d6c60a477119f005db65cea86a581c399290ecd1d816a0173bd76a3254b4bd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d6c60a477119f005db65cea86a581c399290ecd1d816a0173bd76a3254b4bd93->leave($__internal_d6c60a477119f005db65cea86a581c399290ecd1d816a0173bd76a3254b4bd93_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff6cf6c2a3b5616b0183d7cd1dfd627cb054eb7c461cce2b79cfcc52f9456146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6cf6c2a3b5616b0183d7cd1dfd627cb054eb7c461cce2b79cfcc52f9456146->enter($__internal_ff6cf6c2a3b5616b0183d7cd1dfd627cb054eb7c461cce2b79cfcc52f9456146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ff6cf6c2a3b5616b0183d7cd1dfd627cb054eb7c461cce2b79cfcc52f9456146->leave($__internal_ff6cf6c2a3b5616b0183d7cd1dfd627cb054eb7c461cce2b79cfcc52f9456146_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b3873d2782d6b6e21f10c567e24501b1db8dcd645178d60df108d1dbbbc029e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3873d2782d6b6e21f10c567e24501b1db8dcd645178d60df108d1dbbbc029e2->enter($__internal_b3873d2782d6b6e21f10c567e24501b1db8dcd645178d60df108d1dbbbc029e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b3873d2782d6b6e21f10c567e24501b1db8dcd645178d60df108d1dbbbc029e2->leave($__internal_b3873d2782d6b6e21f10c567e24501b1db8dcd645178d60df108d1dbbbc029e2_prof);

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
", "base.html.twig", "/Users/edufritz/evaluacion-dev-aq/ejercicio-3/app/Resources/views/base.html.twig");
    }
}
