<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_b0c2d7c225e8e7a512a9e54ef8ae7e61060c651e1868676cc28c7252b740602a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

<div class='col-sm-12'>
    <form  class=\"form form-horizontal\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
        <fieldset class='row'>
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"input-text\">Pseudo</label>
                <div class=\"col-md-5\">
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"input-text\">Nom</label>
                <div class=\"col-md-5\">
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"input-text\">prénom</label>
                <div class=\"col-md-5\">
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"input-text\">N° Carte d'Identité</label>
                <div class=\"col-md-5\">
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"input-text\">E-mail</label>
                <div class=\"col-md-5\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"input-text\">Mot de Passe Actuelle</label>
                <div class=\"col-md-5\">
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

        </fieldset>
        <hr class='hr-dashed'>
        <div class='col-sm-7 col-sm-offset-1'>
            <div class='col-md-9 col-md-offset-3'>
                <button class='btn btn-contrast' type='submit'>
                    <i class='icon-save'></i>
                    Enregistrer Votre Profile
            </div>
        </div>

    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 41,  74 => 35,  65 => 29,  56 => 23,  38 => 11,  24 => 5,  19 => 2,  64 => 19,  62 => 18,  55 => 13,  52 => 12,  47 => 17,  42 => 8,  39 => 7,  34 => 5,  31 => 7,);
    }
}
