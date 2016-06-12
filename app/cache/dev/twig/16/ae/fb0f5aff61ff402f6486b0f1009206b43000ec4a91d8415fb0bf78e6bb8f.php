<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_16aefb0f5aff61ff402f6486b0f1009206b43000ec4a91d8415fb0bf78e6bb8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MainBundle::PageLayout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'corps' => array($this, 'block_corps'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    Changer Votre Mot de Passe | TuniPharma
";
    }

    // line 7
    public function block_titre($context, array $blocks = array())
    {
        // line 8
        echo "    Changer Votre Mot de Passe
";
    }

    // line 10
    public function block_description($context, array $blocks = array())
    {
    }

    // line 12
    public function block_corps($context, array $blocks = array())
    {
        // line 13
        echo "
    <div class='row'>
        <div class='col-sm-12'>
            <div class='row'>
                <div class='col-sm-12'>
                    ";
        // line 18
        $this->env->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig")->display($context);
        // line 19
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  62 => 18,  55 => 13,  52 => 12,  47 => 10,  42 => 8,  39 => 7,  34 => 5,  31 => 4,);
    }
}
