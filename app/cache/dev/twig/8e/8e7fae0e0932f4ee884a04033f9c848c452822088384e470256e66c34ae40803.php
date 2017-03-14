<?php

/* base.html.twig */
class __TwigTemplate_6e6282a85b918a5419d293ca62eea629804c3e8855b1b888babb9bccad8d005a extends Twig_Template
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
        $__internal_35837ef8b7a9f90f9945a420f6d5fb0038eca37dcef78b084bbfe164c701f0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35837ef8b7a9f90f9945a420f6d5fb0038eca37dcef78b084bbfe164c701f0a5->enter($__internal_35837ef8b7a9f90f9945a420f6d5fb0038eca37dcef78b084bbfe164c701f0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_35837ef8b7a9f90f9945a420f6d5fb0038eca37dcef78b084bbfe164c701f0a5->leave($__internal_35837ef8b7a9f90f9945a420f6d5fb0038eca37dcef78b084bbfe164c701f0a5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6722c83c1e724bd2c171614786c28e02f34721625cfece7abe3b157a197ef7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6722c83c1e724bd2c171614786c28e02f34721625cfece7abe3b157a197ef7b->enter($__internal_f6722c83c1e724bd2c171614786c28e02f34721625cfece7abe3b157a197ef7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evaluación desarrollador 2017";
        
        $__internal_f6722c83c1e724bd2c171614786c28e02f34721625cfece7abe3b157a197ef7b->leave($__internal_f6722c83c1e724bd2c171614786c28e02f34721625cfece7abe3b157a197ef7b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_678235c59643e7d0b5a87e6eaee5e9a1d53b96608d34fe592341ea531fddd1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678235c59643e7d0b5a87e6eaee5e9a1d53b96608d34fe592341ea531fddd1ed->enter($__internal_678235c59643e7d0b5a87e6eaee5e9a1d53b96608d34fe592341ea531fddd1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_678235c59643e7d0b5a87e6eaee5e9a1d53b96608d34fe592341ea531fddd1ed->leave($__internal_678235c59643e7d0b5a87e6eaee5e9a1d53b96608d34fe592341ea531fddd1ed_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_50f7388f3e519730298acd1b93f54a7c70da154839d58fc21b9672b5b650bd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f7388f3e519730298acd1b93f54a7c70da154839d58fc21b9672b5b650bd14->enter($__internal_50f7388f3e519730298acd1b93f54a7c70da154839d58fc21b9672b5b650bd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50f7388f3e519730298acd1b93f54a7c70da154839d58fc21b9672b5b650bd14->leave($__internal_50f7388f3e519730298acd1b93f54a7c70da154839d58fc21b9672b5b650bd14_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_61850728a484132bde5f2ec0a7c6bd2cb216ad81f284b0f6f92261f026d86f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61850728a484132bde5f2ec0a7c6bd2cb216ad81f284b0f6f92261f026d86f14->enter($__internal_61850728a484132bde5f2ec0a7c6bd2cb216ad81f284b0f6f92261f026d86f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_61850728a484132bde5f2ec0a7c6bd2cb216ad81f284b0f6f92261f026d86f14->leave($__internal_61850728a484132bde5f2ec0a7c6bd2cb216ad81f284b0f6f92261f026d86f14_prof);

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
", "base.html.twig", "/var/www/html/prueba-programador/app/Resources/views/base.html.twig");
    }
}
