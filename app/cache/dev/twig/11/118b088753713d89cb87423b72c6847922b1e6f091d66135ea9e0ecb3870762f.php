<?php

/* AQCompraVentaBundle:Default:index.html.twig */
class __TwigTemplate_2ed4d70645ee8636b14af2757f881644a8fec2a8731de44ab78fe60791e4912d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AQCompraVentaBundle:Default:index.html.twig", 1);
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
        $__internal_29be2a0c5ea8cd28ad74ea6d418c606e70a5223a43415e7f3119413058b748e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29be2a0c5ea8cd28ad74ea6d418c606e70a5223a43415e7f3119413058b748e5->enter($__internal_29be2a0c5ea8cd28ad74ea6d418c606e70a5223a43415e7f3119413058b748e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQCompraVentaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29be2a0c5ea8cd28ad74ea6d418c606e70a5223a43415e7f3119413058b748e5->leave($__internal_29be2a0c5ea8cd28ad74ea6d418c606e70a5223a43415e7f3119413058b748e5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d273f16a35df55e79a59c3efe27096b03cdeb82c2a3fb2e2c61b5d76643043d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d273f16a35df55e79a59c3efe27096b03cdeb82c2a3fb2e2c61b5d76643043d9->enter($__internal_d273f16a35df55e79a59c3efe27096b03cdeb82c2a3fb2e2c61b5d76643043d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <h2>Vehículos disponibles</h2>
  <ul>
    <li>Acá tiene que ir el listado</li>
  </ul>
";
        
        $__internal_d273f16a35df55e79a59c3efe27096b03cdeb82c2a3fb2e2c61b5d76643043d9->leave($__internal_d273f16a35df55e79a59c3efe27096b03cdeb82c2a3fb2e2c61b5d76643043d9_prof);

    }

    public function getTemplateName()
    {
        return "AQCompraVentaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
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
  <h2>Vehículos disponibles</h2>
  <ul>
    <li>Acá tiene que ir el listado</li>
  </ul>
{% endblock body %}", "AQCompraVentaBundle:Default:index.html.twig", "/var/www/html/prueba-programador/src/AQ/CompraVentaBundle/Resources/views/Default/index.html.twig");
    }
}
