<?php

/* FrontBundle:Default:choisirRDV.html.twig */
class __TwigTemplate_1599a59a2d0487698c8ab92ac8925c88f120ace0209ae529802c9dbc690f4505 extends Twig_Template
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
        $__internal_c2d0e9b25bcb114b41d5ea623d21ab0008e8f3963ca2639589e7b8b6b674f269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d0e9b25bcb114b41d5ea623d21ab0008e8f3963ca2639589e7b8b6b674f269->enter($__internal_c2d0e9b25bcb114b41d5ea623d21ab0008e8f3963ca2639589e7b8b6b674f269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:choisirRDV.html.twig"));

        // line 1
        echo " 
<html lang=\"fr\" class=\"no-js\">

    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />

    <head>

        <!-- block js -->
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/newrelic/newrelic09e1.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery/core/1.11.3/jquery-1.11.3.min09e1.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
        <script type=\"text/javascript\"> document.createElement(\"picture\");</script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/picturefill/picturefill.min09e1.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
        <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD140ytd2Pz3GMkE1iwvuvMqrOKyW6qIkE&amp;libraries=places\"></script>

        

        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/application-public09e1.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
        
        
        <!-- block css -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/public/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/public/main09e1.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/public/mainc296.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/custom.css"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/newrelic/newrelicc296.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>Choisir un motif de consultation </title>
        <meta name=\"description\" content=\"Trouvez votre Gynécologue à Paris 1er et prenez RDV sur Internet facilement et gratuitement, même en urgence.\">
        <meta name=\"keywords\" content=\"MonDocteur,médecin connecté,rendez-vous en ligne,trouver un docteur,dentiste paris,ostéopathe paris,généraliste paris,dentiste lyon\">
        <meta property=\"og:title\" content=\"Gynécologue à Paris 1er, 75001 - RDV en ligne\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:image\" content=\"https://www.mondocteur.fr/assets/img/commons/identity/logo-picto.png\" />
        <meta property=\"og:url\" content=\"https://www.mondocteur.fr/gynecologue/paris-1er\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0\">
        <meta name=\"_csrf\" content=\"37e5100d-af7d-4910-aa32-a00ed86de5a0\"/>
        <meta name=\"_csrf_header\" content=\"X-CSRF-TOKEN\"/>
        <link rel=\"stylesheet\" href=\"../assets/css/public/mainc296.css?v=v201705232259\" />
        <meta name=\"apple-itunes-app\" content=\"app-id=1231038950\">
        <script src=\"../assets/js/jquery/core/1.11.3/jquery-1.11.3.minc296.js?v=v201705232259\"></script>
        <script type=\"text/javascript\"> document.createElement(\"picture\");</script>
        <script src=\"../assets/js/picturefill/picturefill.minc296.js?v=v201705232259\"></script>
        <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD140ytd2Pz3GMkE1iwvuvMqrOKyW6qIkE&amp;libraries=places\"></script>
    
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"../favicon.png\"/>
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"../apple-touch-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"../apple-touch-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"../apple-touch-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"../apple-touch-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"../apple-touch-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"../apple-touch-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"../apple-touch-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"../apple-touch-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"../apple-touch-icon-180x180.png\">
        <link rel=\"icon\" type=\"image/png\" href=\"../favicon-32x32.png\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"../android-chrome-192x192.png\" sizes=\"192x192\" >
        <link rel=\"icon\" type=\"image/png\" href=\"../favicon-96x96.png\" sizes=\"96x96\">
        <link rel=\"icon\" type=\"image/png\" href=\"../favicon-16x16.png\" sizes=\"16x16\">
        <link rel=\"manifest\" href=\"../manifest.json\">
        <link rel=\"mask-icon\" href=\"../safari-pinned-tab.svg\" color=\"#14385d\">
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"msapplication-TileImage\" content=\"/mstile-144x144.png\">
        <meta name=\"theme-color\" content=\"#32b1d2\">
        <meta name=\"msapplication-navbutton-color\" content=\"#32b1d2\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#32b1d2\">



    </head>
    <body itemscope=\"\" itemtype=\"http://schema.org/WebPage\" class=\"page--praticien page--praticien--1praticien\">
        <!--googleoff: index-->
        <div id=\"cookies-eu-banner\" class=\"cookies-banner container\" style=\"display: none;\">
            <div class=\"cookies-content\">
                En poursuivant votre navigation sur ce site, vous acceptez que des cookies soient utilisés afin d’améliorer votre expérience d’utilisateur et de vous offrir des contenus personnalisés.
                <a href=\"javascript:void(0);\" id=\"cookies-eu-more\">En savoir plus</a>
            </div>
            <div class=\"cookies-decision\">
                <button id=\"cookies-eu-reject\" class=\"btn btn-default cookies-reject\">Refuser</button>
                <button id=\"cookies-eu-accept\" class=\"btn btn-validate cookies-accept\">Accepter</button>
            </div>
        </div>
        <!--googleon: index-->
        <div id=\"popupContainer\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\"></div>
        <div id=\"alertContainer\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog--small\" role=\"document\">
                <div class=\"modal-content\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fermer\"><span aria-hidden=\"true\">&times;</span></button>
                    <div class=\"modal-body\"></div>
                    <div class=\"modal-footer\"></div>
                </div>
            </div>
        </div>
       
        <div id=\"navbar--main\" class=\"navbar--main navbar navbar-fixed-top\"  role=\"banner\">
            <header class=\"header--main\">
                ";
        // line 98
        $this->loadTemplate("FrontBundle:Default:header.html.twig", "FrontBundle:Default:choisirRDV.html.twig", 98)->display($context);
        // line 99
        echo "            </header>
        </div>
        <main class=\"content--main  container-fluid \">
            <script src=\"../../assets/js/application-publicc296.js?v=v201705232259\"></script>
            <div class=\"nav--breadcrumb__wrapper  row\">
                <nav class=\"nav--breadcrumb  container\">
                    <ul vocab=\"http://schema.org/\" typeof=\"BreadcrumbList\">
                        <li property=\"itemListElement\" typeof=\"ListItem\">
                            <a property=\"item\" typeof=\"WebPage\"
                              href=\"javascript:void(0);\">
                                <span property=\"name\"><!--Dentiste --> ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "Specialite", array()), "nomSpecialite", array()), "html", null, true);
        echo "</span></a>
                            <meta property=\"position\" content=\"1\">
                        </li>
                        <li property=\"itemListElement\" typeof=\"ListItem\">
                            <a property=\"item\" typeof=\"WebPage\"
                              href=\"javascript:void(0);\">
                                <span property=\"name\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "Specialite", array()), "nomSpecialite", array()), "html", null, true);
        echo "  à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "adresse", array()), "html", null, true);
        echo "<!--Dentiste Rhône--></span></a>
                            <meta property=\"position\" content=\"2\">
                        </li>
                      ";
        // line 130
        echo "                        <li>Docteur ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "nom", array()), "html", null, true);
        echo "<!--Katherine Tavin--></li> 
                    </ul>
                    <a href=\"javascript:void(0);\" class=\"breadcrumb__back\">Retour à la recherche</a>
                </nav>
            </div>
        
            <section class=\"praticien__infos  row\" itemscope itemtype=\"http://schema.org/MedicalOrganization\">
                <div class=\"container\">
                    <div class=\"col-sm-7\">
                        <div class=\"praticien__imgs\">
                            <div class=\"praticien__img__profil\">
                                <img srcset=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pictures/card/unknown.png"), "html", null, true);
        echo "\" class=\"praticien__img__profil\" alt=\"Dr Guy Bercau - Gynécologue\">                
                            </div>
                            <div class=\"praticien__imgs__slider__wrapper slider--praticien slider\"
                                 data-items-grid=\"false\">
                                <ul class=\"praticien__imgs__slider slider__content\">
                                    <li class=\"slider__item\">
                                        <img srcset=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pictures/card/unknown.png"), "html", null, true);
        echo "\" class=\"praticien__img__profil\" alt=\"Dr Guy Bercau - Gynécologue\">                
                                    </li>
                                    <li class=\"slider__item\">
                                        <img srcset=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pictures/card/unknown.png"), "html", null, true);
        echo "\" class=\"praticien__img__profil\" alt=\"Dr Guy Bercau - Gynécologue\">                
                                    </li>
                                    <li class=\"slider__item\">
                                        <img srcset=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pictures/card/unknown.png"), "html", null, true);
        echo "\" class=\"praticien__img__profil\" alt=\"Dr Guy Bercau - Gynécologue\">                
                                    </li>
                                    <li class=\"slider__item\">
                                        <img srcset=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pictures/card/unknown.png"), "html", null, true);
        echo "\" class=\"praticien__img__profil\" alt=\"Dr Guy Bercau - Gynécologue\">                
                                    </li>
                                </ul>
                                <!-- Flèches de nav du slider -->
                                <a href=\"javascript:void(0);\" aria-hidden=\"true\" class=\"slider__arrow slider__arrow--prev\"></a>
                                <a href=\"javascript:void(0);\" aria-hidden=\"true\" class=\"slider__arrow slider__arrow--next\"></a>
                            </div>
                        </div>
                        <div class=\"praticien__infos__id\">
                            <h1 class=\"fn org\">
                                <span class=\"praticien__name\" itemprop=\"name\">Docteur ";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "nom", array()), "html", null, true);
        echo "<!--Katherine Tavin--></span>
                                <span class=\"praticien__typeCenter\"></span>
                                <span class=\"praticien__speciality\">
                                    <!--Dentiste -->    ";
        // line 169
        if ( !(null === $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "Specialite", array()))) {
            // line 170
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "Specialite", array()), "nomSpecialite", array()), "html", null, true);
            echo "
                                        ";
        } else {
            // line 172
            echo "                                        ";
        }
        // line 173
        echo "                                </span>
                            </h1>
                            <ul class=\"praticien__infos__spe\">
                            </ul>
                        </div>
                        <div class=\"praticien__infos__consult\">
                            <div class=\"praticien__infos__consult__inner\">
                                <div class=\"praticien__infos__options praticien__options__wrapper\">
                                    <ul class=\"praticien__options\">
                                         ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "modepaiments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["modepaiment"]) {
            // line 183
            echo "                                             <li class=\"praticien__option  praticien__option--vital has-bubble\">
                                                 <span class=\"praticien__option__expl bubble\">Ce médecin accepte ";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($context["modepaiment"], "type", array()), "html", null, true);
            echo "</span>  
                                             </li>
                                      
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modepaiment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                                      <!--  <li class=\"praticien__option  praticien__option--vital has-bubble\">
                                          
                                        </li>
                                        <li class=\"praticien__option praticien__option--conv has-bubble\">
                                            <span class=\"praticien__option__expl bubble\">Ce médecin est conventionné</span>
                                        </li>
                                        -->
                                    </ul>
                                </div>
                                <div class=\"praticien__infos__details\">
                                </div>
                            </div>
                            <div class=\"praticien__infos__rdv\">
                                <a href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_je_prends_rdv", array("id" => $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-rdv btn-lg\" onclick=\"/*\$.App.ScrollTo.scrollToElmt(\$('#praticien__rdv'));*/\">Prendre RDV</a>
                            </div>
                        </div>
                        <div class=\"praticien__infos__desc \">
                            <div class=\"read-more__content\">
                                <div class=\"read-more__description\">
                                    <p>";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "description", array()), "html", null, true);
        echo "</p>
                                  <!--  <p>Le docteur Katherine TAVIN, <strong>Dentiste</strong>,&nbsp;vous accueille dans son cabinet de la <strong>presqu&#39;&icirc;le</strong> face &agrave; l&#39;&eacute;glise Saint NIZIER dans le <strong>1er arrondissement de Lyon.</strong></p>
                                    <p>Install&eacute;e depuis 1981 dans son cabinet,<strong>&nbsp;</strong>le Docteur Tavin a su d&eacute;velopper&nbsp;ses comp&eacute;tences dans tous les domaines de la dentisterie. Aujourd&#39;hui&nbsp;Dentiste&nbsp;<strong>omnipraticienne</strong>, elle&nbsp;r&eacute;alise tous les types de soins (<strong>conservateurs,&nbsp;</strong><strong>proth&eacute;tiques</strong>, <strong>esth&eacute;tiques</strong>).<br /><br />Avec l&#39;aide de Martine Perro son assistante depuis de nombreuses ann&eacute;es le Docteur Tavin prend en charge ses patients dans leur globalit&eacute; avec patience, rigueur, et professionnalisme.</p>
                              -->  </div>
                                <a href=\"#\" class=\"read-more__link read-more__link--open\">Lire la suite...</a>
                                <a href=\"#\" class=\"read-more__link read-more__link--close\">Afficher moins</a>
                                <div class=\"hide-end-text\"></div>
                            </div>
                        </div>
                        <div class=\"praticien__infos__rdv--large\">
                                 
                            <a href=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_je_prends_rdv", array("id" => $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-rdv btn-lg\" onclick=\"/*\$.App.ScrollTo.scrollToElmt(\$('#praticien__rdv'));*/\">
                                Prendre RDV
                            </a>
                        </div>
                    </div>
                    <div class=\"praticien__infos__map col-sm-5 \">
                        <div id=\"map_canvas\" class=\"map_area\">
                        </div>
                        <!-- Default location -->
                        <div class=\"praticien__infos__adress\" itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
                            <!--<span itemprop=\"streetAddress\">1, Place Saint-Nizier</span>,
                            <span itemprop=\"postalCode\">69001</span> 
                            <span itemprop=\"addressLocality\">Lyon</span>-->";
        // line 231
        echo "                        </div>
                    </div>
                </div>
            </section>
            <div id=\"waiting_container\"></div>
            <div id=\"modal-price\" class=\"modal-price modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"false\">
                <div class=\"modal-dialog modal-lg\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <h4 class=\"modal-title\">Détail des honoraires</h4>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"content\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <table class=\"table\">
                                            <caption>Actes et soins les plus fréquents chez ce praticien</caption>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <p>Ces honoraires nous ont été communiqués par le cabinet à titre indicatif. Toute intervention constituée d'actes avec dépassement fera l'objet d'un devis personnalisé du praticien.</p>
                        </div>
                    </div>
                </div>
            </div>
             
            <section class=\"praticien__rdv  row\" id=\"praticien__rdv\">
                <div class=\"container\">
                    <div class=\"s-table\">
                        <div class=\"praticien__rdv__motive s-table-cell col-sm-5\">
                            <h2>Choisissez un rendez-vous</h2>
                            <div class=\"form-group f-blue-select\">
                                <label for=\"acts\">1 - Quel est le motif de votre visite&nbsp;?</label>
                                <select name=\"rdv__motive\" id=\"acts\" class=\"rdv__motive act-list\" data-tags=\"false\" required>
                                    <option value=\"45903\" act-id=\"45903\" linked-act-id=\"\"
                                            act-type-id=\"2\">NOUVELLE CONSULTATION</option>
                                    <option value=\"45904\" act-id=\"45904\" linked-act-id=\"\"
                                            act-type-id=\"3\">RENOUVELLEMENT TRAITEMENT</option>

                                </select>
                            </div>
                            <div class=\"form-group\">
                                2 - Choisissez un rendez-vous qui vous convient dans le calendrier.
                                <p class=\"field__tip\">
                                    <span class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></span>
                                    Nous vous invitons à respecter le parcours de soin
                                </p>
                            </div>
                        </div>
                        <div class=\"praticien__rdv__dispos  s-table-cell col-sm-7\">
                            <div class=\"row\">
                                <div id=\"result__rdv__doctor-6600\" class=\"praticien__rdv__dispos  rdv__dispos__swipe s-table-cell col-sm-5\"></div>
                            </div>
                        </div>
                    </div>
                    <p class=\"text-center col-md-offset-5\" style=\"margin-top: 10px;color: #787878;\">Professionnels de santé ? <br>
                        <a href=\"javascript:void(0);\" class=\"text-center\" style=\"font-size: 13px;\">Prenez rendez-vous pour vos patients</a></p>
                </div>
            </section>
            <section class=\"praticien__info-details  row\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"praticien__info-details__col  col-sm-4\">
                            <div class=\"info-details__bloc info-details__bloc--cursus\">
                                <h3>
                                    <span class=\"icon-livre\" aria-hidden=\"true\"></span>
                                    Cursus
                                </h3>
                                <div class=\"info-details__bloc__content\">
                                    <ul>
                                        <li>
                                            <p class=\"diplome\">Dentiste</p>
                                            <p>Lyon
                                                Depuis 1981
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"info-details__bloc info-details__bloc--legal\">
                            </div>
                        </div>
                        <div class=\"praticien__info-details__col  col-sm-4\">
                            <div class=\"info-details__bloc info-details__bloc--consultation\">
                                <h4>
                                    <span class=\"icon-credit\" aria-hidden=\"true\"></span>
                                    Modes de règlement
                                </h4>
                                <ul class=\"info-details__bloc__content payment\">
                                    <li class=\"praticien__payment praticien__payment--cb  has-bubble\">
                                        <span class=\"praticien__option__expl bubble\">Ce médecin accepte la carte bleue test</span>
                                    </li>
                                    <li class=\"praticien__payment praticien__payment--check  has-bubble\">
                                        <span class=\"praticien__option__expl bubble\">Ce médecin accepte les chèques</span>
                                    </li>
                                    <li class=\"praticien__payment praticien__payment--cash  has-bubble\">
                                        <span class=\"praticien__option__expl bubble\">Ce médecin accepte les espèces</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Zone /zones/doctor/extra-information/consultation begin -->
                            <div class=\"info-details__bloc info-details__bloc--consultation\">
                                <h4>
                                    <span class=\"icon-stethoscope\" aria-hidden=\"true\"></span>
                                    Consultations proposées
                                </h4>
                                <p class=\"info-details__bloc__content\">Le cabinet dentaire <span>prend en charge les adultes et les enfants ( sauf nourrissons ).</span></br></p>
                            </div>
                            <!-- Zone /zones/doctor/extra-information/consultation end : Success, elapsed 4 ms -->
                            <!-- Zone /zones/doctor/extra-information/workingHour begin -->
                            <div class=\"info-details__bloc info-details__bloc--horaires\">
                                <h4>
                                    <span class=\"icon-horloge\" aria-hidden=\"true\"></span>
                                    Horaires d'ouverture
                                </h4>
                                <div class=\"info-details__bloc__content\" itemprop=\"openingHoursSpecification\" itemscope itemtype=\"http://schema.org/OpeningHoursSpecification\">
                                    <ul>
                                        <li class=\"horaires__working-day\">
                                            <span class=\"horaires__working-day__weekday\">
                                                Lundi
                                            </span>
                                            <time itemprop=\"openingHours\" datetime=\"Mo 09:00-19:00\">
                                                <span class=\"horaires__working-day__hours\"><span class=\"number\">10:00</span> - <span class=\"number\">19:00</span></span>
                                            </time>
                                            <!-- <span class=\"endDay\"></span> -->
                                            </span>
                                        </li>
                                        <li class=\"horaires__working-day\">
                                            <span class=\"horaires__working-day__weekday\">
                                                Mardi
                                            </span>
                                            <time itemprop=\"openingHours\" datetime=\"Mo 09:00-19:00\">
                                                <span class=\"horaires__working-day__hours\"><span class=\"number\">07:45</span> - <span class=\"number\">18:30</span></span>
                                            </time>
                                            <!-- <span class=\"endDay\"></span> -->
                                            </span>
                                        </li>
                                        <li class=\"horaires__working-day\">
                                            <span class=\"horaires__working-day__weekday\">
                                                Mercredi
                                            </span>
                                            <time itemprop=\"openingHours\" datetime=\"Mo 09:00-19:00\">
                                                <span class=\"horaires__working-day__hours\"><span class=\"number\">10:00</span> - <span class=\"number\">15:00</span></span>
                                            </time>
                                            <!-- <span class=\"endDay\"></span> -->
                                            </span>
                                        </li>
                                        <li class=\"horaires__working-day\">
                                            <span class=\"horaires__working-day__weekday\">
                                                Jeudi
                                            </span>
                                            <time itemprop=\"openingHours\" datetime=\"Mo 09:00-19:00\">
                                                <span class=\"horaires__working-day__hours\"><span class=\"number\">07:45</span> - <span class=\"number\">18:30</span></span>
                                            </time>
                                            <!-- <span class=\"endDay\"></span> -->
                                            </span>
                                        </li>
                                        <li class=\"horaires__working-day\">
                                            <span class=\"horaires__working-day__weekday\">
                                                Vendredi
                                            </span>
                                            <time itemprop=\"openingHours\" datetime=\"Mo 09:00-19:00\">
                                                <span class=\"horaires__working-day__hours\"><span class=\"number\">11:00</span> - <span class=\"number\">15:00</span></span>
                                            </time>
                                            <!-- <span class=\"endDay\"></span> -->
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--CONTACT -->
                        </div>
                        <div class=\"praticien__info-details__col  col-sm-4\">
                            <div class=\"info-details__bloc info-details__bloc--access\">
                                <h3>
                                    <span class=\"icon-location\" aria-hidden=\"true\"></span>
                                    Détails d'Accès
                                </h3>
                                <!-- Zone /zones/doctor/extra-information/proximity begin -->
                                <div class=\"bloc proximityText\">
                                    <div>
                                        <p>Le cabinet dentaire se situe Place Saint-Nizier &agrave; Lyon 1er (69001), entre Cordeliers et l&#39;H&ocirc;tel de Ville.&nbsp;</p>
                                        <p>Transports :&nbsp;Cordeliers Bourse (m&eacute;tro A),&nbsp;H&ocirc;tel de Ville - Louis Pradel (m&eacute;tro A et C).&nbsp;</p>
                                    </div>
                                </div>
                                <!-- Zone /zones/doctor/extra-information/proximity end : Success, elapsed 5 ms -->
                            </div>
                            <!-- Zone /zones/doctor/extra-information/access begin -->
                            <h4>
                                <span class=\"icon-office\" aria-hidden=\"true\"></span>
                                Accès Cabinet
                            </h4>
                            <ul class=\"info-details__bloc__content\">
                                <li>
                                    <p>Le cabinet dentaire  dispose d'un ascenseur</p>
                                </li>
                            </ul>
                            <!-- Zone /zones/doctor/extra-information/access end : Success, elapsed 4 ms -->
                            <!-- Zone /zones/doctor/extra-information/transport-list begin -->
                            <div class=\"bloc transportBloc transport-list\">
                                <h4>
                                    <span class=\"icon-directions\" aria-hidden=\"true\"></span>
                                    Moyens de Transport
                                </h4>
                                <h5>
                                    <span class=\"lineType ratp-logo-metro\" aria-hidden=\"true\"></span>
                                    Métro
                                </h5>
                                <ul class=\"info-details__bloc__content\">
                                    <li>
                                        <p><span class=\"nameStation\">Hôtel de Ville   Louis Pradel</span></p>
                                        <ul class=\"lines\">
                                            <li>
                                                <span class=\"line subway\" style=\"background-color: #F99D1D; border-color: #F99D1D\">C</span>
                                            </li>
                                            <li>
                                                <span class=\"line subway\" style=\"background-color: #EE3898; border-color: #EE3898\">A</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Zone /zones/doctor/extra-information/transport-list end : Success, elapsed 161 ms -->
                        </div>
                    </div>
                </div>
            </section>
            ";
        // line 464
        $this->loadTemplate("FrontBundle:Default:section-contact.html.twig", "FrontBundle:Default:choisirRDV.html.twig", 464)->display($context);
        // line 465
        echo "        </main>
        ";
        // line 466
        $this->loadTemplate("FrontBundle:Default:footer.html.twig", "FrontBundle:Default:choisirRDV.html.twig", 466)->display($context);
        // line 467
        echo "        
        <div id=\"gaTrackingId\" style=\"display:none;\">UA-38892532-1</div>
        <div id=\"gaDoctorId\" style=\"display:none;\">6600</div>
        <div id=\"gaSpecialityId\" style=\"display:none;\">2</div>
        <div id=\"criteoTrackingId\" style=\"display:none;\">22485</div>
        <div id=\"facebookTrackingId\" style=\"display:none;\">870433126375864</div>
    </body>
    <!-- Mirrored from www.mondocteur.fr/dentiste/lyon-1er/tavin-katherine.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 May 2017 20:29:04 GMT -->
</html>";
        
        $__internal_c2d0e9b25bcb114b41d5ea623d21ab0008e8f3963ca2639589e7b8b6b674f269->leave($__internal_c2d0e9b25bcb114b41d5ea623d21ab0008e8f3963ca2639589e7b8b6b674f269_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:choisirRDV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  574 => 467,  572 => 466,  569 => 465,  567 => 464,  332 => 231,  317 => 218,  303 => 207,  294 => 201,  279 => 188,  269 => 184,  266 => 183,  262 => 182,  251 => 173,  248 => 172,  242 => 170,  240 => 169,  234 => 166,  221 => 156,  215 => 153,  209 => 150,  203 => 147,  194 => 141,  179 => 130,  171 => 115,  162 => 109,  150 => 99,  148 => 98,  73 => 26,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  49 => 17,  41 => 12,  36 => 10,  32 => 9,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" 
<html lang=\"fr\" class=\"no-js\">

    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />

    <head>

        <!-- block js -->
        <script src=\"{{ asset('bundles/front/js/newrelic/newrelic09e1.js') }}\"  type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/front/js/jquery/core/1.11.3/jquery-1.11.3.min09e1.js') }}\"  type=\"text/javascript\"></script>
        <script type=\"text/javascript\"> document.createElement(\"picture\");</script>
        <script src=\"{{ asset('bundles/front/js/picturefill/picturefill.min09e1.js') }}\"  type=\"text/javascript\"></script>
        <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD140ytd2Pz3GMkE1iwvuvMqrOKyW6qIkE&amp;libraries=places\"></script>

        

        <script src=\"{{ asset('bundles/front/js/application-public09e1.js') }}\"  type=\"text/javascript\"></script>
        
        
        <!-- block css -->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/front/css/public/main.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/front/css/public/main09e1.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/front/css/public/mainc296.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/front/css/custom.css') }}\">

        <script src=\"{{ asset('bundles/front/js/newrelic/newrelicc296.js') }}\"  type=\"text/javascript\"></script>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>Choisir un motif de consultation </title>
        <meta name=\"description\" content=\"Trouvez votre Gynécologue à Paris 1er et prenez RDV sur Internet facilement et gratuitement, même en urgence.\">
        <meta name=\"keywords\" content=\"MonDocteur,médecin connecté,rendez-vous en ligne,trouver un docteur,dentiste paris,ostéopathe paris,généraliste paris,dentiste lyon\">
        <meta property=\"og:title\" content=\"Gynécologue à Paris 1er, 75001 - RDV en ligne\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:image\" content=\"https://www.mondocteur.fr/assets/img/commons/identity/logo-picto.png\" />
        <meta property=\"og:url\" content=\"https://www.mondocteur.fr/gynecologue/paris-1er\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0\">
        <meta name=\"_csrf\" content=\"37e5100d-af7d-4910-aa32-a00ed86de5a0\"/>
        <meta name=\"_csrf_header\" content=\"X-CSRF-TOKEN\"/>
        <link rel=\"stylesheet\" href=\"../assets/css/public/mainc296.css?v=v201705232259\" />
        <meta name=\"apple-itunes-app\" content=\"app-id=1231038950\">
        <script src=\"../assets/js/jquery/core/1.11.3/jquery-1.11.3.minc296.js?v=v201705232259\"></script>
        <script type=\"text/javascript\"> document.createElement(\"picture\");</script>
        <script src=\"../assets/js/picturefill/picturefill.minc296.js?v=v201705232259\"></script>
        <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD140ytd2Pz3GMkE1iwvuvMqrOKyW6qIkE&amp;libraries=places\"></script>
    
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"../favicon.png\"/>
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"../apple-touch-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"../apple-touch-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"../apple-touch-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"../apple-touch-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"../apple-touch-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"../apple-touch-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"../apple-touch-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"../apple-touch-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"../apple-touch-icon-180x180.png\">
        <link rel=\"icon\" type=\"image/png\" href=\"../favicon-32x32.png\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"../android-chrome-192x192.png\" sizes=\"192x192\" >
        <link rel=\"icon\" type=\"image/png\" href=\"../favicon-96x96.png\" sizes=\"96x96\">
        <link rel=\"icon\" type=\"image/png\" href=\"../favicon-16x16.png\" sizes=\"16x16\">
        <link rel=\"manifest\" href=\"../manifest.json\">
        <link rel=\"mask-icon\" href=\"../safari-pinned-tab.svg\" color=\"#14385d\">
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"msapplication-TileImage\" content=\"/mstile-144x144.png\">
        <meta name=\"theme-color\" content=\"#32b1d2\">
        <meta name=\"msapplication-navbutton-color\" content=\"#32b1d2\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#32b1d2\">



    </head>
    <body itemscope=\"\" itemtype=\"http://schema.org/WebPage\" class=\"page--praticien page--praticien--1praticien\">
        <!--googleoff: index-->
        <div id=\"cookies-eu-banner\" class=\"cookies-banner container\" style=\"display: none;\">
            <div class=\"cookies-content\">
                En poursuivant votre navigation sur ce site, vous acceptez que des cookies soient utilisés afin d’améliorer votre expérience d’utilisateur et de vous offrir des contenus personnalisés.
                <a href=\"javascript:void(0);\" id=\"cookies-eu-more\">En savoir plus</a>
            </div>
            <div class=\"cookies-decision\">
                <button id=\"cookies-eu-reject\" class=\"btn btn-default cookies-reject\">Refuser</button>
                <button id=\"cookies-eu-accept\" class=\"btn btn-validate cookies-accept\">Accepter</button>
            </div>
        </div>
        <!--googleon: index-->
        <div id=\"popupContainer\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\"></div>
        <div id=\"alertContainer\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog--small\" role=\"document\">
                <div class=\"modal-content\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fermer\"><span aria-hidden=\"true\">&times;</span></button>
                    <div class=\"modal-body\"></div>
                    <div class=\"modal-footer\"></div>
                </div>
            </div>
        </div>
       
        <div id=\"navbar--main\" class=\"navbar--main navbar navbar-fixed-top\"  role=\"banner\">
            <header class=\"header--main\">
                {% include 'FrontBundle:Default:header.html.twig' %}
            </header>
        </div>
        <main class=\"content--main  container-fluid \">
            <script src=\"../../assets/js/application-publicc296.js?v=v201705232259\"></script>
            <div class=\"nav--breadcrumb__wrapper  row\">
                <nav class=\"nav--breadcrumb  container\">
                    <ul vocab=\"http://schema.org/\" typeof=\"BreadcrumbList\">
                        <li property=\"itemListElement\" typeof=\"ListItem\">
                            <a property=\"item\" typeof=\"WebPage\"
                              href=\"javascript:void(0);\">
                                <span property=\"name\"><!--Dentiste --> {{medecin.Specialite.nomSpecialite}}</span></a>
                            <meta property=\"position\" content=\"1\">
                        </li>
                        <li property=\"itemListElement\" typeof=\"ListItem\">
                            <a property=\"item\" typeof=\"WebPage\"
                              href=\"javascript:void(0);\">
                                <span property=\"name\">{{medecin.Specialite.nomSpecialite}}  à {{medecin.adresse}}<!--Dentiste Rhône--></span></a>
                            <meta property=\"position\" content=\"2\">
                        </li>
                      {#  <li property=\"itemListElement\" typeof=\"ListItem\">
                            <a property=\"item\" typeof=\"WebPage\"
                               href=\"javascript:void(0);\">
                                <span property=\"name\">{{medecin.Specialite.nomSpecialite}}  à {{medecin.adresse}}<!--Dentiste Lyon--></span></a>
                            <meta property=\"position\" content=\"3\">
                        </li>
                        <li property=\"itemListElement\" typeof=\"ListItem\">
                            <a property=\"item\" typeof=\"WebPage\"
                              href=\"javascript:void(0);\">
                                <span property=\"name\">{{medecin.Specialite.nomSpecialite}}  à {{medecin.adresse}}<!--Dentiste Lyon 1er--></span></a>
                            <meta property=\"position\" content=\"4\">
                        </li>#}
                        <li>Docteur {{medecin.nom}}<!--Katherine Tavin--></li> 
                    </ul>
                    <a href=\"javascript:void(0);\" class=\"breadcrumb__back\">Retour à la recherche</a>
                </nav>
            </div>
        
            <section class=\"praticien__infos  row\" itemscope itemtype=\"http://schema.org/MedicalOrganization\">
                <div class=\"container\">
                    <div class=\"col-sm-7\">
                        <div class=\"praticien__imgs\">
                            <div class=\"praticien__img__profil\">
                                <img srcset=\"{{ asset('bundles/front/images/pictures/card/unknown.png') }}\" class=\"praticien__img__profil\" alt=\"Dr Guy Bercau - Gynécologue\">                
                            </div>
                            <div class=\"praticien__imgs__slider__wrapper slider--praticien slider\"
                                 data-items-grid=\"false\">
                                <ul class=\"praticien__imgs__slider slider__content\">
                                    <li class=\"slider__item\">
                                        <img srcset=\"{{ asset('bundles/front/images/pictures/card/unknown.png') }}\" class=\"praticien__img__profil\" alt=\"Dr Guy Bercau - Gynécologue\">                
                                    </li>
                                    <li class=\"slider__item\">
                                        <img srcset=\"{{ asset('bundles/front/images/pictures/card/unknown.png') }}\" class=\"praticien__img__profil\" alt=\"Dr Guy Bercau - Gynécologue\">                
                                    </li>
                                    <li class=\"slider__item\">
                                        <img srcset=\"{{ asset('bundles/front/images/pictures/card/unknown.png') }}\" class=\"praticien__img__profil\" alt=\"Dr Guy Bercau - Gynécologue\">                
                                    </li>
                                    <li class=\"slider__item\">
                                        <img srcset=\"{{ asset('bundles/front/images/pictures/card/unknown.png') }}\" class=\"praticien__img__profil\" alt=\"Dr Guy Bercau - Gynécologue\">                
                                    </li>
                                </ul>
                                <!-- Flèches de nav du slider -->
                                <a href=\"javascript:void(0);\" aria-hidden=\"true\" class=\"slider__arrow slider__arrow--prev\"></a>
                                <a href=\"javascript:void(0);\" aria-hidden=\"true\" class=\"slider__arrow slider__arrow--next\"></a>
                            </div>
                        </div>
                        <div class=\"praticien__infos__id\">
                            <h1 class=\"fn org\">
                                <span class=\"praticien__name\" itemprop=\"name\">Docteur {{medecin.nom}}<!--Katherine Tavin--></span>
                                <span class=\"praticien__typeCenter\"></span>
                                <span class=\"praticien__speciality\">
                                    <!--Dentiste -->    {% if  medecin.Specialite is not null %}
                                            {{ medecin.Specialite.nomSpecialite }}
                                        {% else %}
                                        {% endif %}
                                </span>
                            </h1>
                            <ul class=\"praticien__infos__spe\">
                            </ul>
                        </div>
                        <div class=\"praticien__infos__consult\">
                            <div class=\"praticien__infos__consult__inner\">
                                <div class=\"praticien__infos__options praticien__options__wrapper\">
                                    <ul class=\"praticien__options\">
                                         {% for modepaiment     in medecin.modepaiments %}
                                             <li class=\"praticien__option  praticien__option--vital has-bubble\">
                                                 <span class=\"praticien__option__expl bubble\">Ce médecin accepte {{  modepaiment.type }}</span>  
                                             </li>
                                      
                                        {% endfor %}
                                      <!--  <li class=\"praticien__option  praticien__option--vital has-bubble\">
                                          
                                        </li>
                                        <li class=\"praticien__option praticien__option--conv has-bubble\">
                                            <span class=\"praticien__option__expl bubble\">Ce médecin est conventionné</span>
                                        </li>
                                        -->
                                    </ul>
                                </div>
                                <div class=\"praticien__infos__details\">
                                </div>
                            </div>
                            <div class=\"praticien__infos__rdv\">
                                <a href=\"{{ path('front_je_prends_rdv',{'id':medecin.id}) }}\" class=\"btn btn-rdv btn-lg\" onclick=\"/*\$.App.ScrollTo.scrollToElmt(\$('#praticien__rdv'));*/\">Prendre RDV</a>
                            </div>
                        </div>
                        <div class=\"praticien__infos__desc \">
                            <div class=\"read-more__content\">
                                <div class=\"read-more__description\">
                                    <p>{{  medecin.description }}</p>
                                  <!--  <p>Le docteur Katherine TAVIN, <strong>Dentiste</strong>,&nbsp;vous accueille dans son cabinet de la <strong>presqu&#39;&icirc;le</strong> face &agrave; l&#39;&eacute;glise Saint NIZIER dans le <strong>1er arrondissement de Lyon.</strong></p>
                                    <p>Install&eacute;e depuis 1981 dans son cabinet,<strong>&nbsp;</strong>le Docteur Tavin a su d&eacute;velopper&nbsp;ses comp&eacute;tences dans tous les domaines de la dentisterie. Aujourd&#39;hui&nbsp;Dentiste&nbsp;<strong>omnipraticienne</strong>, elle&nbsp;r&eacute;alise tous les types de soins (<strong>conservateurs,&nbsp;</strong><strong>proth&eacute;tiques</strong>, <strong>esth&eacute;tiques</strong>).<br /><br />Avec l&#39;aide de Martine Perro son assistante depuis de nombreuses ann&eacute;es le Docteur Tavin prend en charge ses patients dans leur globalit&eacute; avec patience, rigueur, et professionnalisme.</p>
                              -->  </div>
                                <a href=\"#\" class=\"read-more__link read-more__link--open\">Lire la suite...</a>
                                <a href=\"#\" class=\"read-more__link read-more__link--close\">Afficher moins</a>
                                <div class=\"hide-end-text\"></div>
                            </div>
                        </div>
                        <div class=\"praticien__infos__rdv--large\">
                                 
                            <a href=\"{{ path('front_je_prends_rdv',{'id':medecin.id}) }}\" class=\"btn btn-rdv btn-lg\" onclick=\"/*\$.App.ScrollTo.scrollToElmt(\$('#praticien__rdv'));*/\">
                                Prendre RDV
                            </a>
                        </div>
                    </div>
                    <div class=\"praticien__infos__map col-sm-5 \">
                        <div id=\"map_canvas\" class=\"map_area\">
                        </div>
                        <!-- Default location -->
                        <div class=\"praticien__infos__adress\" itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
                            <!--<span itemprop=\"streetAddress\">1, Place Saint-Nizier</span>,
                            <span itemprop=\"postalCode\">69001</span> 
                            <span itemprop=\"addressLocality\">Lyon</span>-->{#{medecin.adresse}#}
                        </div>
                    </div>
                </div>
            </section>
            <div id=\"waiting_container\"></div>
            <div id=\"modal-price\" class=\"modal-price modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"false\">
                <div class=\"modal-dialog modal-lg\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <h4 class=\"modal-title\">Détail des honoraires</h4>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"content\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <table class=\"table\">
                                            <caption>Actes et soins les plus fréquents chez ce praticien</caption>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <p>Ces honoraires nous ont été communiqués par le cabinet à titre indicatif. Toute intervention constituée d'actes avec dépassement fera l'objet d'un devis personnalisé du praticien.</p>
                        </div>
                    </div>
                </div>
            </div>
             
            <section class=\"praticien__rdv  row\" id=\"praticien__rdv\">
                <div class=\"container\">
                    <div class=\"s-table\">
                        <div class=\"praticien__rdv__motive s-table-cell col-sm-5\">
                            <h2>Choisissez un rendez-vous</h2>
                            <div class=\"form-group f-blue-select\">
                                <label for=\"acts\">1 - Quel est le motif de votre visite&nbsp;?</label>
                                <select name=\"rdv__motive\" id=\"acts\" class=\"rdv__motive act-list\" data-tags=\"false\" required>
                                    <option value=\"45903\" act-id=\"45903\" linked-act-id=\"\"
                                            act-type-id=\"2\">NOUVELLE CONSULTATION</option>
                                    <option value=\"45904\" act-id=\"45904\" linked-act-id=\"\"
                                            act-type-id=\"3\">RENOUVELLEMENT TRAITEMENT</option>

                                </select>
                            </div>
                            <div class=\"form-group\">
                                2 - Choisissez un rendez-vous qui vous convient dans le calendrier.
                                <p class=\"field__tip\">
                                    <span class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></span>
                                    Nous vous invitons à respecter le parcours de soin
                                </p>
                            </div>
                        </div>
                        <div class=\"praticien__rdv__dispos  s-table-cell col-sm-7\">
                            <div class=\"row\">
                                <div id=\"result__rdv__doctor-6600\" class=\"praticien__rdv__dispos  rdv__dispos__swipe s-table-cell col-sm-5\"></div>
                            </div>
                        </div>
                    </div>
                    <p class=\"text-center col-md-offset-5\" style=\"margin-top: 10px;color: #787878;\">Professionnels de santé ? <br>
                        <a href=\"javascript:void(0);\" class=\"text-center\" style=\"font-size: 13px;\">Prenez rendez-vous pour vos patients</a></p>
                </div>
            </section>
            <section class=\"praticien__info-details  row\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"praticien__info-details__col  col-sm-4\">
                            <div class=\"info-details__bloc info-details__bloc--cursus\">
                                <h3>
                                    <span class=\"icon-livre\" aria-hidden=\"true\"></span>
                                    Cursus
                                </h3>
                                <div class=\"info-details__bloc__content\">
                                    <ul>
                                        <li>
                                            <p class=\"diplome\">Dentiste</p>
                                            <p>Lyon
                                                Depuis 1981
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"info-details__bloc info-details__bloc--legal\">
                            </div>
                        </div>
                        <div class=\"praticien__info-details__col  col-sm-4\">
                            <div class=\"info-details__bloc info-details__bloc--consultation\">
                                <h4>
                                    <span class=\"icon-credit\" aria-hidden=\"true\"></span>
                                    Modes de règlement
                                </h4>
                                <ul class=\"info-details__bloc__content payment\">
                                    <li class=\"praticien__payment praticien__payment--cb  has-bubble\">
                                        <span class=\"praticien__option__expl bubble\">Ce médecin accepte la carte bleue test</span>
                                    </li>
                                    <li class=\"praticien__payment praticien__payment--check  has-bubble\">
                                        <span class=\"praticien__option__expl bubble\">Ce médecin accepte les chèques</span>
                                    </li>
                                    <li class=\"praticien__payment praticien__payment--cash  has-bubble\">
                                        <span class=\"praticien__option__expl bubble\">Ce médecin accepte les espèces</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Zone /zones/doctor/extra-information/consultation begin -->
                            <div class=\"info-details__bloc info-details__bloc--consultation\">
                                <h4>
                                    <span class=\"icon-stethoscope\" aria-hidden=\"true\"></span>
                                    Consultations proposées
                                </h4>
                                <p class=\"info-details__bloc__content\">Le cabinet dentaire <span>prend en charge les adultes et les enfants ( sauf nourrissons ).</span></br></p>
                            </div>
                            <!-- Zone /zones/doctor/extra-information/consultation end : Success, elapsed 4 ms -->
                            <!-- Zone /zones/doctor/extra-information/workingHour begin -->
                            <div class=\"info-details__bloc info-details__bloc--horaires\">
                                <h4>
                                    <span class=\"icon-horloge\" aria-hidden=\"true\"></span>
                                    Horaires d'ouverture
                                </h4>
                                <div class=\"info-details__bloc__content\" itemprop=\"openingHoursSpecification\" itemscope itemtype=\"http://schema.org/OpeningHoursSpecification\">
                                    <ul>
                                        <li class=\"horaires__working-day\">
                                            <span class=\"horaires__working-day__weekday\">
                                                Lundi
                                            </span>
                                            <time itemprop=\"openingHours\" datetime=\"Mo 09:00-19:00\">
                                                <span class=\"horaires__working-day__hours\"><span class=\"number\">10:00</span> - <span class=\"number\">19:00</span></span>
                                            </time>
                                            <!-- <span class=\"endDay\"></span> -->
                                            </span>
                                        </li>
                                        <li class=\"horaires__working-day\">
                                            <span class=\"horaires__working-day__weekday\">
                                                Mardi
                                            </span>
                                            <time itemprop=\"openingHours\" datetime=\"Mo 09:00-19:00\">
                                                <span class=\"horaires__working-day__hours\"><span class=\"number\">07:45</span> - <span class=\"number\">18:30</span></span>
                                            </time>
                                            <!-- <span class=\"endDay\"></span> -->
                                            </span>
                                        </li>
                                        <li class=\"horaires__working-day\">
                                            <span class=\"horaires__working-day__weekday\">
                                                Mercredi
                                            </span>
                                            <time itemprop=\"openingHours\" datetime=\"Mo 09:00-19:00\">
                                                <span class=\"horaires__working-day__hours\"><span class=\"number\">10:00</span> - <span class=\"number\">15:00</span></span>
                                            </time>
                                            <!-- <span class=\"endDay\"></span> -->
                                            </span>
                                        </li>
                                        <li class=\"horaires__working-day\">
                                            <span class=\"horaires__working-day__weekday\">
                                                Jeudi
                                            </span>
                                            <time itemprop=\"openingHours\" datetime=\"Mo 09:00-19:00\">
                                                <span class=\"horaires__working-day__hours\"><span class=\"number\">07:45</span> - <span class=\"number\">18:30</span></span>
                                            </time>
                                            <!-- <span class=\"endDay\"></span> -->
                                            </span>
                                        </li>
                                        <li class=\"horaires__working-day\">
                                            <span class=\"horaires__working-day__weekday\">
                                                Vendredi
                                            </span>
                                            <time itemprop=\"openingHours\" datetime=\"Mo 09:00-19:00\">
                                                <span class=\"horaires__working-day__hours\"><span class=\"number\">11:00</span> - <span class=\"number\">15:00</span></span>
                                            </time>
                                            <!-- <span class=\"endDay\"></span> -->
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--CONTACT -->
                        </div>
                        <div class=\"praticien__info-details__col  col-sm-4\">
                            <div class=\"info-details__bloc info-details__bloc--access\">
                                <h3>
                                    <span class=\"icon-location\" aria-hidden=\"true\"></span>
                                    Détails d'Accès
                                </h3>
                                <!-- Zone /zones/doctor/extra-information/proximity begin -->
                                <div class=\"bloc proximityText\">
                                    <div>
                                        <p>Le cabinet dentaire se situe Place Saint-Nizier &agrave; Lyon 1er (69001), entre Cordeliers et l&#39;H&ocirc;tel de Ville.&nbsp;</p>
                                        <p>Transports :&nbsp;Cordeliers Bourse (m&eacute;tro A),&nbsp;H&ocirc;tel de Ville - Louis Pradel (m&eacute;tro A et C).&nbsp;</p>
                                    </div>
                                </div>
                                <!-- Zone /zones/doctor/extra-information/proximity end : Success, elapsed 5 ms -->
                            </div>
                            <!-- Zone /zones/doctor/extra-information/access begin -->
                            <h4>
                                <span class=\"icon-office\" aria-hidden=\"true\"></span>
                                Accès Cabinet
                            </h4>
                            <ul class=\"info-details__bloc__content\">
                                <li>
                                    <p>Le cabinet dentaire  dispose d'un ascenseur</p>
                                </li>
                            </ul>
                            <!-- Zone /zones/doctor/extra-information/access end : Success, elapsed 4 ms -->
                            <!-- Zone /zones/doctor/extra-information/transport-list begin -->
                            <div class=\"bloc transportBloc transport-list\">
                                <h4>
                                    <span class=\"icon-directions\" aria-hidden=\"true\"></span>
                                    Moyens de Transport
                                </h4>
                                <h5>
                                    <span class=\"lineType ratp-logo-metro\" aria-hidden=\"true\"></span>
                                    Métro
                                </h5>
                                <ul class=\"info-details__bloc__content\">
                                    <li>
                                        <p><span class=\"nameStation\">Hôtel de Ville   Louis Pradel</span></p>
                                        <ul class=\"lines\">
                                            <li>
                                                <span class=\"line subway\" style=\"background-color: #F99D1D; border-color: #F99D1D\">C</span>
                                            </li>
                                            <li>
                                                <span class=\"line subway\" style=\"background-color: #EE3898; border-color: #EE3898\">A</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Zone /zones/doctor/extra-information/transport-list end : Success, elapsed 161 ms -->
                        </div>
                    </div>
                </div>
            </section>
            {% include 'FrontBundle:Default:section-contact.html.twig' %}
        </main>
        {% include 'FrontBundle:Default:footer.html.twig' %}
        
        <div id=\"gaTrackingId\" style=\"display:none;\">UA-38892532-1</div>
        <div id=\"gaDoctorId\" style=\"display:none;\">6600</div>
        <div id=\"gaSpecialityId\" style=\"display:none;\">2</div>
        <div id=\"criteoTrackingId\" style=\"display:none;\">22485</div>
        <div id=\"facebookTrackingId\" style=\"display:none;\">870433126375864</div>
    </body>
    <!-- Mirrored from www.mondocteur.fr/dentiste/lyon-1er/tavin-katherine.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 May 2017 20:29:04 GMT -->
</html>", "FrontBundle:Default:choisirRDV.html.twig", "C:\\xampp\\htdocs\\medecin-rendez-vous\\src\\FrontBundle/Resources/views/Default/choisirRDV.html.twig");
    }
}
