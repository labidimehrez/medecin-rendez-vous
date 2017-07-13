<?php

/* FrontBundle:Default:prendreRDVlisting.html.twig */
class __TwigTemplate_8877a1fcc7259c8687c725605654aeed3c9809c18dbcf8cafb51d10512aa492a extends Twig_Template
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
        $__internal_8ccb4873b84b4e2a7092c721b8f6bf214521ea782456810eb7300ca034414c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ccb4873b84b4e2a7092c721b8f6bf214521ea782456810eb7300ca034414c60->enter($__internal_8ccb4873b84b4e2a7092c721b8f6bf214521ea782456810eb7300ca034414c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:prendreRDVlisting.html.twig"));

        // line 1
        echo " 
<html lang=\"fr\">

    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <head>
        <!-- block js -->
        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/newrelic/newrelic09e1.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery/core/1.11.3/jquery-1.11.3.min09e1.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
        <script type=\"text/javascript\"> /*document.createElement(\"picture\");*/</script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/picturefill/picturefill.min09e1.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
        <!--  <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD140ytd2Pz3GMkE1iwvuvMqrOKyW6qIkE&amp;libraries=places\"></script>-->

        

        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/application-public09e1.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
      
       
        <!-- block css -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/public/main09e1.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/public/mainc296.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/custom.css"), "html", null, true);
        echo "\">


        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

        <title>Prenez Rendez-Vous en Ligne</title>
        <meta name=\"description\" content=\"Trouvez rapidement un médecin ou un dentiste près de chez vous et prenez rendez-vous gratuitement en ligne en quelques clics !\">
        <meta name=\"keywords\" content=\"MonDocteur,médecin connecté,rendez-vous en ligne,trouver un docteur,dentiste paris,ostéopathe paris,généraliste paris,dentiste lyon\">

        <meta property=\"og:title\" content=\"MonDocteur - Prenez Rendez-Vous en Ligne avec votre Médecin ou votre Dentiste\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:image\" content=\"/*https://www.mondocteur.fr/assets/img/commons/identity/logo-picto.png*/\" />
        <meta property=\"og:url\" content=\"/*https://www.mondocteur.fr/*/\" />



        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0\">
        <meta name=\"_csrf\" content=\"ffb586e1-78ce-4e98-86bf-cfb20c866e35\"/>
        <meta name=\"_csrf_header\" content=\"X-CSRF-TOKEN\"/>





        <meta name=\"apple-itunes-app\" content=\"app-id=1231038950\">




        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"favicon.png\"/>
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"apple-touch-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"apple-touch-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"apple-touch-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"apple-touch-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"apple-touch-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"apple-touch-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"apple-touch-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"apple-touch-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"apple-touch-icon-180x180.png\">
        <link rel=\"icon\" type=\"image/png\" href=\"favicon-32x32.png\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"android-chrome-192x192.png\" sizes=\"192x192\" >
        <link rel=\"icon\" type=\"image/png\" href=\"favicon-96x96.png\" sizes=\"96x96\">
        <link rel=\"icon\" type=\"image/png\" href=\"favicon-16x16.png\" sizes=\"16x16\">
        <link rel=\"manifest\" href=\"manifest.json\">
        <link rel=\"mask-icon\" href=\"safari-pinned-tab.svg\" color=\"#14385d\">

        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"msapplication-TileImage\" content=\"/mstile-144x144.png\">
        <meta name=\"theme-color\" content=\"#32b1d2\">
        <meta name=\"msapplication-navbutton-color\" content=\"#32b1d2\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#32b1d2\">



        <link rel=\"stylesheet\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/calendarjs/fullcalendar.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/calendarjs/fullcalendar.print.min.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/calendarjs/moment.min.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
        ";
        // line 80
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/calendarjs/fullcalendar.min.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/calendarjs/locale-all.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
    </head>
    <body itemscope=\"\" itemtype=\"http://schema.org/WebPage\" class=\"page--results\" onload=\"initialize();\">
        <!--googleoff: index-->
        <div id=\"cookies-eu-banner\" class=\"cookies-banner container\" style=\"display: none;\">
            <div class=\"cookies-content\">
                En poursuivant votre navigation sur ce site, vous acceptez que des cookies soient utilisés afin d’améliorer votre expérience d’utilisateur et de vous offrir des contenus personnalisés.
                <a href=\"../pages/charte-donnees-personnelles-et-cookies.html\" id=\"cookies-eu-more\">En savoir plus</a>
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
        // line 112
        $this->loadTemplate("FrontBundle:Default:header.html.twig", "FrontBundle:Default:prendreRDVlisting.html.twig", 112)->display($context);
        // line 113
        echo "            </header>
        </div>

        <main class=\"content--main  container-fluid \">

            ";
        // line 119
        echo "            <section class=\"search__context  row\">
                <div class=\"search__form\">
                    <div class=\"search-forms container\">
                        <nav class=\"search-forms__switchs\">
                            <ul>
                                <li><a class=\"search-forms__switch search-forms__switch--selected\" href=\"#doctorSearchForm\">Rechercher par spécialité</a></li>
                                <!--  <li><a class=\"search-forms__switch \" href=\"#searchDoctorByName\">J'ai déjà mon médecin</a></li>-->
                            </ul>
                        </nav>

                        <form id=\"doctorSearchForm\" method=\"POST\" action=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_prendre_rdv_listing");
        echo "\" class=\"search-form search-form--selected f--search\">
                            <h3>Rechercher par spécialité</h3>

                            <div class=\"form-groups form-group__doc-speciality\">
                                <div class=\"form-group f-blue-select\">
                                    <label for=\"searchCategory\">Spécialité recherchée</label>
                                    <select id=\"searchCategory\" name=\"searchCategory\" class=\"search__doc-speciality\" data-tags=\"false\" data-placeholder=\"Spécialité recherchée\" required>
                                        <optgroup value=\"0\" label=\"\"></optgroup>
                                        ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["specialites"]) ? $context["specialites"] : $this->getContext($context, "specialites")));
        foreach ($context['_seq'] as $context["_key"] => $context["specialite"]) {
            // line 138
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["specialite"], "id", array()), "html", null, true);
            echo "\" data-path=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["specialite"], "nomSpecialite", array()), "html", null, true);
            echo "\">
                                                ";
            // line 139
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["specialite"], "nomSpecialite", array())), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specialite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                                        <option value=\"Autres\"  data-path=\"Autres\">Autres</option> 

                                    </select>
                                </div>


                                <link rel=\"stylesheet\" href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/jquery-ui.css"), "html", null, true);
        echo "\">
                                <script type=\"text/javascript\">
                                    \$(document).ready(function () {
                                        function removeDoublons(tablo) {
                                            var uniqueNames = [];
                                            \$.each(tablo, function (i, el) {
                                                if (\$.inArray(el, uniqueNames) === -1)
                                                    uniqueNames.push(el);
                                            });
                                            return uniqueNames;
                                        }
                                        var availableTags = [];
                                    ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medecins"]) ? $context["medecins"] : $this->getContext($context, "medecins")));
        foreach ($context['_seq'] as $context["_key"] => $context["medecin"]) {
            echo "   
                                        availableTags.push(\"";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "adresse", array()), "html", null, true);
            echo "\");
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medecin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                                            availableTags = removeDoublons(availableTags);
                                            \$(\"#accordion\").accordion();
                                            \$(\"#autocomplete\").autocomplete({
                                                source: availableTags
                                            });
                                        });
                                </script>
                                <div id=\"location_search_container\" class=\"location_search_container\">
                                    <div id=\"location_div\" class=\"form-group form-group__search__doc-where\">
                                        <label for=\"doctorSearchForm_location\">Où ?</label>
                                        <input type=\"text\" id=\"autocomplete\" name=\"location\" class=\"search__doc-where form-control\" data-toggle=\"popover\" data-placement=\"bottom\" data-trigger=\"manual\" data-placeholder=\"Où ? (adresse, ville...)\" placeholder=\"Où ? (adresse, ville...)\" value=\"\" latitude=\"\" longitude=\"\" required>
                                        <a href=\"javascript:void(0);\" class=\"search__doc-where__geolc geolc icon-location\" data-toggle=\"popover\" data-placement=\"bottom\" data-trigger=\"manual\"><span>Autour de moi</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-actions\">
                                <input type=\"submit\" class=\"btn btn-validate\" value=\"Prendre RDV\">
                            </div>                             
                        </form>



                    </div>
                </div>
                <div class=\"search-seo active-seo\">
                    <div class=\"search-seo__content container\">
                        <div class=\"search-seo__title\">
                            <h1 itemscope itemtype=\"/*http://data-vocabulary.org/Breadcrumb*/\">Trouvez votre 
                                <span itemprop=\"title\">
                                    <!-- Gynécologue
                                     à Paris 1er, 75001 -->
                                    ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medecins"]) ? $context["medecins"] : $this->getContext($context, "medecins")));
        foreach ($context['_seq'] as $context["_key"] => $context["medecin"]) {
            echo "   ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["medecin"], "Specialite", array()), "nomSpecialite", array()), "html", null, true);
            echo "&nbsp;à &nbsp; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "adresse", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medecin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                                </span>
                            </h1>
                            et 
                            <h2>prenez RDV par Internet !</h2>
                            <a class=\"research-seo anchorSearch toggle-search change-search\" href=\"javascript:;\">Modifier la recherche</a>
                        </div>
                        <div class=\"search-seo__map\">
                            <button class=\"toggle-map  btn btn-rdv\">Carte</button>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class=\"search__results  container\">
                <!-- ce div sert à contenir la map qui scroll avec le contenu -->
                <div class=\"clearfix search__results__inner\" data-sticky_parent=\"\">
                    <div class=\"container__map\" id=\"container__map\" data-sticky_column=\"\">
                        <p class=\"text-center hidden-sm hidden-xs\" style=\"margin-top: 10px\">
                            Professionnels de santé ? <br>
                            <a href=\"javascript:void(0);\" class=\"text-center\" style=\"font-size: 13px;\">
                                Prenez rendez-vous pour vos patients
                            </a>
                        </p>
                        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDlKpNL3J4klh_qoJjpxoVMU6uiAFVSk4M\" async defer></script>

               <script type=\"text/javascript\">
                var geocoder;
                var map;
                var address = \"Ariana, TN\";
                 ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medecins"]) ? $context["medecins"] : $this->getContext($context, "medecins")));
        foreach ($context['_seq'] as $context["_key"] => $context["medecin"]) {
            echo " 
                      address = \"";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "adresse", array()), "html", null, true);
            echo "\"; 
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medecin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo " 
                function initialize() {
                    geocoder = new google.maps.Geocoder();
                    var latlng = new google.maps.LatLng(-34.397, 150.644);
                    var myOptions = {
                        zoom: 8,
                        center: latlng,
                        mapTypeControl: true,
                        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                        navigationControl: true,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    map = new google.maps.Map(document.getElementById(\"map_canvas\"), myOptions);
                    if (geocoder) {
                        geocoder.geocode({'address': address}, function (results, status) {
                            if (status == google.maps.GeocoderStatus.OK) {
                                if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                                    map.setCenter(results[0].geometry.location);

                                    var infowindow = new google.maps.InfoWindow(
                                            {content: '<b>' + address + '</b>',
                                                size: new google.maps.Size(150, 50)
                                            });

                                    var marker = new google.maps.Marker({
                                        position: results[0].geometry.location,
                                        map: map,
                                        title: address
                                    });
                                    google.maps.event.addListener(marker, 'click', function () {
                                        infowindow.open(map, marker);
                                    });

                                } else {
                                    alert(\"No results found\");
                                }
                            } else {
                                alert(\"Geocode was not successful for the following reason: \" + status);
                            }
                        });
                    }
                }
                        </script> 


                        <div class=\"map__wrapper\" id=\"map__wrapper\">
                            <div class=\"map\" id=\"map_canvas\"  >
                            </div>
                        </div>
                    </div>
                    <div class=\"map-overlay-card popover bottom\">
                        <div class=\"arrow\"></div>
                        <div class=\"card-content\"></div>
                    </div>
                    <div class=\"results\">
                        <div class=\"result__showing-days\" id=\"result__showing-days\" data-sticky_column=\"\">
                            <p>Liste des praticiens disponibles pour les dates suivantes :</p>
                            ";
        // line 290
        echo "                        </div>

                        <ol class=\"results__list\">

                            ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medecins"]) ? $context["medecins"] : $this->getContext($context, "medecins")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["medecin"]) {
            echo " 
                                <li class=\"result doc_result_list\" doctorId=\"1198\" data-selectDom=\"1198\" availabilityKey=\"1198\" locationLng=\"2.321450499999969\" locationLat=\"48.8607474\">
                                    <div class=\"result__praticien has-bubble\">
                                        <div class=\"praticien__sticker\">
                                            <a href=\"javascript:void(0);\" class=\"result__pin\">";
            // line 298
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</a>
                                            <div class=\"praticien__img\">
                                                <a href=\"javascript:void(0);\">
                                                    <img srcset=\"";
            // line 301
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pictures/card/unknown.png"), "html", null, true);
            echo "\" class=\"praticien__img__profil\" alt=\"Dr Guy Bercau - Gynécologue\">                
                                                </a>
                                            </div>
                                            <h3 class=\"praticien__fn\">
                                                <span class=\"praticien__name\">
                                                    <a href=\"javascript:void(0);\">Dr <!--Guy Bercau-->";
            // line 306
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "nom", array()), "html", null, true);
            echo "</a>
                                                </span>
                                                <span class=\"praticien__speciality\"><!--Gynécologue-->";
            // line 308
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["medecin"], "Specialite", array())), "html", null, true);
            echo "&nbsp;
                                                </span>
                                            </h3>
                                            <div class=\"praticien__infos\">
                                                <p class=\"praticien__adress\">";
            // line 312
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["medecin"], "adresse", array())), "html", null, true);
            echo "<!--276 boulevard St Germain<br>75007 Paris--></p>
                                                <div class=\"praticien__options__wrapper\">
                                                    <ul class=\"praticien__options\">
                                                        <li class=\"praticien__option  praticien__option--vital-no has-bubble\">
                                                            <span class=\"praticien__option__expl bubble bubble--left\">Ce médecin n'accepte pas la carte vitale</span>
                                                        </li>
                                                        <li class=\"praticien__option praticien__option--conv2 has-bubble\">
                                                            <span class=\"praticien__option__expl bubble bubble--left\">Ce médecin est conventionné Secteur 2</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"praticien__actions\">
                                                <a class=\"btn btn-rdv\" href=\"";
            // line 325
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_choisir_rdv", array("id" => $this->getAttribute($context["medecin"], "id", array()))), "html", null, true);
            echo "\">Prendre RDV</a>
                                            </div>
                                        </div>
                                        
                                        <div class=\"bubble bubble--top praticien__more\">
                                            <div class=\"bubble__content\">
                                                <!--<div class=\"bubble__office\">
                                                    <div class=\"bubble__office-text\">
                                                        <h4>Présentation du cabinet</h4>
                                                        <p>Gyn&eacute;cologue Obst&eacute;tricien, le Dr Bercau vous re&ccedil;oit dans son cabinet situ&eacute; 276 Boulevard St Germain en plein coeur du 7&egrave;me arrondissement de Paris (75007).</p>
                                                        <p>Le Dr Bercau re&ccedil;oit essentiellement&nbsp; une patient&egrave;le adulte pour laquelle il dispense des consultations de <strong>gyn&eacute;cologie m&eacute;dicale</strong>, de <strong>chirurgie gyn&eacute;cologique</strong> et de<strong> suivi de grossesse</strong>. Il pratique <strong>la pose et le retrait de st&eacute;rilet</strong>s.</p>
                                                        <p>En parall&egrave;le de son activit&eacute; lib&eacute;rale, le Dr Bercau exerce au sein de la <strong>Maternit&eacute; Notre Dame de Bon Secours </strong>(H&ocirc;pital St Joseph Paris 75014)<strong>.</strong><br />Il est &eacute;galement le <strong>coordinateur du Centre Fibrome &agrave; l&#39;H&ocirc;pital Saint Joseph </strong>(Paris 75014).</p>
                                                        <div class=\"hide-end-text\"></div>
                                                    </div>
                                                    <div class=\"bubble__office-link\">
                                                        <a href=\"paris-7eme/guy-bercau-1198.html\">Voir plus</a>
                                                    </div>
                                                </div>-->
                                                <div class=\"bubble__price\">
                                                    <h4>Prix de la consultation</h4>
                                                    <p>";
            // line 345
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "tarif", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["money"]) ? $context["money"] : $this->getContext($context, "money")), "html", null, true);
            echo "
                                                        <!-- 75&euro;-->
                                                    </p>
                                                    <h4>Modes de règlement</h4>
                                                    <ul class=\"praticien__payments\">
                                                        ";
            // line 350
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["medecin"], "modepaiments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["modepaiment"]) {
                echo "  
                                                            - ";
                // line 351
                echo twig_escape_filter($this->env, $this->getAttribute($context["modepaiment"], "type", array()), "html", null, true);
                echo "</br>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modepaiment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 353
            echo "
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <div id=\"result__rdv__doctor-1198\" class=\"result__rdv rdv__dispos__swipe\">
                                        <!--  <table class=\"praticien__rdv-table praticien__rdv-table--small\">
                                             <thead></thead>
                                             <tbody class=\"result__doctorId\">
                                             </tbody>
                                          </table>-->

                                        <script type=\"text/javascript\">
                                            \$(document).ready(function () {
                                                var arrayData = [];
                                                var data = [];

                                            ";
            // line 376
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["medecin"], "Rendezvous", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
                // line 377
                echo "                                                ";
                if (($this->getAttribute($context["rdv"], "isValidated", array()) == true)) {
                    // line 378
                    echo "                                                    ";
                    $context["type"] = $this->getAttribute($context["rdv"], "type", array());
                    // line 379
                    echo "                                                    ";
                    $context["annee"] = $this->getAttribute($context["rdv"], "annee", array());
                    // line 380
                    echo "                                                    ";
                    $context["mois"] = $this->getAttribute($context["rdv"], "mois", array());
                    // line 381
                    echo "                                                    ";
                    $context["jour"] = $this->getAttribute($context["rdv"], "jour", array());
                    // line 382
                    echo "                                                    ";
                    $context["heure"] = $this->getAttribute($context["rdv"], "heure", array());
                    // line 383
                    echo "                                                    ";
                    $context["minute"] = $this->getAttribute($context["rdv"], "minute", array());
                    // line 384
                    echo "
                                                            data = {title: '";
                    // line 385
                    echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                    echo "',
                                                                start: '";
                    // line 386
                    echo twig_escape_filter($this->env, (isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, (isset($context["jour"]) ? $context["jour"] : $this->getContext($context, "jour")), "html", null, true);
                    echo "T";
                    echo twig_escape_filter($this->env, (isset($context["heure"]) ? $context["heure"] : $this->getContext($context, "heure")), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, (isset($context["minute"]) ? $context["minute"] : $this->getContext($context, "minute")), "html", null, true);
                    echo ":00',
                                                                end: '";
                    // line 387
                    echo twig_escape_filter($this->env, (isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, (isset($context["jour"]) ? $context["jour"] : $this->getContext($context, "jour")), "html", null, true);
                    echo "T";
                    echo twig_escape_filter($this->env, (isset($context["heure"]) ? $context["heure"] : $this->getContext($context, "heure")), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, (isset($context["minute"]) ? $context["minute"] : $this->getContext($context, "minute")), "html", null, true);
                    echo ":00'
                                                            };

                                                            arrayData.push(data);
                                                ";
                }
                // line 392
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 393
            echo "

                                                    var date = new Date();
                                                    var d = date.getDate(),
                                                            m = date.getMonth(),
                                                            y = date.getFullYear();
                                                    \$('#calendar";
            // line 399
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "id", array()), "html", null, true);
            echo "').fullCalendar({
                                                        header: {
                                                            left: 'prev,next today',
                                                            center: 'title',
                                                            right: 'month,agendaWeek,agendaDay,listWeek'
                                                        },
                                                        locale: 'fr',
                                                        defaultDate: new Date(y, m, d),
                                                        navLinks: true, // can click day/week names to navigate views
                                                        editable: true,
                                                        eventLimit: true, // allow \"more\" link when too many events
                                                        events: arrayData//[

                                                    });

                                                });
                                        </script>

                                        <div id='calendar";
            // line 417
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "id", array()), "html", null, true);
            echo "'></div>
                                    </div>
                                    <div class=\"result__actions\">
                                        <a class=\"btn btn-rdv\" href=\"";
            // line 420
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_choisir_rdv", array("id" => $this->getAttribute($context["medecin"], "id", array()))), "html", null, true);
            echo "\">
                                            Prendre RDV
                                        </a>
                                    </div>
                                </li>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medecin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        echo "

                            <li class=\"result result--separator\" aria-hidden=\"true\">
                                <div class=\"result__praticien has-bubble\"></div>
                                <div class=\"result__rdv\"></div>
                            </li>

                        </ol>
                    </div>
                    <div class=\"results results--directory\">
                    </div>
                </div>
                <nav class=\"md-pagination\">
                    <ul>
                        <li class=\"md-pagination__page
                            md-pagination__page--current\"><a href=\"javascript:void(0);\"  rel=\"prev\">1</a></li>
                        <li class=\"md-pagination__page
                            \"><a href=\"javascript:void(0);\" rel=\"next\">2</a></li>
                        <li class=\"md-pagination__page
                            \"><a href=\"javascript:void(0);\" rel=\"next\">3</a></li>
                        <li class=\"md-pagination__page
                            \"><a href=\"javascript:void(0);\" rel=\"next\">4</a></li>
                        <li class=\"md-pagination__page
                            \"><a href=\"javascript:void(0);\" rel=\"next\">5</a></li>
                        <li class=\"md-pagination__page\"><span class=\"three-point-right\">&nbsp;&nbsp;...</span></li>
                        <li class=\"md-pagination__next\">
                            <a href=\"javascript:void(0);\" rel=\"next\">Suivant</a>
                        </li>
                    </ul>
                </nav>
            </section>
            <div id=\"waiting_container\"></div>
            <div class=\"nav--breadcrumb__botom\">
                <nav class=\"nav--breadcrumb\">
                    <ul vocab=\"http://schema.org/\" typeof=\"BreadcrumbList\">
                        <li><a href=\"javascript:void(0);\">Mon Docteur</a></li>
                        <li property=\"itemListElement\" typeof=\"ListItem\">
                            <a property=\"item\" typeof=\"WebPage\"
                               href=\"javascript:void(0);\">
                                <span property=\"name\"> 
                                    ";
        // line 466
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medecins"]) ? $context["medecins"] : $this->getContext($context, "medecins")));
        foreach ($context['_seq'] as $context["_key"] => $context["medecin"]) {
            echo " 
                                        ";
            // line 467
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["medecin"], "Specialite", array()), "nomSpecialite", array()), "html", null, true);
            echo "
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medecin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 468
        echo " 
                                    <!--      Gynécologue-->
                                </span></a>
                            <meta property=\"position\" content=\"1\">
                        </li>
                        <li property=\"itemListElement\" typeof=\"ListItem\">
                            <a property=\"item\" typeof=\"WebPage\"
                               href=\"javascript:void(0);\">
                                <span property=\"name\">
                                    ";
        // line 477
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medecins"]) ? $context["medecins"] : $this->getContext($context, "medecins")));
        foreach ($context['_seq'] as $context["_key"] => $context["medecin"]) {
            echo "   ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["medecin"], "Specialite", array()), "nomSpecialite", array()), "html", null, true);
            echo "&nbsp; &nbsp; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "adresse", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medecin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                                    <!--    Gynécologue Paris -->
                                </span>
                            </a>
                            <meta property=\"position\" content=\"2\">
                        </li>
                        <!-- <li property=\"itemListElement\" typeof=\"ListItem\">
                             <span property=\"item\" typeof=\"WebPage\">
                                 <span property=\"name\">Gynécologue Paris 1er</span></span>
                             <meta property=\"position\" content=\"3\">
                         </li>-->
                    </ul>
                </nav>
            </div>


            ";
        // line 493
        $this->loadTemplate("FrontBundle:Default:section-contact.html.twig", "FrontBundle:Default:prendreRDVlisting.html.twig", 493)->display($context);
        // line 494
        echo "
        </main>


        ";
        // line 498
        $this->loadTemplate("FrontBundle:Default:footer.html.twig", "FrontBundle:Default:prendreRDVlisting.html.twig", 498)->display($context);
        // line 499
        echo "
         
        <div id=\"gaTrackingId\" style=\"display:none;\">UA-38892532-1</div>
        <div id=\"criteoTrackingId\" style=\"display:none;\">22485</div>
        <div id=\"facebookTrackingId\" style=\"display:none;\">870433126375864</div>
    </body>
</html>";
        
        $__internal_8ccb4873b84b4e2a7092c721b8f6bf214521ea782456810eb7300ca034414c60->leave($__internal_8ccb4873b84b4e2a7092c721b8f6bf214521ea782456810eb7300ca034414c60_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:prendreRDVlisting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  780 => 499,  778 => 498,  772 => 494,  770 => 493,  740 => 477,  729 => 468,  721 => 467,  715 => 466,  673 => 426,  653 => 420,  647 => 417,  626 => 399,  618 => 393,  612 => 392,  596 => 387,  584 => 386,  580 => 385,  577 => 384,  574 => 383,  571 => 382,  568 => 381,  565 => 380,  562 => 379,  559 => 378,  556 => 377,  552 => 376,  527 => 353,  519 => 351,  513 => 350,  503 => 345,  480 => 325,  464 => 312,  457 => 308,  452 => 306,  444 => 301,  438 => 298,  416 => 294,  410 => 290,  351 => 226,  343 => 225,  337 => 224,  306 => 195,  293 => 194,  260 => 163,  252 => 161,  246 => 160,  231 => 148,  223 => 142,  214 => 139,  207 => 138,  203 => 137,  192 => 129,  180 => 119,  173 => 113,  171 => 112,  137 => 81,  132 => 80,  128 => 78,  124 => 77,  120 => 76,  62 => 21,  58 => 20,  54 => 19,  47 => 15,  39 => 10,  34 => 8,  30 => 7,  22 => 1,);
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
<html lang=\"fr\">

    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <head>
        <!-- block js -->
        <script src=\"{{ asset('bundles/front/js/newrelic/newrelic09e1.js') }}\"  type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/front/js/jquery/core/1.11.3/jquery-1.11.3.min09e1.js') }}\"  type=\"text/javascript\"></script>
        <script type=\"text/javascript\"> /*document.createElement(\"picture\");*/</script>
        <script src=\"{{ asset('bundles/front/js/picturefill/picturefill.min09e1.js') }}\"  type=\"text/javascript\"></script>
        <!--  <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD140ytd2Pz3GMkE1iwvuvMqrOKyW6qIkE&amp;libraries=places\"></script>-->

        

        <script src=\"{{ asset('bundles/front/js/application-public09e1.js') }}\"  type=\"text/javascript\"></script>
      
       
        <!-- block css -->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/front/css/public/main09e1.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/front/css/public/mainc296.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/front/css/custom.css') }}\">


        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

        <title>Prenez Rendez-Vous en Ligne</title>
        <meta name=\"description\" content=\"Trouvez rapidement un médecin ou un dentiste près de chez vous et prenez rendez-vous gratuitement en ligne en quelques clics !\">
        <meta name=\"keywords\" content=\"MonDocteur,médecin connecté,rendez-vous en ligne,trouver un docteur,dentiste paris,ostéopathe paris,généraliste paris,dentiste lyon\">

        <meta property=\"og:title\" content=\"MonDocteur - Prenez Rendez-Vous en Ligne avec votre Médecin ou votre Dentiste\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:image\" content=\"/*https://www.mondocteur.fr/assets/img/commons/identity/logo-picto.png*/\" />
        <meta property=\"og:url\" content=\"/*https://www.mondocteur.fr/*/\" />



        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0\">
        <meta name=\"_csrf\" content=\"ffb586e1-78ce-4e98-86bf-cfb20c866e35\"/>
        <meta name=\"_csrf_header\" content=\"X-CSRF-TOKEN\"/>





        <meta name=\"apple-itunes-app\" content=\"app-id=1231038950\">




        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"favicon.png\"/>
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"apple-touch-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"apple-touch-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"apple-touch-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"apple-touch-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"apple-touch-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"apple-touch-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"apple-touch-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"apple-touch-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"apple-touch-icon-180x180.png\">
        <link rel=\"icon\" type=\"image/png\" href=\"favicon-32x32.png\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"android-chrome-192x192.png\" sizes=\"192x192\" >
        <link rel=\"icon\" type=\"image/png\" href=\"favicon-96x96.png\" sizes=\"96x96\">
        <link rel=\"icon\" type=\"image/png\" href=\"favicon-16x16.png\" sizes=\"16x16\">
        <link rel=\"manifest\" href=\"manifest.json\">
        <link rel=\"mask-icon\" href=\"safari-pinned-tab.svg\" color=\"#14385d\">

        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"msapplication-TileImage\" content=\"/mstile-144x144.png\">
        <meta name=\"theme-color\" content=\"#32b1d2\">
        <meta name=\"msapplication-navbutton-color\" content=\"#32b1d2\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#32b1d2\">



        <link rel=\"stylesheet\" href=\"{{ asset('bundles/front/js/calendarjs/fullcalendar.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/front/js/calendarjs/fullcalendar.print.min.css') }}\">
        <script src=\"{{ asset('bundles/front/js/calendarjs/moment.min.js') }}\"  type=\"text/javascript\"></script>
        {#<script src=\"{{ asset('bundles/front/js/calendarjs/jquery.min.js') }}\"  type=\"text/javascript\"></script> #}
        <script src=\"{{ asset('bundles/front/js/calendarjs/fullcalendar.min.js') }}\"  type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/front/js/calendarjs/locale-all.js') }}\"  type=\"text/javascript\"></script>
    </head>
    <body itemscope=\"\" itemtype=\"http://schema.org/WebPage\" class=\"page--results\" onload=\"initialize();\">
        <!--googleoff: index-->
        <div id=\"cookies-eu-banner\" class=\"cookies-banner container\" style=\"display: none;\">
            <div class=\"cookies-content\">
                En poursuivant votre navigation sur ce site, vous acceptez que des cookies soient utilisés afin d’améliorer votre expérience d’utilisateur et de vous offrir des contenus personnalisés.
                <a href=\"../pages/charte-donnees-personnelles-et-cookies.html\" id=\"cookies-eu-more\">En savoir plus</a>
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

            {# <script src=\"{{ asset('bundles/front/js/application-publicc296.js') }}\"  type=\"text/javascript\"></script> #}
            <section class=\"search__context  row\">
                <div class=\"search__form\">
                    <div class=\"search-forms container\">
                        <nav class=\"search-forms__switchs\">
                            <ul>
                                <li><a class=\"search-forms__switch search-forms__switch--selected\" href=\"#doctorSearchForm\">Rechercher par spécialité</a></li>
                                <!--  <li><a class=\"search-forms__switch \" href=\"#searchDoctorByName\">J'ai déjà mon médecin</a></li>-->
                            </ul>
                        </nav>

                        <form id=\"doctorSearchForm\" method=\"POST\" action=\"{{path(\"front_prendre_rdv_listing\")}}\" class=\"search-form search-form--selected f--search\">
                            <h3>Rechercher par spécialité</h3>

                            <div class=\"form-groups form-group__doc-speciality\">
                                <div class=\"form-group f-blue-select\">
                                    <label for=\"searchCategory\">Spécialité recherchée</label>
                                    <select id=\"searchCategory\" name=\"searchCategory\" class=\"search__doc-speciality\" data-tags=\"false\" data-placeholder=\"Spécialité recherchée\" required>
                                        <optgroup value=\"0\" label=\"\"></optgroup>
                                        {% for  specialite  in specialites %}
                                            <option value=\"{{specialite.id}}\" data-path=\"{{specialite.nomSpecialite}}\">
                                                {{specialite.nomSpecialite|capitalize}}
                                            </option>
                                        {% endfor %}
                                        <option value=\"Autres\"  data-path=\"Autres\">Autres</option> 

                                    </select>
                                </div>


                                <link rel=\"stylesheet\" href=\"{{ asset('bundles/front/css/jquery-ui.css') }}\">
                                <script type=\"text/javascript\">
                                    \$(document).ready(function () {
                                        function removeDoublons(tablo) {
                                            var uniqueNames = [];
                                            \$.each(tablo, function (i, el) {
                                                if (\$.inArray(el, uniqueNames) === -1)
                                                    uniqueNames.push(el);
                                            });
                                            return uniqueNames;
                                        }
                                        var availableTags = [];
                                    {% for  medecin   in medecins %}   
                                        availableTags.push(\"{{medecin.adresse}}\");
                                    {% endfor %}
                                            availableTags = removeDoublons(availableTags);
                                            \$(\"#accordion\").accordion();
                                            \$(\"#autocomplete\").autocomplete({
                                                source: availableTags
                                            });
                                        });
                                </script>
                                <div id=\"location_search_container\" class=\"location_search_container\">
                                    <div id=\"location_div\" class=\"form-group form-group__search__doc-where\">
                                        <label for=\"doctorSearchForm_location\">Où ?</label>
                                        <input type=\"text\" id=\"autocomplete\" name=\"location\" class=\"search__doc-where form-control\" data-toggle=\"popover\" data-placement=\"bottom\" data-trigger=\"manual\" data-placeholder=\"Où ? (adresse, ville...)\" placeholder=\"Où ? (adresse, ville...)\" value=\"\" latitude=\"\" longitude=\"\" required>
                                        <a href=\"javascript:void(0);\" class=\"search__doc-where__geolc geolc icon-location\" data-toggle=\"popover\" data-placement=\"bottom\" data-trigger=\"manual\"><span>Autour de moi</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-actions\">
                                <input type=\"submit\" class=\"btn btn-validate\" value=\"Prendre RDV\">
                            </div>                             
                        </form>



                    </div>
                </div>
                <div class=\"search-seo active-seo\">
                    <div class=\"search-seo__content container\">
                        <div class=\"search-seo__title\">
                            <h1 itemscope itemtype=\"/*http://data-vocabulary.org/Breadcrumb*/\">Trouvez votre 
                                <span itemprop=\"title\">
                                    <!-- Gynécologue
                                     à Paris 1er, 75001 -->
                                    {% for medecin  in medecins  %}   {{medecin.Specialite.nomSpecialite}}&nbsp;à &nbsp; {{medecin.adresse}} {% endfor %}
                                </span>
                            </h1>
                            et 
                            <h2>prenez RDV par Internet !</h2>
                            <a class=\"research-seo anchorSearch toggle-search change-search\" href=\"javascript:;\">Modifier la recherche</a>
                        </div>
                        <div class=\"search-seo__map\">
                            <button class=\"toggle-map  btn btn-rdv\">Carte</button>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class=\"search__results  container\">
                <!-- ce div sert à contenir la map qui scroll avec le contenu -->
                <div class=\"clearfix search__results__inner\" data-sticky_parent=\"\">
                    <div class=\"container__map\" id=\"container__map\" data-sticky_column=\"\">
                        <p class=\"text-center hidden-sm hidden-xs\" style=\"margin-top: 10px\">
                            Professionnels de santé ? <br>
                            <a href=\"javascript:void(0);\" class=\"text-center\" style=\"font-size: 13px;\">
                                Prenez rendez-vous pour vos patients
                            </a>
                        </p>
                        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDlKpNL3J4klh_qoJjpxoVMU6uiAFVSk4M\" async defer></script>

               <script type=\"text/javascript\">
                var geocoder;
                var map;
                var address = \"Ariana, TN\";
                 {% for  medecin   in medecins %} 
                      address = \"{{medecin.adresse}}\"; 
                 {% endfor %} 
                function initialize() {
                    geocoder = new google.maps.Geocoder();
                    var latlng = new google.maps.LatLng(-34.397, 150.644);
                    var myOptions = {
                        zoom: 8,
                        center: latlng,
                        mapTypeControl: true,
                        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                        navigationControl: true,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    map = new google.maps.Map(document.getElementById(\"map_canvas\"), myOptions);
                    if (geocoder) {
                        geocoder.geocode({'address': address}, function (results, status) {
                            if (status == google.maps.GeocoderStatus.OK) {
                                if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                                    map.setCenter(results[0].geometry.location);

                                    var infowindow = new google.maps.InfoWindow(
                                            {content: '<b>' + address + '</b>',
                                                size: new google.maps.Size(150, 50)
                                            });

                                    var marker = new google.maps.Marker({
                                        position: results[0].geometry.location,
                                        map: map,
                                        title: address
                                    });
                                    google.maps.event.addListener(marker, 'click', function () {
                                        infowindow.open(map, marker);
                                    });

                                } else {
                                    alert(\"No results found\");
                                }
                            } else {
                                alert(\"Geocode was not successful for the following reason: \" + status);
                            }
                        });
                    }
                }
                        </script> 


                        <div class=\"map__wrapper\" id=\"map__wrapper\">
                            <div class=\"map\" id=\"map_canvas\"  >
                            </div>
                        </div>
                    </div>
                    <div class=\"map-overlay-card popover bottom\">
                        <div class=\"arrow\"></div>
                        <div class=\"card-content\"></div>
                    </div>
                    <div class=\"results\">
                        <div class=\"result__showing-days\" id=\"result__showing-days\" data-sticky_column=\"\">
                            <p>Liste des praticiens disponibles pour les dates suivantes :</p>
                            {#<div class=\"result__showing-days__list\">
                                <span class=\"spacer\" aria-hidden=\"true\"></span>
                                <!-- <ul>
                                     <li><abbr title=\"--\">&nbsp;<br/>&nbsp;</abbr></li>
                                 </ul>-->
                                <span class=\"spacer\" aria-hidden=\"true\"></span>
                            </div>#}
                        </div>

                        <ol class=\"results__list\">

                            {% for medecin  in medecins  %} 
                                <li class=\"result doc_result_list\" doctorId=\"1198\" data-selectDom=\"1198\" availabilityKey=\"1198\" locationLng=\"2.321450499999969\" locationLat=\"48.8607474\">
                                    <div class=\"result__praticien has-bubble\">
                                        <div class=\"praticien__sticker\">
                                            <a href=\"javascript:void(0);\" class=\"result__pin\">{{loop.index}}</a>
                                            <div class=\"praticien__img\">
                                                <a href=\"javascript:void(0);\">
                                                    <img srcset=\"{{ asset('bundles/front/images/pictures/card/unknown.png') }}\" class=\"praticien__img__profil\" alt=\"Dr Guy Bercau - Gynécologue\">                
                                                </a>
                                            </div>
                                            <h3 class=\"praticien__fn\">
                                                <span class=\"praticien__name\">
                                                    <a href=\"javascript:void(0);\">Dr <!--Guy Bercau-->{{medecin.nom}}</a>
                                                </span>
                                                <span class=\"praticien__speciality\"><!--Gynécologue-->{{medecin.Specialite|capitalize}}&nbsp;
                                                </span>
                                            </h3>
                                            <div class=\"praticien__infos\">
                                                <p class=\"praticien__adress\">{{medecin.adresse|capitalize}}<!--276 boulevard St Germain<br>75007 Paris--></p>
                                                <div class=\"praticien__options__wrapper\">
                                                    <ul class=\"praticien__options\">
                                                        <li class=\"praticien__option  praticien__option--vital-no has-bubble\">
                                                            <span class=\"praticien__option__expl bubble bubble--left\">Ce médecin n'accepte pas la carte vitale</span>
                                                        </li>
                                                        <li class=\"praticien__option praticien__option--conv2 has-bubble\">
                                                            <span class=\"praticien__option__expl bubble bubble--left\">Ce médecin est conventionné Secteur 2</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"praticien__actions\">
                                                <a class=\"btn btn-rdv\" href=\"{{ path('front_choisir_rdv',{'id':medecin.id}) }}\">Prendre RDV</a>
                                            </div>
                                        </div>
                                        
                                        <div class=\"bubble bubble--top praticien__more\">
                                            <div class=\"bubble__content\">
                                                <!--<div class=\"bubble__office\">
                                                    <div class=\"bubble__office-text\">
                                                        <h4>Présentation du cabinet</h4>
                                                        <p>Gyn&eacute;cologue Obst&eacute;tricien, le Dr Bercau vous re&ccedil;oit dans son cabinet situ&eacute; 276 Boulevard St Germain en plein coeur du 7&egrave;me arrondissement de Paris (75007).</p>
                                                        <p>Le Dr Bercau re&ccedil;oit essentiellement&nbsp; une patient&egrave;le adulte pour laquelle il dispense des consultations de <strong>gyn&eacute;cologie m&eacute;dicale</strong>, de <strong>chirurgie gyn&eacute;cologique</strong> et de<strong> suivi de grossesse</strong>. Il pratique <strong>la pose et le retrait de st&eacute;rilet</strong>s.</p>
                                                        <p>En parall&egrave;le de son activit&eacute; lib&eacute;rale, le Dr Bercau exerce au sein de la <strong>Maternit&eacute; Notre Dame de Bon Secours </strong>(H&ocirc;pital St Joseph Paris 75014)<strong>.</strong><br />Il est &eacute;galement le <strong>coordinateur du Centre Fibrome &agrave; l&#39;H&ocirc;pital Saint Joseph </strong>(Paris 75014).</p>
                                                        <div class=\"hide-end-text\"></div>
                                                    </div>
                                                    <div class=\"bubble__office-link\">
                                                        <a href=\"paris-7eme/guy-bercau-1198.html\">Voir plus</a>
                                                    </div>
                                                </div>-->
                                                <div class=\"bubble__price\">
                                                    <h4>Prix de la consultation</h4>
                                                    <p>{{medecin.tarif}} {{money}}
                                                        <!-- 75&euro;-->
                                                    </p>
                                                    <h4>Modes de règlement</h4>
                                                    <ul class=\"praticien__payments\">
                                                        {% for modepaiment     in medecin.modepaiments %}  
                                                            - {{  modepaiment.type }}</br>
                                                        {% endfor %}

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <div id=\"result__rdv__doctor-1198\" class=\"result__rdv rdv__dispos__swipe\">
                                        <!--  <table class=\"praticien__rdv-table praticien__rdv-table--small\">
                                             <thead></thead>
                                             <tbody class=\"result__doctorId\">
                                             </tbody>
                                          </table>-->

                                        <script type=\"text/javascript\">
                                            \$(document).ready(function () {
                                                var arrayData = [];
                                                var data = [];

                                            {% for rdv  in medecin.Rendezvous %}
                                                {% if rdv.isValidated == true %}
                                                    {% set type = rdv.type %}
                                                    {% set annee = rdv.annee %}
                                                    {% set mois = rdv.mois %}
                                                    {% set jour = rdv.jour %}
                                                    {% set heure = rdv.heure %}
                                                    {% set minute = rdv.minute %}

                                                            data = {title: '{{  type}}',
                                                                start: '{{  annee }}-{{  mois }}-{{  jour }}T{{  heure}}:{{ minute }}:00',
                                                                end: '{{  annee }}-{{  mois }}-{{  jour }}T{{ heure }}:{{  minute }}:00'
                                                            };

                                                            arrayData.push(data);
                                                {% endif %}
                                            {% endfor %}


                                                    var date = new Date();
                                                    var d = date.getDate(),
                                                            m = date.getMonth(),
                                                            y = date.getFullYear();
                                                    \$('#calendar{{medecin.id}}').fullCalendar({
                                                        header: {
                                                            left: 'prev,next today',
                                                            center: 'title',
                                                            right: 'month,agendaWeek,agendaDay,listWeek'
                                                        },
                                                        locale: 'fr',
                                                        defaultDate: new Date(y, m, d),
                                                        navLinks: true, // can click day/week names to navigate views
                                                        editable: true,
                                                        eventLimit: true, // allow \"more\" link when too many events
                                                        events: arrayData//[

                                                    });

                                                });
                                        </script>

                                        <div id='calendar{{medecin.id}}'></div>
                                    </div>
                                    <div class=\"result__actions\">
                                        <a class=\"btn btn-rdv\" href=\"{{ path('front_choisir_rdv',{'id':medecin.id}) }}\">
                                            Prendre RDV
                                        </a>
                                    </div>
                                </li>
                            {% endfor %}


                            <li class=\"result result--separator\" aria-hidden=\"true\">
                                <div class=\"result__praticien has-bubble\"></div>
                                <div class=\"result__rdv\"></div>
                            </li>

                        </ol>
                    </div>
                    <div class=\"results results--directory\">
                    </div>
                </div>
                <nav class=\"md-pagination\">
                    <ul>
                        <li class=\"md-pagination__page
                            md-pagination__page--current\"><a href=\"javascript:void(0);\"  rel=\"prev\">1</a></li>
                        <li class=\"md-pagination__page
                            \"><a href=\"javascript:void(0);\" rel=\"next\">2</a></li>
                        <li class=\"md-pagination__page
                            \"><a href=\"javascript:void(0);\" rel=\"next\">3</a></li>
                        <li class=\"md-pagination__page
                            \"><a href=\"javascript:void(0);\" rel=\"next\">4</a></li>
                        <li class=\"md-pagination__page
                            \"><a href=\"javascript:void(0);\" rel=\"next\">5</a></li>
                        <li class=\"md-pagination__page\"><span class=\"three-point-right\">&nbsp;&nbsp;...</span></li>
                        <li class=\"md-pagination__next\">
                            <a href=\"javascript:void(0);\" rel=\"next\">Suivant</a>
                        </li>
                    </ul>
                </nav>
            </section>
            <div id=\"waiting_container\"></div>
            <div class=\"nav--breadcrumb__botom\">
                <nav class=\"nav--breadcrumb\">
                    <ul vocab=\"http://schema.org/\" typeof=\"BreadcrumbList\">
                        <li><a href=\"javascript:void(0);\">Mon Docteur</a></li>
                        <li property=\"itemListElement\" typeof=\"ListItem\">
                            <a property=\"item\" typeof=\"WebPage\"
                               href=\"javascript:void(0);\">
                                <span property=\"name\"> 
                                    {% for medecin  in medecins  %} 
                                        {{medecin.Specialite.nomSpecialite}}
                                    {% endfor %} 
                                    <!--      Gynécologue-->
                                </span></a>
                            <meta property=\"position\" content=\"1\">
                        </li>
                        <li property=\"itemListElement\" typeof=\"ListItem\">
                            <a property=\"item\" typeof=\"WebPage\"
                               href=\"javascript:void(0);\">
                                <span property=\"name\">
                                    {% for medecin  in medecins  %}   {{medecin.Specialite.nomSpecialite}}&nbsp; &nbsp; {{medecin.adresse}} {% endfor %} 
                                    <!--    Gynécologue Paris -->
                                </span>
                            </a>
                            <meta property=\"position\" content=\"2\">
                        </li>
                        <!-- <li property=\"itemListElement\" typeof=\"ListItem\">
                             <span property=\"item\" typeof=\"WebPage\">
                                 <span property=\"name\">Gynécologue Paris 1er</span></span>
                             <meta property=\"position\" content=\"3\">
                         </li>-->
                    </ul>
                </nav>
            </div>


            {% include 'FrontBundle:Default:section-contact.html.twig' %}

        </main>


        {% include 'FrontBundle:Default:footer.html.twig' %}

         
        <div id=\"gaTrackingId\" style=\"display:none;\">UA-38892532-1</div>
        <div id=\"criteoTrackingId\" style=\"display:none;\">22485</div>
        <div id=\"facebookTrackingId\" style=\"display:none;\">870433126375864</div>
    </body>
</html>", "FrontBundle:Default:prendreRDVlisting.html.twig", "C:\\xampp\\htdocs\\medecin-rendez-vous\\src\\FrontBundle/Resources/views/Default/prendreRDVlisting.html.twig");
    }
}
