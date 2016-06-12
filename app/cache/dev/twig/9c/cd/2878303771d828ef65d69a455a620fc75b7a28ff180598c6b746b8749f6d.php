<?php

/* MainBundle:Default:index.html.twig */
class __TwigTemplate_9ccd2878303771d828ef65d69a455a620fc75b7a28ff180598c6b746b8749f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MainBundle::Layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corps' => array($this, 'block_corps'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Accueil | TuniPharma
";
    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        // line 6
        echo "    <div id='main' role='main'>
        <div class='carousel-image flexslider' id='carousel-example-2'>
            <ul class='slides'>

                <li class='item'>
                    <div class='container'>
                        <div class='row pos-rel'>
                            <div class='col-sm-12 col-md-8 animate'>
                                <h1 class='big fadeInDownBig animated'>TuniPharma Mobile</h1>
                                <p class='normal fadeInUpBig animated'>L'application qui vous donne tous sur les pharmacies tunisiennes </p>

                            </div>
                            <div class='col-sm-4 animate pos-sta hidden-xs hidden-sm'>
                                <img class=\"img-responsive fadeInUpBig animated\"  style=\"position:absolute;bottom:1;right:15px;\" width=\"250\" height=\"140\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/demo/carousels/mobpharma.png"), "html", null, true);
        echo "\" />
                            </div>
                        </div>
                    </div>
                </li>
                <li class='item'>
                    <div class='container'>
                        <div class='row pos-rel'>
                            <div class='col-sm-12 col-md-8 animate'>
                                <h1 class='big fadeInDownBig animated'>Pharmacie centrale de Tunisie</h1>

                                <a class='btn btn-bordered btn-white btn-lg fadeInRightBig animated' href='http://www.phct.com.tn/'>
                                    En Savoir Plus
                                </a>
                            </div>
                            <div class='col-sm-4 animate pos-sta hidden-xs hidden-sm'>
                                <img class=\"img-responsive fadeInUpBig animated\"  style=\"position:absolute;bottom:0;right:15px;\" width=\"331\" height=\"370\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/demo/carousels/logo.png"), "html", null, true);
        echo "\" />
                            </div>
                        </div>
                    </div>
                </li>
                <li class='item'>
                    <div class='container'>
                        <div class='row pos-rel'>
                            <div class='col-sm-12 col-md-8 animate'>
                                <h1 class='big fadeInDownBig animated'>SOS Animaux</h1>

                                <a class='btn btn-bordered btn-white btn-lg fadeInRightBig animated' href='http://www.dryra.com'>
                                    En Savoir Plus
                                </a>
                            </div>
                            <div class='col-sm-4 animate pos-sta hidden-xs hidden-sm'>
                                <img class=\"img-responsive fadeInUpBig animated\"  style=\"position:absolute;bottom:0;right:15px;\" width=\"231\" height=\"270\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/dog.jpg"), "html", null, true);
        echo "\" />
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id='main-content'>
        <div class='container'>
            
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"page-header page-header-with-icon\">
                        <i class=\"fa-icon-plus-sign-alt \"></i>
                        <h2>
                            Le meilleur site de pharmacies en Tunisie
                        </h2>
                    </div>
                </div>
                <div class='row quotes'>
                  <div class='carousel carousel-default slide carousel-auto' id='carousel-testimonials'>
                    <div class='carousel-inner'>
                      <div class='item active quote'>
                        <div class='col-sm-12 text-center'>
                          <p class='lead'> Localiser la pharmacie que vous voulez avec avec simple click.</p>
                          
                        </div>
                      </div>
                      <div class='item quote'>
                        <div class='col-sm-12 text-center'>
                          <p class='lead'> Trouver les pharmacies en garde. Notre site vous permet de trouver les pharmacies en garde dans toutes les gouvernorats tunisiennes.</p>
                          
                        </div>
                      </div>
                      <div class='item quote'>
                        <div class='col-sm-12 text-center'>
                          <p class='lead'> Consuler les informations de chaque pharmacie. Dans Tunipharma.com vous trouvez les détails des pharmacies ; télphone, adresse, e-mail, les jours de garde et les services.</p>
                          
                        </div>
                      </div>
                      <div class='item quote'>
                        <div class='col-sm-12 text-center'>
                            <p class='lead'> Avec Tunipharma commenter les pharmacies.Vous pouvez commenter une pharmacie avec votre compte <p style=\"color:blue\">facebook</p></p>
                          
                        </div>
                      </div>
                    </div>
                    <ol class='carousel-indicators'>
                      <li class='active' data-slide-to='0' data-target='#carousel-testimonials'></li>
                      <li data-slide-to='1' data-target='#carousel-testimonials'></li>
                      <li data-slide-to='2' data-target='#carousel-testimonials'></li>
                      <li data-slide-to='3' data-target='#carousel-testimonials'></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-sm-12'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa-icon-certificate'></i>
                  <h2>
                    Notre PortFolio
                    <small>Aliquam placerat, nunc non ullamcorper rutrum, odio urna aliquam dui, a scelerisque purus dui et libero.</small>
                  </h2>
                </div>
                <div class='row'>
                  <div class='col-sm-12'>
                    <div class='client-slideshow cycle-slideshow' data-cycle-carousel-fluid='true' data-cycle-fx='carousel' data-cycle-timeout='2000'>
                      <img alt=\"\" width=\"140\" height=\"33\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/demo/logos/jquerymobile.jpg"), "html", null, true);
        echo "\" />
                      <img alt=\"\" width=\"140\" height=\"33\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/demo/logos/dribbble.jpg"), "html", null, true);
        echo "\" />
                      <img alt=\"\" width=\"140\" height=\"26\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/demo/logos/behance.jpg"), "html", null, true);
        echo "\" />
                      <img alt=\"\" width=\"139\" height=\"32\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/demo/logos/wp.jpg"), "html", null, true);
        echo "\" />
                      <img alt=\"\" width=\"151\" height=\"28\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/demo/logos/envato.jpg"), "html", null, true);
        echo "\" />
                      <img alt=\"\" width=\"31\" height=\"38\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/demo/logos/apple.jpg"), "html", null, true);
        echo "\" />
                    </div>
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

    public function getTemplateName()
    {
        return "MainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 126,  182 => 125,  178 => 124,  174 => 123,  170 => 122,  166 => 121,  93 => 51,  74 => 35,  55 => 19,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
