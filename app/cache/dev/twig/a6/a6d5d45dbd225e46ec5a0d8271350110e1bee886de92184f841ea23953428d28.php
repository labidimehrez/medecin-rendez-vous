<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3073ee32801f13ab649e7f8c75c7f91385ac51f57e69801973f9d7cffb65124a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e74c9712866d31af677b2bc71b5a5e104d83eaea3c08013e0ea2d7b707f87364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74c9712866d31af677b2bc71b5a5e104d83eaea3c08013e0ea2d7b707f87364->enter($__internal_e74c9712866d31af677b2bc71b5a5e104d83eaea3c08013e0ea2d7b707f87364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e74c9712866d31af677b2bc71b5a5e104d83eaea3c08013e0ea2d7b707f87364->leave($__internal_e74c9712866d31af677b2bc71b5a5e104d83eaea3c08013e0ea2d7b707f87364_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad15599aa49d928f12548dd79292ed6dfc66338004aa209925bea9374fbf7314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad15599aa49d928f12548dd79292ed6dfc66338004aa209925bea9374fbf7314->enter($__internal_ad15599aa49d928f12548dd79292ed6dfc66338004aa209925bea9374fbf7314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad15599aa49d928f12548dd79292ed6dfc66338004aa209925bea9374fbf7314->leave($__internal_ad15599aa49d928f12548dd79292ed6dfc66338004aa209925bea9374fbf7314_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1734d9947e011fb5354da84eba2ccdf7f44b24f5651badc237a47d23fd1e104c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1734d9947e011fb5354da84eba2ccdf7f44b24f5651badc237a47d23fd1e104c->enter($__internal_1734d9947e011fb5354da84eba2ccdf7f44b24f5651badc237a47d23fd1e104c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1734d9947e011fb5354da84eba2ccdf7f44b24f5651badc237a47d23fd1e104c->leave($__internal_1734d9947e011fb5354da84eba2ccdf7f44b24f5651badc237a47d23fd1e104c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a67981780cb97601a6265fca6ef2d52393184e01c84bbf73b004fa5c33862cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67981780cb97601a6265fca6ef2d52393184e01c84bbf73b004fa5c33862cf3->enter($__internal_a67981780cb97601a6265fca6ef2d52393184e01c84bbf73b004fa5c33862cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a67981780cb97601a6265fca6ef2d52393184e01c84bbf73b004fa5c33862cf3->leave($__internal_a67981780cb97601a6265fca6ef2d52393184e01c84bbf73b004fa5c33862cf3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\medecin-rendez-vous\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
