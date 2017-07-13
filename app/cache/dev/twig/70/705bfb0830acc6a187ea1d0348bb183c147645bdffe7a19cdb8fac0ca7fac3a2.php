<?php

/* FrontBundle:Default:header.html.twig */
class __TwigTemplate_592088a0d2cc72ea9426639f75a61abbc09a680d3ea1bcc0184c8432b0b7d689 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ace0ce4b3cd3e9633eb766651534caf573ebb830e2724b7916aec8eea404a3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace0ce4b3cd3e9633eb766651534caf573ebb830e2724b7916aec8eea404a3d6->enter($__internal_ace0ce4b3cd3e9633eb766651534caf573ebb830e2724b7916aec8eea404a3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:header.html.twig"));

        // line 1
        echo "<div class=\"container\">

    <div id=\"browserMsg\" class=\"btn btn-danger disabled\">
        <span class=\"icon-warning\"></span>
        <span>Votre navigateur semble obsolète, pour profiter pleinement de MonDocteur.fr, nous vous recommandons de mettre à jour votre navigateur.</span>
    </div>

    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navbar-collapse\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </button>

    <div class=\"title--main\">
        <a href=\"index.html\">
      
            <img srcset=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/commons/identity/logo.png"), "html", null, true);
        echo "\" alt=\" \">
        </a>
    </div>


    <nav class=\"nav--main\" role=\"navigation\">
        <ul class=\"nav--user  nav navbar-nav collapse navbar-collapse\" id=\"main-navbar-collapse\">


  ";
        // line 26
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 27
            echo "            <li class=\"nav--user--connect\">
                <a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    Déconnecter
                </a>
            </li>
   ";
        } else {
            // line 33
            echo "            <li class=\"nav--user--connect\">
                <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                    Mon compte
                </a>
            </li>
  
   
            <li class=\"nav--user--pro\">
                <a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-primary btn-lg\">Vous êtes praticien ?</a>
            </li>
   ";
        }
        // line 44
        echo "        </ul>
    </nav>

</div>";
        
        $__internal_ace0ce4b3cd3e9633eb766651534caf573ebb830e2724b7916aec8eea404a3d6->leave($__internal_ace0ce4b3cd3e9633eb766651534caf573ebb830e2724b7916aec8eea404a3d6_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 44,  78 => 41,  68 => 34,  65 => 33,  57 => 28,  54 => 27,  52 => 26,  40 => 17,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">

    <div id=\"browserMsg\" class=\"btn btn-danger disabled\">
        <span class=\"icon-warning\"></span>
        <span>Votre navigateur semble obsolète, pour profiter pleinement de MonDocteur.fr, nous vous recommandons de mettre à jour votre navigateur.</span>
    </div>

    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navbar-collapse\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </button>

    <div class=\"title--main\">
        <a href=\"index.html\">
      
            <img srcset=\"{{ asset('bundles/front/images/commons/identity/logo.png') }}\" alt=\" \">
        </a>
    </div>


    <nav class=\"nav--main\" role=\"navigation\">
        <ul class=\"nav--user  nav navbar-nav collapse navbar-collapse\" id=\"main-navbar-collapse\">


  {% if app.user %}
            <li class=\"nav--user--connect\">
                <a href=\"{{path(\"fos_user_security_logout\")}}\">
                    Déconnecter
                </a>
            </li>
   {% else %}
            <li class=\"nav--user--connect\">
                <a href=\"{{path(\"fos_user_security_login\")}}\">
                    Mon compte
                </a>
            </li>
  
   
            <li class=\"nav--user--pro\">
                <a href=\"{{path(\"fos_user_registration_register\")}}\" class=\"btn btn-primary btn-lg\">Vous êtes praticien ?</a>
            </li>
   {% endif %}
        </ul>
    </nav>

</div>", "FrontBundle:Default:header.html.twig", "C:\\xampp\\htdocs\\medecin-rendez-vous\\src\\FrontBundle/Resources/views/Default/header.html.twig");
    }
}
