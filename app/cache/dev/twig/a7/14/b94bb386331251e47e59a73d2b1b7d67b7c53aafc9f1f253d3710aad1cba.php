<?php

/* MainBundle:Default:contact.html.twig */
class __TwigTemplate_a714b94bb386331251e47e59a73d2b1b7d67b7c53aafc9f1f253d3710aad1cba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MainBundle::Layout.html.twig");

        $this->blocks = array(
            'coeur' => array($this, 'block_coeur'),
            'title' => array($this, 'block_title'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_coeur($context, array $blocks = array())
    {
        // line 3
        echo "          <div id='main' role='main'>
        
        <div id='main-content-header'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
                <h1 class='title'>
                  Contact
                </h1>
              </div>
            </div>
          </div>
        </div>
        <div id='main-content'>
          <div id='map-canvas'></div>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa-icon-info-sign'></i>
                  <h2>
                    Contact info
                  </h2>
                </div>
                <div class='row text-center'>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa-icon-map-marker text-white'></i>
                    </div>
                    <h3>Addresse</h3>
                    <ul class='list-unstyled'>
                      <li>Z.I. Chotrana II - B.P. 160</li>
                      <li> 2083 Pôle Technologique</li>
                      <li>El Ghazala</li>
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa-icon-phone text-white'></i>
                    </div>
                    <h3>Telephone</h3>
                    <ul class='list-unstyled'>
                      <li><a href=\"tel:+21670685685\"> (+216) 70 68 56 85</a></li>
                      <li><a href=\"tel:+21670685454\"> (+216) 70 68 54 54</a></li>
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa-icon-envelope-alt text-white'></i>
                    </div>
                    <h3>E-Mail</h3>
                    <ul class='list-unstyled'>
                      <li><a href=\"mailto:contact@esprit.ens.tn\">contact@esprit.ens.tn</a></li>
                      <li><a href=\"mailto:moez.hajjem@esprit.ens.tn\">moez.hajjem@esprit.ens.tn</a></li>
                      <li><a href=\"mailto:ratatouille@esprit.ens.tn\">ratatouille@esprit.ens.tn</a></li>
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa-icon-time text-white'></i>
                    </div>
                    <h3>Horaire de Travail</h3>
                    <ul class='list-unstyled'>
                      <li>
                        Lundi - Vendredi
                        &mdash;
                        <strong>09:00 - 17:15</strong>
                      </li>
                      <li>
                        Samedi
                        &mdash;
                        <strong>Fermée</strong>
                      </li>
                      <li>
                        Dimanche
                        &mdash;
                        <strong>Fermée</strong>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa-icon-envelope-alt'></i>
                  <h2>Contact formulaire</h2>
                </div>
                <form action='#' class='form form-validation' method='get'>
                  <div class='row'>
                    <div class='col-sm-6'>
                      <div class='form-group control-group'>
                        <input class='form-control' data-rule-required='true' id='contact_name' name='contact[name]' placeholder='Nom' type='text'>
                      </div>
                    </div>
                    <div class='col-sm-6'>
                      <div class='form-group control-group'>
                        <input class='form-control' data-rule-email='true' data-rule-required='true' id='contact_email' name='contact[email]' placeholder='E-Mail' type='text'>
                      </div>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='col-sm-12'>
                      <div class='form-group control-group'>
                        <textarea class='form-control' data-rule-required='true' id='contact_message' name='contact[message]' placeholder='Votre message...'></textarea>
                      </div>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='col-sm-12'>
                      <button class='btn btn-contrast btn-block' type='submit'>
                        Envoyer Votre Message
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class='fade' id='scroll-to-top'>
          <i class='fa-icon-chevron-up'></i>
        </div>
      </div>
";
    }

    // line 129
    public function block_title($context, array $blocks = array())
    {
        // line 130
        echo "    Contact | TuniPharma
";
    }

    // line 133
    public function block_scripts($context, array $blocks = array())
    {
        // line 134
        echo "<script src=\"http://maps.googleapis.com/maps/api/js?sensor=false\" type=\"text/javascript\"></script>
    <script>
      var initializeMap;
      \$(document).ready(function(){
          \$('body').attr('class','contact-page contact-page-wide-map');
      });
      initializeMap = function() {
        var iw1, latlng, map, marker, options;
      
        latlng = new google.maps.LatLng(36.899786, 10.189152);
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
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 134,  170 => 133,  165 => 130,  162 => 129,  33 => 3,  30 => 2,);
    }
}
