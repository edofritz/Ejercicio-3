<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_54739e6edfea9574efba53825f236423b5a933729e24ca81b6d3572fc01cac2e extends Twig_Template
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
        $__internal_32d9dbaa0cfc0f62fdb769db8ecf303248d0ab4ce612f692f8f994c55ae6d286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d9dbaa0cfc0f62fdb769db8ecf303248d0ab4ce612f692f8f994c55ae6d286->enter($__internal_32d9dbaa0cfc0f62fdb769db8ecf303248d0ab4ce612f692f8f994c55ae6d286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32d9dbaa0cfc0f62fdb769db8ecf303248d0ab4ce612f692f8f994c55ae6d286->leave($__internal_32d9dbaa0cfc0f62fdb769db8ecf303248d0ab4ce612f692f8f994c55ae6d286_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41dfb3c51bebc9cea7beee5858a4c7bda38f5922a0a21c74c992e6adba2a758a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41dfb3c51bebc9cea7beee5858a4c7bda38f5922a0a21c74c992e6adba2a758a->enter($__internal_41dfb3c51bebc9cea7beee5858a4c7bda38f5922a0a21c74c992e6adba2a758a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_41dfb3c51bebc9cea7beee5858a4c7bda38f5922a0a21c74c992e6adba2a758a->leave($__internal_41dfb3c51bebc9cea7beee5858a4c7bda38f5922a0a21c74c992e6adba2a758a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbe87427bab758d26f60b78aabe1c194a555a1baa9b11102ad668efb97c4a4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe87427bab758d26f60b78aabe1c194a555a1baa9b11102ad668efb97c4a4b3->enter($__internal_bbe87427bab758d26f60b78aabe1c194a555a1baa9b11102ad668efb97c4a4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bbe87427bab758d26f60b78aabe1c194a555a1baa9b11102ad668efb97c4a4b3->leave($__internal_bbe87427bab758d26f60b78aabe1c194a555a1baa9b11102ad668efb97c4a4b3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_03dfdbd30251bcbbb35eed6b569b7498676f51a4d35c9d6f6fdcdc264c91cfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03dfdbd30251bcbbb35eed6b569b7498676f51a4d35c9d6f6fdcdc264c91cfce->enter($__internal_03dfdbd30251bcbbb35eed6b569b7498676f51a4d35c9d6f6fdcdc264c91cfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_03dfdbd30251bcbbb35eed6b569b7498676f51a4d35c9d6f6fdcdc264c91cfce->leave($__internal_03dfdbd30251bcbbb35eed6b569b7498676f51a4d35c9d6f6fdcdc264c91cfce_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/prueba-programador/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
