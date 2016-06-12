<?php

/* MainBundle:Default:blog.html.twig */
class __TwigTemplate_a862428681716a8b496841a8b139cf64c0c4427a5eb58a29a757d505f9481b68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
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
    <body class='countdown-page'>
          <div id='wrapper'>
      <div class='container'>
        <div class='row'>
          <div class='col-sm-12'>
            <div class='fadeInDown animated'>
              <div class='icon'>
                <i class='fa-icon-wrench'></i>
              </div>
            </div>
          </div>
        </div>
        <div class='row'>
          <div class='col-sm-12'>
            <h1 class='title fadeInLeft animated'>En Cours De Construction</h1>
            <div class='message fadeInRight animated'>
              Nous Sommes En Cours de Réalisation de Cette Fonctionnalité.
            </div>
          </div>
        </div>
        <div class='row'>
          <div class='col-sm-12'>
            <div class='countdown fadeInDown animated' data-countdown='2014/05/27 19:50:00'>
              <div class='days countdown-item'>
                <span class='countdown-time'></span>
                <span class='countdown-label'>Jours</span>
              </div>
              <div class='hours countdown-item'>
                <span class='countdown-time'></span>
                <span class='countdown-label'>Heures</span>
              </div>
              <div class='minutes countdown-item'>
                <span class='countdown-time'></span>
                <span class='countdown-label'>Minutes</span>
              </div>
              <div class='seconds countdown-item'>
                <span class='countdown-time'></span>
                <span class='countdown-label'>Secondes</span>
              </div>
            </div>
          </div>
        </div>
        <div class='row'>
          <div class='col-sm-12'>
            <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "\">
              <img class=\"logo fadeInUp animated\" alt=\"TuniPharma\" width=\"117\" height=\"39\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        echo "\" />
            </a>
          </div>
        </div>
      </div>
    </div>
        <!-- / required javascripts -->
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/jquery/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/jquery/jquery.mobile.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/modernizr/modernizr.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/hover_dropdown/twitter-bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/retina/retina.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/isotope/jquery.isotope.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/isotope/jquery.isotope.sloppy-masonry.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/validate/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/flexslider/jquery.flexslider.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/countdown/countdown.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/lightbox/lightbox.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/plugins/cycle/jquery.cycle.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/jednotka.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        // line 108
        $this->displayBlock('scripts', $context, $blocks);
        // line 110
        echo "        <!-- / not required javascripts -->
        <script src=\"";
        // line 111
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

    // line 108
    public function block_scripts($context, array $blocks = array())
    {
        // line 109
        echo "        ";
    }

    public function getTemplateName()
    {
        return "MainBundle:Default:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 109,  259 => 108,  255 => 39,  252 => 38,  248 => 10,  245 => 9,  236 => 111,  233 => 110,  231 => 108,  227 => 107,  223 => 106,  219 => 105,  215 => 104,  211 => 103,  207 => 102,  203 => 101,  199 => 100,  195 => 99,  191 => 98,  187 => 97,  183 => 96,  179 => 95,  175 => 94,  171 => 93,  161 => 86,  157 => 85,  110 => 40,  108 => 38,  103 => 36,  99 => 35,  94 => 33,  89 => 31,  85 => 30,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  64 => 24,  60 => 23,  56 => 22,  52 => 21,  48 => 20,  44 => 19,  34 => 11,  32 => 9,  22 => 1,);
    }
}
