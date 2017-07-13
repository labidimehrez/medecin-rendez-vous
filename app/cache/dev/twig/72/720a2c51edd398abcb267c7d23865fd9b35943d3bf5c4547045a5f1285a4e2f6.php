<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_26c507a49e053963959126dd1ceff2c6cc94a6def19da86bfdf74140484f217b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_429b43785cbd2a8f316a7907d08330f6c533b9764351c1a79e3ebd4d1c815405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429b43785cbd2a8f316a7907d08330f6c533b9764351c1a79e3ebd4d1c815405->enter($__internal_429b43785cbd2a8f316a7907d08330f6c533b9764351c1a79e3ebd4d1c815405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429b43785cbd2a8f316a7907d08330f6c533b9764351c1a79e3ebd4d1c815405->leave($__internal_429b43785cbd2a8f316a7907d08330f6c533b9764351c1a79e3ebd4d1c815405_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca7361d471910730563cb41bfe8f376e7ce1a19004d64b34b33f1f305682929e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7361d471910730563cb41bfe8f376e7ce1a19004d64b34b33f1f305682929e->enter($__internal_ca7361d471910730563cb41bfe8f376e7ce1a19004d64b34b33f1f305682929e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ca7361d471910730563cb41bfe8f376e7ce1a19004d64b34b33f1f305682929e->leave($__internal_ca7361d471910730563cb41bfe8f376e7ce1a19004d64b34b33f1f305682929e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0308614f2f04636a590eda86195a0fb2989cf747b4c042e3682d10f328efd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0308614f2f04636a590eda86195a0fb2989cf747b4c042e3682d10f328efd2c->enter($__internal_e0308614f2f04636a590eda86195a0fb2989cf747b4c042e3682d10f328efd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e0308614f2f04636a590eda86195a0fb2989cf747b4c042e3682d10f328efd2c->leave($__internal_e0308614f2f04636a590eda86195a0fb2989cf747b4c042e3682d10f328efd2c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9162ccd1256b6ad3922a5a0a3efc9decfffc84edb90fb010fcfc233d36ebcb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9162ccd1256b6ad3922a5a0a3efc9decfffc84edb90fb010fcfc233d36ebcb9a->enter($__internal_9162ccd1256b6ad3922a5a0a3efc9decfffc84edb90fb010fcfc233d36ebcb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9162ccd1256b6ad3922a5a0a3efc9decfffc84edb90fb010fcfc233d36ebcb9a->leave($__internal_9162ccd1256b6ad3922a5a0a3efc9decfffc84edb90fb010fcfc233d36ebcb9a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\medecin-rendez-vous\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
