<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_4891981f72e556b6234b51bf16ae1a24601e84766be769a7fe2657c90b60948d extends Twig_Template
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
        echo "    Accès pharmacien | TuniPharma
";
    }

    // line 7
    public function block_titre($context, array $blocks = array())
    {
        // line 8
        echo "    Accès pharmacien
";
    }

    // line 10
    public function block_description($context, array $blocks = array())
    {
        // line 11
        echo "    Bienvenue dans l'espace dédié aux officinaux
";
    }

    // line 13
    public function block_corps($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "        <div class='row'>
        <div class='col-sm-6'>
        <div class='alert alert-danger fade in'>Invalide Login ou mot de passe</div>
        </div>
        </div>
    ";
        }
        // line 22
        echo "
    <div class='row'>
        <div class='col-sm-12'>
            <div class='row'>
                <div class='col-sm-12'>
                    <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class='form'>
                        <fieldset class='row'>
                            <div class='col-sm-4 mg-b-md'>
                                <div class='lead'>Déjà partenaire ?</div>
                                <div class='lead'>Identifiez-vous :</div>
                            </div>
                            <div class='col-sm-7 col-sm-offset-1'>
                                <div class='form-group'>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                                    <label for=\"username\">Login</label>
                                    <input class='form-control' type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                                </div>
                                <div class='form-group'>

                                    <label for=\"password\">Mot de Passe</label>
                                    <input class='form-control' type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                    <label for=\"remember_me\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>


                                    <p class='help-block'>
                                        <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">
                                            <small class='text-muted'> Besoin d'aide ? </small>
                                        </a>
                                    </p>
                                </div>
                                <div class='col-md-9 col-md-offset-3'>
                                    <button class='btn btn-contrast' type='submit'>
                                        <i class='icon-save'></i>
                                        Se Connecter
                                    </button>
                                    <button class='btn btn-very-light' type='reset'>Annuler</button>
                                </div>
                            </div>
                        </fieldset>
                        <hr class='hr-dashed'>
                        <div class='form-actions mg-t-lg'>
                            <div class='row'>
                                <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">
                                    <div class='col-sm-7 col-sm-offset-5'>
                                        <div class='text-center-xs'>
                                            <div class='btn btn-contrast btn-lg'>
                                                <i class='fa-icon-save'></i>
                                                Devenez partenaire TuniPharma
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 67,  113 => 50,  106 => 46,  95 => 38,  89 => 35,  78 => 27,  71 => 22,  63 => 16,  60 => 15,  58 => 14,  55 => 13,  50 => 11,  47 => 10,  42 => 8,  39 => 7,  34 => 5,  31 => 4,);
    }
}
