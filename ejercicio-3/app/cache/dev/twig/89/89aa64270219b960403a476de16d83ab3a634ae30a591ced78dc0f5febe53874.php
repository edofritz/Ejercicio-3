<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ab462bd5114c79ca9d44d15f4df62932a55873e8e1c91c04ae0b67a8942b9c91 extends Twig_Template
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
        $__internal_e2db70f1cfcffcd843d38ce758f2cbf79e11ddd94d6da97a785cb17e971424c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2db70f1cfcffcd843d38ce758f2cbf79e11ddd94d6da97a785cb17e971424c0->enter($__internal_e2db70f1cfcffcd843d38ce758f2cbf79e11ddd94d6da97a785cb17e971424c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2db70f1cfcffcd843d38ce758f2cbf79e11ddd94d6da97a785cb17e971424c0->leave($__internal_e2db70f1cfcffcd843d38ce758f2cbf79e11ddd94d6da97a785cb17e971424c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26e101daf3c1a94b2cb30e7924b5d4eea0087fcf74d21cf91022391404fd9d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e101daf3c1a94b2cb30e7924b5d4eea0087fcf74d21cf91022391404fd9d93->enter($__internal_26e101daf3c1a94b2cb30e7924b5d4eea0087fcf74d21cf91022391404fd9d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_26e101daf3c1a94b2cb30e7924b5d4eea0087fcf74d21cf91022391404fd9d93->leave($__internal_26e101daf3c1a94b2cb30e7924b5d4eea0087fcf74d21cf91022391404fd9d93_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16b26f34e5818c67df54517caeb8a45d568885d9482403bc582d7fb1129c368f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b26f34e5818c67df54517caeb8a45d568885d9482403bc582d7fb1129c368f->enter($__internal_16b26f34e5818c67df54517caeb8a45d568885d9482403bc582d7fb1129c368f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_16b26f34e5818c67df54517caeb8a45d568885d9482403bc582d7fb1129c368f->leave($__internal_16b26f34e5818c67df54517caeb8a45d568885d9482403bc582d7fb1129c368f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_23b4eec5e4f16e04d2aeca5fbae8391a0abcabadaf1fab51612cbe1fd1e812a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b4eec5e4f16e04d2aeca5fbae8391a0abcabadaf1fab51612cbe1fd1e812a6->enter($__internal_23b4eec5e4f16e04d2aeca5fbae8391a0abcabadaf1fab51612cbe1fd1e812a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_23b4eec5e4f16e04d2aeca5fbae8391a0abcabadaf1fab51612cbe1fd1e812a6->leave($__internal_23b4eec5e4f16e04d2aeca5fbae8391a0abcabadaf1fab51612cbe1fd1e812a6_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/edufritz/evaluacion-dev-aq/ejercicio-3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
