<?php

/* AQCompraVentaBundle:Default:create.html.twig */
class __TwigTemplate_1e9af99b4e594d91cd838335e3df9af71b8fcee65a0bed51be45e470cb4ad4de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AQCompraVentaBundle:Default:create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6defe20d8131ffa512c6b2007481f006352b31b2c55bf59e5788225cb4d57e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6defe20d8131ffa512c6b2007481f006352b31b2c55bf59e5788225cb4d57e23->enter($__internal_6defe20d8131ffa512c6b2007481f006352b31b2c55bf59e5788225cb4d57e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQCompraVentaBundle:Default:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6defe20d8131ffa512c6b2007481f006352b31b2c55bf59e5788225cb4d57e23->leave($__internal_6defe20d8131ffa512c6b2007481f006352b31b2c55bf59e5788225cb4d57e23_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e0fe28ad1b3087c8ecef4d737344279dd436fd7ab45cc6e06082a9b26baf645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0fe28ad1b3087c8ecef4d737344279dd436fd7ab45cc6e06082a9b26baf645->enter($__internal_6e0fe28ad1b3087c8ecef4d737344279dd436fd7ab45cc6e06082a9b26baf645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <h2>Nuevo vehículo</h2>
  <div class=\"div-formulario\">
    <form class=\"\" action=\"\" method=\"post\">
      ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["theForm"]) ? $context["theForm"] : $this->getContext($context, "theForm")), 'form');
        echo "
    </form>
  </div>
";
        
        $__internal_6e0fe28ad1b3087c8ecef4d737344279dd436fd7ab45cc6e06082a9b26baf645->leave($__internal_6e0fe28ad1b3087c8ecef4d737344279dd436fd7ab45cc6e06082a9b26baf645_prof);

    }

    public function getTemplateName()
    {
        return "AQCompraVentaBundle:Default:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}
  <h2>Nuevo vehículo</h2>
  <div class=\"div-formulario\">
    <form class=\"\" action=\"\" method=\"post\">
      {{ form(theForm) }}
    </form>
  </div>
{% endblock %}", "AQCompraVentaBundle:Default:create.html.twig", "/var/www/html/prueba-programador/src/AQ/CompraVentaBundle/Resources/views/Default/create.html.twig");
    }
}
