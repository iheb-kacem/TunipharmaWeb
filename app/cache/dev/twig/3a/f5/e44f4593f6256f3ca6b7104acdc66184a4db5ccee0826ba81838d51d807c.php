<?php

/* MainBundle::PharmacieLayout.html.twig */
class __TwigTemplate_3af5e44f4593f6256f3ca6b7104acdc66184a4db5ccee0826ba81838d51d807c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MainBundle::PageLayout.html.twig");

        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
            'pharmacie' => array($this, 'block_pharmacie'),
            'addresse' => array($this, 'block_addresse'),
            'tel' => array($this, 'block_tel'),
            'mail' => array($this, 'block_mail'),
            'horaire' => array($this, 'block_horaire'),
            'service' => array($this, 'block_service'),
            'map' => array($this, 'block_map'),
            'garde' => array($this, 'block_garde'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::PageLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        // line 3
        echo " <div class='row'>
              <div class='col-sm-12'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa-icon-info-sign'></i>
                  <h3>
                      Pharmacie </h3> <h2 style=\"color:green\">";
        // line 8
        $this->displayBlock('pharmacie', $context, $blocks);
        echo "</h2> 
                </div>
                <div class='row text-center'>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa-icon-map-marker text-white'></i>
                    </div>
                    <h3>Address</h3>
                    <ul class='list-unstyled'>
                      <li>";
        // line 17
        $this->displayBlock('addresse', $context, $blocks);
        // line 19
        echo "                      </li>
                      
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa-icon-phone text-white'></i>
                    </div>
                    <h3>Telephone</h3>
                    <ul class='list-unstyled'>
                      <li>";
        // line 29
        $this->displayBlock('tel', $context, $blocks);
        // line 31
        echo "                      </li>
                      
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa-icon-envelope-alt text-white'></i>
                    </div>
                    <h3>E-Mail</h3>
                    <ul class='list-unstyled'>
                      <li>";
        // line 41
        $this->displayBlock('mail', $context, $blocks);
        // line 43
        echo "                      </li>
                      
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa-icon-time text-white'></i>
                    </div>
                    <h3>Horaire</h3>
                    <ul class='list-unstyled'>
                      ";
        // line 53
        $this->displayBlock('horaire', $context, $blocks);
        // line 55
        echo "                    </ul>
                  </div>
                    <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                        <i class='fa-icon-star text-white'> </i>
                    </div>
                    <h3><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("_service");
        echo "\" />Service</a></h3>
                    <ul class='list-unstyled'>
                      ";
        // line 63
        $this->displayBlock('service', $context, $blocks);
        // line 65
        echo "                    </ul>
                  </div>
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
                   ";
        // line 79
        $this->displayBlock('map', $context, $blocks);
        // line 82
        echo "                 
              </div>
                
                   
                   
                   
                   
                   
                  <div class='col-sm-6'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa-icon-time'></i></i>
                  <h2>Jours de garde</h2>
                </div>
                
              </div> 
                   
                   
                 ";
        // line 99
        $this->displayBlock('garde', $context, $blocks);
        // line 100
        echo "  
                   
                   
            </div>
        </div>
\t\t
        
        ";
    }

    // line 8
    public function block_pharmacie($context, array $blocks = array())
    {
    }

    // line 17
    public function block_addresse($context, array $blocks = array())
    {
        // line 18
        echo "                          ";
    }

    // line 29
    public function block_tel($context, array $blocks = array())
    {
        // line 30
        echo "                          ";
    }

    // line 41
    public function block_mail($context, array $blocks = array())
    {
        // line 42
        echo "                          ";
    }

    // line 53
    public function block_horaire($context, array $blocks = array())
    {
        // line 54
        echo "                       ";
    }

    // line 63
    public function block_service($context, array $blocks = array())
    {
        // line 64
        echo "                       ";
    }

    // line 79
    public function block_map($context, array $blocks = array())
    {
        // line 80
        echo "                
                  ";
    }

    // line 99
    public function block_garde($context, array $blocks = array())
    {
        // line 100
        echo "                  ";
    }

    public function getTemplateName()
    {
        return "MainBundle::PharmacieLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 99,  210 => 80,  207 => 79,  203 => 64,  200 => 63,  196 => 54,  193 => 53,  189 => 42,  186 => 41,  182 => 30,  179 => 29,  175 => 18,  172 => 17,  167 => 8,  156 => 100,  154 => 99,  135 => 82,  133 => 79,  117 => 65,  115 => 63,  110 => 61,  102 => 55,  100 => 53,  88 => 43,  86 => 41,  74 => 31,  72 => 29,  58 => 17,  46 => 8,  39 => 3,  36 => 2,  296 => 187,  282 => 175,  279 => 174,  228 => 126,  218 => 100,  214 => 122,  202 => 112,  190 => 108,  185 => 107,  181 => 106,  170 => 97,  146 => 77,  142 => 75,  140 => 74,  122 => 59,  107 => 47,  93 => 36,  85 => 33,  79 => 30,  63 => 16,  60 => 19,  55 => 9,  52 => 8,  45 => 6,  42 => 5,  35 => 3,  32 => 2,);
    }
}
