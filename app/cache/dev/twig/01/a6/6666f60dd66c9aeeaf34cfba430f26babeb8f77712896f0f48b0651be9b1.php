<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_01a66666f60dd66c9aeeaf34cfba430f26babeb8f77712896f0f48b0651be9b1 extends Twig_Template
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
        echo "<div class='col-sm-12'>
    <form class=\"form form-horizontal\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
        <fieldset class='row'>
            ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "

            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\" for=\"input-text\">Mot de Passe Actuelle : </label>
                <div class=\"col-md-5\">
                    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class='form-group'>
                <label class=\"col-md-3 control-label\"  for=\"nom\">Mot de Passe : </label>
                <div class=\"col-md-5\">
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class='form-group'>
                <label class=\"col-md-3 control-label\"  for=\"nom\">Confirmation : </label>
                <div class=\"col-md-5\">
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "form-control")));
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
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 16,  37 => 10,  29 => 5,  22 => 3,  19 => 2,  64 => 19,  62 => 18,  55 => 22,  52 => 12,  47 => 10,  42 => 8,  39 => 7,  34 => 5,  31 => 4,);
    }
}
