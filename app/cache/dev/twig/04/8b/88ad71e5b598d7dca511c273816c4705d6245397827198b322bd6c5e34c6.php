<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_048b88ad71e5b598d7dca511c273816c4705d6245397827198b322bd6c5e34c6 extends Twig_Template
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
<div class='form-group'>
    <label class='col-md-3 control-label'>Pseudo</label>
    <div class='col-md-9'>
        <div class=\"col-sm-4\">

            <div class=\"well\">

                ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "

            </div>

        </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-md-3 control-label'>Nom</label>
    <div class='col-md-9'>
        <div class=\"col-sm-4\">

            <div class=\"well\">

                ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
        echo "

            </div>

        </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-md-3 control-label'>Prénom</label>
    <div class='col-md-9'>
        <div class=\"col-sm-4\">

            <div class=\"well\">

                ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
        echo "

            </div>

        </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-md-3 control-label'>N° Carte d'identité</label>
    <div class='col-md-9'>
        <div class=\"col-sm-4\">

            <div class=\"well\">

                ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cin"), "html", null, true);
        echo "

            </div>

        </div>
    </div>
</div>
<div class='form-group'>
    <label class='col-md-3 control-label'>Adresse E-Mail</label>
    <div class='col-md-9'>
        <div class=\"col-sm-4\">

            <div class=\"well\">

                ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "

            </div>

        </div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 66,  80 => 52,  63 => 38,  46 => 24,  29 => 10,  19 => 2,  73 => 26,  66 => 21,  64 => 20,  55 => 13,  52 => 12,  47 => 10,  42 => 8,  39 => 7,  34 => 5,  31 => 4,);
    }
}
