<?php

/* MainBundle:Pharmacie:Pharmacie.html.twig */
class __TwigTemplate_fd12ca66950fde630f22f0be842f244e1fa9534bf871d70d4870119cea4a114b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MainBundle::PharmacieLayout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'corps' => array($this, 'block_corps'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::PharmacieLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "   Pharmacie ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ph"]) ? $context["ph"] : $this->getContext($context, "ph")), "nom"), "html", null, true);
        echo " | TuniPharma
";
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        // line 6
        echo "    Pharmacie ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ph"]) ? $context["ph"] : $this->getContext($context, "ph")), "nom"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        // line 9
        echo " 
";
    }

    // line 15
    public function block_corps($context, array $blocks = array())
    {
        // line 16
        echo "    <div class='row'>
        <div class='col-sm-12'>
            <div class='page-header page-header-with-icon'>
                <i class='fa-icon-info-sign'></i>
                <h3>Pharmacie</h3> 
            </div>
            <div class='row text-center'>
                <div class='col-sm-4'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                        <i class='fa-icon-map-marker text-white'></i>
                    </div>
                    <h3>Address</h3>
                    <ul class='list-unstyled'>
                        <li>
                            ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ph"]) ? $context["ph"] : $this->getContext($context, "ph")), "adresse"), "html", null, true);
        echo "
                        </li>
                        <li>
                            ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ph"]) ? $context["ph"] : $this->getContext($context, "ph")), "codepostal"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "delegation"), "html", null, true);
        echo "
                        </li>
                        <li>
                            ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "gouvernorat"), "html", null, true);
        echo "
                        </li>
                    </ul>
                </div>
                <div class='col-sm-4'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                        <i class='fa-icon-phone text-white'></i>
                    </div>
                    <h3>Telephone</h3>
                    <ul class='list-unstyled'>
                        <li>
                            ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ph"]) ? $context["ph"] : $this->getContext($context, "ph")), "numtel"), "html", null, true);
        echo "
                        </li>

                    </ul>
                </div>
                <div class='col-sm-4'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                        <i class='fa-icon-envelope-alt text-white'></i>
                    </div>
                    <h3>E-Mail</h3>
                    <ul class='list-unstyled'>
                        <li>
                            ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ph"]) ? $context["ph"] : $this->getContext($context, "ph")), "email"), "html", null, true);
        echo "
                        </li>

                    </ul>
                </div>
            </div>
            <hr></hr>
            <div class='row text-center'>
                <div class='col-sm-4'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                        <i class='fa-icon-time text-white'></i>
                    </div>
                    <h3>Horaire</h3>
                    <ul class='list-unstyled'>

                        ";
        // line 74
        if (($this->getAttribute((isset($context["ph"]) ? $context["ph"] : $this->getContext($context, "ph")), "type") == "Pharmacie de Nuit")) {
            // line 75
            echo "                            <strong>  19:30 - 07:30</strong>
                        ";
        }
        // line 77
        echo "                        ";
        if (($this->getAttribute((isset($context["ph"]) ? $context["ph"] : $this->getContext($context, "ph")), "type") == "Pharmacie de Jour")) {
            echo "               
                            <li>
                                Lundi - Vendredi
                                &mdash;


                                <strong>08:30 - 19:00</strong>

                            </li>
                            <li>
                                Samedi
                                &mdash;
                                <strong>08:30 - 14:00</strong>
                            </li>
                            <li>
                                Dimanche
                                &mdash;
                                <strong>Fermée</strong>
                            </li>
                        ";
        }
        // line 97
        echo "                    </ul>
                </div>
                <div class='col-sm-4'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                        <i class='fa-icon-star text-white'> </i>
                    </div>
                    <h3>Service</h3>
                    <ul class='list-unstyled'>
                        <li style=\"font-family:cursive\">
                            ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ph"]) ? $context["ph"] : $this->getContext($context, "ph")), "idService"));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 107
            echo "                                <a  href=\"";
            echo $this->env->getExtension('routing')->getPath("_service");
            echo "\">
                                    <h5>   ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "nom"), "html", null, true);
            echo " </h5> ( ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "categorie"), "html", null, true);
            echo " )

                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
                        </li>
                    </ul>
                </div>
                <div class='col-sm-4'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                        <i class='fa-icon-time'></i></i>
                    </div>
                    <h3>Garde</h3>
                    <ul class='list-unstyled'>
                        ";
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["garde"]) ? $context["garde"] : $this->getContext($context, "garde")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 123
            echo "                            <li>";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</li>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                    </ul>

                </div> 
            </div>
        </div>
        <div class='col-sm-6'>

            <div class='page-header page-header-with-icon'>
                <i class='fa-icon-map-marker'></i>
                <h2>
                    Localisation
                </h2>
            </div>

            <div id='map-canvas'>
            </div> 


        </div>
        <div class='col-sm-6'>
            <div class='page-header page-header-with-icon'>
                <i class='fa-icon-facebook '></i>
                <h2>
                    Commentaire
                </h2>
            </div>
            <div id=\"fb-root\"></div> 
            <div class=\"fb-comments\" data-width=\"1000\" data-numposts=\"5\" data-colorscheme=\"light\"></div>
            
        </div>
    </div>
















";
    }

    // line 174
    public function block_scripts($context, array $blocks = array())
    {
        // line 175
        echo "
    <script type=\"text/javascript\"
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyApra_QEBW3-pPoaWIQNmCpY5e0skbX3pQ&sensor=false\">
    </script>

    <script>

        var initializeMap;

        initializeMap = function() {
            var iw1, latlng, map, marker, options;

            latlng = new google.maps.LatLng(";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ph"]) ? $context["ph"] : $this->getContext($context, "ph")), "lat"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ph"]) ? $context["ph"] : $this->getContext($context, "ph")), "log"), "html", null, true);
        echo ");
            options = {
                scrollwheel: false,
                zoom: 16,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: true
            };

            map = new google.maps.Map(document.getElementById(\"map-canvas\"), options);

            marker = new google.maps.Marker({
                position: latlng,
                map: map
            });

            iw1 = new google.maps.InfoWindow({
                content: \"Here we are!\"
            });

            return google.maps.event.addListener(marker, \"click\", function(e) {
                return iw1.open(map, this);
            });
        };

        google.maps.event.addDomListener(window, 'load', initializeMap);
    </script>
<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = \"//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=474614616003744&version=v2.0\"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
    <!-- / not required javascripts -->
    <script src=\"assets/javascripts/demo.js\" type=\"text/javascript\"></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-44249116-1', 'bublinastudio.com');
        ga('send', 'pageview');
    </script>

";
    }

    public function getTemplateName()
    {
        return "MainBundle:Pharmacie:Pharmacie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 187,  282 => 175,  279 => 174,  228 => 126,  218 => 123,  214 => 122,  202 => 112,  190 => 108,  185 => 107,  181 => 106,  170 => 97,  146 => 77,  142 => 75,  140 => 74,  122 => 59,  107 => 47,  93 => 36,  85 => 33,  79 => 30,  63 => 16,  60 => 15,  55 => 9,  52 => 8,  45 => 6,  42 => 5,  35 => 3,  32 => 2,);
    }
}
