<?php

/* FrontBundle:Default:section-contact.html.twig */
class __TwigTemplate_9461444b5e8585f2482970906f60557fa8589298a71c60a03e295ced57f26187 extends Twig_Template
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
        // line 2
        echo "           <section class=\"content--help text-on-image row\">
                <div class=\"container\">
                    <h3>Besoin d'aide&nbsp;?</h3>
                    <p class=\"content--intro__subtitle\">
                        Contactez le service client MonDocteur du lundi au vendredi de 8h à 19h<br>
                        au <a href=\"tel:+33185084224\">01 85 08 42 24</a>
                        <br/><br/>ou depuis notre 
                        
                            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_contactus");
        echo "\"<>
                       
                            formulaire de contact
                        </a>
                    </p>
                </div>
            </section>";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:section-contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 10,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:Default:section-contact.html.twig", "C:\\xampp\\htdocs\\medecin-rendez-vous\\src\\FrontBundle/Resources/views/Default/section-contact.html.twig");
    }
}
