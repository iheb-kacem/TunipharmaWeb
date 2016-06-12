<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c3cff5f8e08f064f2d965869bb39fbcbd58648bca656ebb727676e5388c1e22b extends Twig_Template
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
        echo "    Profile pharmacien | TuniPharma
";
    }

    // line 7
    public function block_titre($context, array $blocks = array())
    {
        // line 8
        echo "    Profile pharmacien
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
                    <fieldset class='row'>
                        <div class='col-sm-12'>
                            ";
        // line 20
        $this->env->loadTemplate("FOSUserBundle:Profile:show_content.html.twig")->display($context);
        // line 21
        echo "                        </div>
                    </fieldset>
                        <hr class='hr-dashed'>
                        <div class='form-actions mg-t-lg'>
                            <div class='row'>
                                <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">
                                    <div class='col-sm-7 col-sm-offset-5'>
                                        <div class='text-center-xs'>
                                            <div class='btn btn-contrast btn-lg'>
                                                <i class='fa-icon-edit'></i>
                                                Modifier Votre Profile
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  66 => 21,  64 => 20,  55 => 13,  52 => 12,  47 => 10,  42 => 8,  39 => 7,  34 => 5,  31 => 4,);
    }
}
