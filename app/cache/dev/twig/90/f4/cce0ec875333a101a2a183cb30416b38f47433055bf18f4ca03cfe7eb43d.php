<?php

/* MainBundle::PageLayout.html.twig */
class __TwigTemplate_90f4cce0ec875333a101a2a183cb30416b38f47433055bf18f4ca03cfe7eb43d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MainBundle::Layout.html.twig");

        $this->blocks = array(
            'coeur' => array($this, 'block_coeur'),
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
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
    public function block_coeur($context, array $blocks = array())
    {
        // line 3
        echo "    <div id='main' role='main'>
        <div id='main-content-header'>
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <h1 class='title'>
                            ";
        // line 9
        $this->displayBlock('titre', $context, $blocks);
        // line 11
        echo "                            <small>
                                ";
        // line 12
        $this->displayBlock('description', $context, $blocks);
        // line 14
        echo "                            </small>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div id='main-content'>
            <div class='container'>
                ";
        // line 22
        $this->displayBlock('corps', $context, $blocks);
        // line 24
        echo "            </div>
        </div>
    </div>
    ";
    }

    // line 9
    public function block_titre($context, array $blocks = array())
    {
        // line 10
        echo "                            ";
    }

    // line 12
    public function block_description($context, array $blocks = array())
    {
        // line 13
        echo "                                ";
    }

    // line 22
    public function block_corps($context, array $blocks = array())
    {
        // line 23
        echo "                ";
    }

    public function getTemplateName()
    {
        return "MainBundle::PageLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  82 => 22,  78 => 13,  75 => 12,  71 => 10,  68 => 9,  61 => 24,  49 => 14,  47 => 12,  44 => 11,  42 => 9,  34 => 3,  31 => 2,  338 => 217,  326 => 216,  322 => 215,  286 => 182,  266 => 166,  263 => 165,  248 => 152,  238 => 148,  232 => 145,  226 => 142,  220 => 139,  214 => 136,  208 => 133,  202 => 131,  198 => 130,  148 => 83,  144 => 82,  110 => 50,  101 => 48,  97 => 47,  64 => 17,  59 => 22,  56 => 13,  51 => 10,  48 => 9,  43 => 7,  40 => 6,  35 => 4,  32 => 3,);
    }
}
