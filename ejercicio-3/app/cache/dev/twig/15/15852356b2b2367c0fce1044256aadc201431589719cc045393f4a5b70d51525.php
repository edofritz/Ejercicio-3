<?php

/* AQCompraVentaBundle:Default:show.html.twig */
class __TwigTemplate_9e966cd55892622e90c8b0a486f4fc8b210add1a6aac3c120ed27d5b9a67ba8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AQCompraVentaBundle:Default:show.html.twig", 1);
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
        $__internal_76bc68e46d7ee5fa14ad62a070bb43aac4a374b6d4a77a0df04b316f58a6f203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bc68e46d7ee5fa14ad62a070bb43aac4a374b6d4a77a0df04b316f58a6f203->enter($__internal_76bc68e46d7ee5fa14ad62a070bb43aac4a374b6d4a77a0df04b316f58a6f203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQCompraVentaBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76bc68e46d7ee5fa14ad62a070bb43aac4a374b6d4a77a0df04b316f58a6f203->leave($__internal_76bc68e46d7ee5fa14ad62a070bb43aac4a374b6d4a77a0df04b316f58a6f203_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdb2ee648af0bc0b67e0de4e027bea6c05c0e79bcc409311dca640e7c42d1979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb2ee648af0bc0b67e0de4e027bea6c05c0e79bcc409311dca640e7c42d1979->enter($__internal_cdb2ee648af0bc0b67e0de4e027bea6c05c0e79bcc409311dca640e7c42d1979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <h2>Vehículo</h2>
  <h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehiculo"]) ? $context["vehiculo"] : $this->getContext($context, "vehiculo")), "getNombre", array()), "html", null, true);
        echo "</h3>\t

  <p>Marca : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehiculo"]) ? $context["vehiculo"] : $this->getContext($context, "vehiculo")), "getMarca", array()), "html", null, true);
        echo "<p>
  <p>Precio: \$";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehiculo"]) ? $context["vehiculo"] : $this->getContext($context, "vehiculo")), "getValor", array()), "html", null, true);
        echo "<p>
   
";
        
        $__internal_cdb2ee648af0bc0b67e0de4e027bea6c05c0e79bcc409311dca640e7c42d1979->leave($__internal_cdb2ee648af0bc0b67e0de4e027bea6c05c0e79bcc409311dca640e7c42d1979_prof);

    }

    public function getTemplateName()
    {
        return "AQCompraVentaBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  48 => 6,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
  <h2>Vehículo</h2>
  <h3>{{vehiculo.getNombre}}</h3>\t

  <p>Marca : {{vehiculo.getMarca}}<p>
  <p>Precio: \${{vehiculo.getValor}}<p>
   
{% endblock body %}", "AQCompraVentaBundle:Default:show.html.twig", "/Users/edufritz/evaluacion-dev-aq/ejercicio-3/src/AQ/CompraVentaBundle/Resources/views/Default/show.html.twig");
    }
}
