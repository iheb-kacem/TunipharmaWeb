<?php

/* MainBundle::Layout.html.twig */
class __TwigTemplate_952714129452e9531f2b5b263fe66d38013ac12e6bed3190ecf87e1d046bca2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'coeur' => array($this, 'block_coeur'),
            'corps' => array($this, 'block_corps'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<!--[if lt IE 9]> <html class=\"lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if !IE] -->
<html lang='fr'>
    <!-- <![endif] -->
    <head>
        <title>
            ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "        </title>
        <meta content='blog, business, clean, multipurpose template, twitter bootstrap 3, responsive' name='keywords'>
        <meta content='Jednotka is multipurpose Twitter Bootstrap 3 template which is suitable for any type of business or online project. ' name='description'>
        <meta content='BublinaStudio.com' name='author'>
        <meta content='all' name='robots'>
        <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
        <meta content='width=device-width, initial-scale=1.0' name='viewport'>
        <!--[if IE]> <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> <![endif]-->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/meta_icons/favicon.ico"), "html", null, true);
        echo "\" rel='shortcut icon' type='image/x-icon'>
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/meta_icons/apple-touch-icon.png"), "html", null, true);
        echo "\" rel='apple-touch-icon-precomposed'>
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/meta_icons/apple-touch-icon-57x57.png"), "html", null, true);
        echo "\" rel='apple-touch-icon-precomposed' sizes='57x57'>
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/meta_icons/apple-touch-icon-72x72.png"), "html", null, true);
        echo "\" rel='apple-touch-icon-precomposed' sizes='72x72'>
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/meta_icons/apple-touch-icon-114x114.png"), "html", null, true);
        echo "\" rel='apple-touch-icon-precomposed' sizes='114x114'>
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/meta_icons/apple-touch-icon-144x144.png"), "html", null, true);
        echo "\" rel='apple-touch-icon-precomposed' sizes='144x144'>
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/meta_icons/apple-touch-icon-60x60.png"), "html", null, true);
        echo "\" rel='apple-touch-icon-precomposed' sizes='57x57'>
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/meta_icons/apple-touch-icon-120x120.png"), "html", null, true);
        echo "\" rel='apple-touch-icon-precomposed' sizes='72x72'>
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/meta_icons/apple-touch-icon-76x76.png"), "html", null, true);
        echo "\" rel='apple-touch-icon-precomposed' sizes='114x114'>
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/meta_icons/apple-touch-icon-152x152.png"), "html", null, true);
        echo "\" rel='apple-touch-icon-precomposed' sizes='144x144'>
        <!-- / required stylesheets -->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/jednotka_green.css"), "html", null, true);
        echo "\" media=\"all\" id=\"colors\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- / not required stylesheets -->
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/demo.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
        <!--[if lt IE 9]>
          <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/ie/html5shiv.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
          <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/ie/respond.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <![endif]-->
        ";
        // line 38
        $this->displayBlock('css', $context, $blocks);
        // line 40
        echo "    </head>
    <body class='homepage'>
        <div id='wrapper'>
            <header id='header'>
                <div class='container'>
                    <nav class='navbar navbar-default' id='nav' role='navigation'>
                        <div class='navbar-header'>
                            <button class='navbar-toggle' data-target='.navbar-header-collapse' data-toggle='collapse' type='button'>
                                <span class='sr-only'>Toggle navigation</span>
                                <span class='icon-bar'></span>
                                <span class='icon-bar'></span>
                                <span class='icon-bar'></span>
                            </button>
                            <a class='navbar-brand' href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "\">
                                <img alt=\"Jednotka\" width=\"200\" height=\"60\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        echo "\" />
                            </a>
                        </div>
                        <div class='collapse navbar-collapse navbar-header-collapse'>
                            <ul class='nav navbar-nav navbar-right'>
                                <li class='active dropdown'>
                                    <a class='dropdown-toggle' href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "\">
                                        <span>
                                            Accueil
                                        </span>
                                    </a>
                                </li>
                                <li class='dropdown'>
                                    <a class='dropdown-toggle' href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("_rechercher");
        echo "\">
                                        <span>
                                            Chercher Une Pharmacie
                                        </span>
                                    </a>
                                </li>
                                <li class='dropdown'>
                                    <a class='dropdown-toggle' href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("_EspacePharmacien");
        echo "\">
                                        <span>
                                            Accés Pharmacien
                                        </span>
                                    </a>
                                </li>
                                <li class='dropdown'>
                                    <a class='dropdown-toggle' href='";
        // line 81
        echo $this->env->getExtension('routing')->getPath("_blog");
        echo "'>
                                        <span>
                                            Blog
                                        </span>
                                    </a>
                                </li>
                                <li class='dropdown'>
                                    <a class='dropdown-toggle' href='";
        // line 88
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "'>
                                        <span>
                                            Contact
                                        </span>
                                    </a>
                                </li>
                                ";
        // line 94
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 95
            echo "                                    <li class='dropdown'>
                                        <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown' href='#'>
                                            <span>
                                                ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "prenom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nom"), "html", null, true);
            echo " 
                                                <i class='fa-icon-angle-down'></i>
                                            </span>
                                        </a>
                                        <ul class='dropdown-menu' role='menu'>
                                            <li class='active'>
                                                <a href=\"";
            // line 104
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">
                                                    Profile
                                                </a>
                                            </li>
                                            ";
            // line 108
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") == false)) {
                // line 109
                echo "                                                <li class=''>
                                                    <a href=\"";
                // line 110
                echo $this->env->getExtension('routing')->getPath("_add_service");
                echo "\">
                                                        Demande d'ajout d'un Service
                                                    </a>
                                                </li>
                                            ";
            }
            // line 115
            echo "                                            <li class=''>
                                                <a href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">
                                                    Changer Votre Mot de passe
                                                </a>
                                            </li>
                                            <li class=''>
                                                <a href=\"";
            // line 121
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                                    Déconnexion
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                ";
        }
        // line 128
        echo "                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            ";
        // line 133
        $this->displayBlock('coeur', $context, $blocks);
        // line 137
        echo "            <footer id='footer'>
                <div id='footer-main'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-md-4 col-sm-6 info-box'>
                                <div class='logo-container'>
                                    <img alt=\"Jednotka\" width=\"117\" height=\"39\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        echo "\" />
                                </div>
                                <p class='no-mg-b'> Bienvenue sur Tunipharma.com </br> Votre guide pour les pharmacie en Tunisie.<br>Ce site vous donne la possibilité de trouver tous les pharmacies,du jour,de nuit et les pharmacies en gardes. </p>
                            </div>
                            <div class='col-md-4 col-sm-6 info-box'>
                                <h2 class='title'>Contact</h2>
                                <div class='icon-boxes'>
                                    <div class='icon-box'>
                                        <div class='icon icon-wrap'>
                                            <i class='fa-icon-map-marker'></i>
                                        </div>
                                        <div class='content'>
                                            Z.I. Chotrana II - B.P. 160 - 2083 Pôle Technologique - El Ghazala

                                        </div>
                                    </div>
                                    <div class='icon-box'>
                                        <div class='icon icon-wrap'>
                                            <i class='fa-icon-phone'></i>
                                        </div>
                                        <div class='content'>
                                            <a href='tel:+21670685685'>(+216) 70 68 56 85</a>
                                        </div>
                                    </div>
                                    <div class='icon-box'>
                                        <div class='icon icon-wrap'>
                                            <i class='fa-icon-envelope'></i>
                                        </div>
                                        <div class='content'><a href=\"mailto:contact@esprit.ens.tn\">contact@esprit.ens.tn</a></div>
                                    </div>

                                </div>
                            </div>
                            <div class='col-md-4 col-sm-6 info-box social-box'>
                                <h2 class='title'>RATATOUILLE</h2>
                                <p class='no-mg-b'>
                                    Nous sommes un groupe d'étudiant dans ESPRIT:<br><strong>Kacem Iheb <br> Nasri Houssem<br>Hajjem Moez <br> Farroukh Ferdawes </strong>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div id='footer-copyright'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-lg-12 clearfix'>
                                <p class='copyright'>
                                    Copyright
                                    &copy;
                                    2014 TuniPharma
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- / required javascripts -->
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/jquery/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/jquery/jquery.mobile.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/modernizr/modernizr.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/hover_dropdown/twitter-bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/retina/retina.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/isotope/jquery.isotope.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/isotope/jquery.isotope.sloppy-masonry.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/validate/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/flexslider/jquery.flexslider.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/countdown/countdown.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/lightbox/lightbox.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/cycle/jquery.cycle.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/jednotka.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        // line 219
        $this->displayBlock('scripts', $context, $blocks);
        // line 221
        echo "    <!-- / not required javascripts -->
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        echo "            ";
    }

    // line 38
    public function block_css($context, array $blocks = array())
    {
        // line 39
        echo "        ";
    }

    // line 133
    public function block_coeur($context, array $blocks = array())
    {
        // line 134
        echo "                ";
        $this->displayBlock('corps', $context, $blocks);
        // line 136
        echo "            ";
    }

    // line 134
    public function block_corps($context, array $blocks = array())
    {
        // line 135
        echo "                ";
    }

    // line 219
    public function block_scripts($context, array $blocks = array())
    {
        // line 220
        echo "    ";
    }

    public function getTemplateName()
    {
        return "MainBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 220,  434 => 219,  430 => 135,  427 => 134,  423 => 136,  420 => 134,  417 => 133,  413 => 39,  410 => 38,  406 => 10,  403 => 9,  394 => 222,  391 => 221,  389 => 219,  385 => 218,  381 => 217,  377 => 216,  373 => 215,  369 => 214,  365 => 213,  361 => 212,  357 => 211,  353 => 210,  349 => 209,  345 => 208,  341 => 207,  337 => 206,  333 => 205,  329 => 204,  265 => 143,  257 => 137,  255 => 133,  230 => 116,  227 => 115,  219 => 110,  216 => 109,  207 => 104,  196 => 98,  191 => 95,  189 => 94,  180 => 88,  170 => 81,  160 => 74,  150 => 67,  140 => 60,  131 => 54,  127 => 53,  112 => 40,  105 => 36,  96 => 33,  91 => 31,  87 => 30,  74 => 26,  70 => 25,  66 => 24,  62 => 23,  58 => 22,  54 => 21,  50 => 20,  46 => 19,  36 => 11,  24 => 1,  85 => 23,  82 => 28,  78 => 27,  75 => 12,  71 => 10,  68 => 9,  61 => 24,  49 => 14,  47 => 12,  44 => 11,  42 => 9,  34 => 9,  31 => 2,  338 => 217,  326 => 216,  322 => 215,  286 => 182,  266 => 166,  263 => 165,  248 => 128,  238 => 121,  232 => 145,  226 => 142,  220 => 139,  214 => 108,  208 => 133,  202 => 131,  198 => 130,  148 => 83,  144 => 82,  110 => 38,  101 => 35,  97 => 47,  64 => 17,  59 => 22,  56 => 13,  51 => 10,  48 => 9,  43 => 7,  40 => 6,  35 => 4,  32 => 3,);
    }
}
