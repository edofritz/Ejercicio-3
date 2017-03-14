<?php

/* AQCompraVentaBundle:Default:index.html.twig */
class __TwigTemplate_1e57e7424775141c86f897ba2e8ab12e28d33d36130b2bc6aeaaee43bfa32800 extends Twig_Template
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
        $__internal_b167ba1ed98c64ba2402dc4a1bf7d25bf82a3ef51589765bda1b3e1a21bd5d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b167ba1ed98c64ba2402dc4a1bf7d25bf82a3ef51589765bda1b3e1a21bd5d32->enter($__internal_b167ba1ed98c64ba2402dc4a1bf7d25bf82a3ef51589765bda1b3e1a21bd5d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQCompraVentaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b167ba1ed98c64ba2402dc4a1bf7d25bf82a3ef51589765bda1b3e1a21bd5d32->leave($__internal_b167ba1ed98c64ba2402dc4a1bf7d25bf82a3ef51589765bda1b3e1a21bd5d32_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0151c06688b0b644b599c33c063bb7a70318d53d6d93d8abda940dc02f5bb92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0151c06688b0b644b599c33c063bb7a70318d53d6d93d8abda940dc02f5bb92b->enter($__internal_0151c06688b0b644b599c33c063bb7a70318d53d6d93d8abda940dc02f5bb92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <h2>Vehículos disponibles</h2>
   ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["autos"]) ? $context["autos"] : $this->getContext($context, "autos")));
        foreach ($context['_seq'] as $context["_key"] => $context["auto"]) {
            // line 5
            echo "   \t<li><a href=\"/autos/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "Id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "Modelo", array()), "html", null, true);
            echo "</a></li>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
";
        
        $__internal_0151c06688b0b644b599c33c063bb7a70318d53d6d93d8abda940dc02f5bb92b->leave($__internal_0151c06688b0b644b599c33c063bb7a70318d53d6d93d8abda940dc02f5bb92b_prof);

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
        return array (  58 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
   {% for auto in autos %}
   \t<li><a href=\"/autos/{{auto.Id}}\">{{auto.Modelo}}</a></li>
   {% endfor %}
  </ul>
{% endblock body %}", "AQCompraVentaBundle:Default:index.html.twig", "/Users/edufritz/evaluacion-dev-aq/ejercicio-3/src/AQ/CompraVentaBundle/Resources/views/Default/index.html.twig");
    }
}
