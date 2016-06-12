<?php

/* MainBundle:Pharmacien:carte.html.twig */
class __TwigTemplate_5ae9baadc45f1523328c4a605bcac65a4323d1c189f4df9976ab6bd071cf21c6 extends Twig_Template
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
        // line 1
        echo "
<div id='map-canvas'></div>
<div class=\"page-header\">

</div>

<div class='col-sm-12'>
    <form class=\"form form-horizontal\" action=\"\" method=\"POST\" >
        
        <div class=\"form-group\">
            <label class=\"col-md-3 control-label\" for=\"input-text\">Latitude</label>
            <div class=\"col-md-5\">
                <input id=\"input-lat\" class=\"form-control\" type=\"text\" placeholder=\"Text field\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pharmacie"]) ? $context["pharmacie"] : $this->getContext($context, "pharmacie")), "lat"), "html", null, true);
        echo "\" disabled=\"\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-3 control-label\" for=\"input-text\">Longitude</label>
            <div class=\"col-md-5\">
                <input id=\"input-log\" class=\"form-control\" type=\"text\" placeholder=\"Text field\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pharmacie"]) ? $context["pharmacie"] : $this->getContext($context, "pharmacie")), "log"), "html", null, true);
        echo "\" disabled=\"\">
            </div>
        </div>
        <div class='col-sm-7 col-sm-offset-1'>
            <div class='col-md-9 col-md-offset-3'>
                <button class='btn btn-contrast' id='submit_location' type='button'>
                    <i class='icon-save'></i>
                    Enregistrer
                </button>
            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Pharmacien:carte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 19,  149 => 84,  143 => 81,  134 => 75,  128 => 71,  121 => 67,  103 => 55,  94 => 49,  82 => 42,  73 => 36,  54 => 19,  46 => 15,  37 => 9,  30 => 5,  23 => 3,  19 => 1,  403 => 251,  383 => 234,  338 => 191,  326 => 189,  318 => 188,  313 => 186,  309 => 185,  304 => 184,  300 => 183,  288 => 173,  280 => 172,  276 => 171,  220 => 118,  207 => 108,  192 => 96,  163 => 72,  154 => 66,  150 => 65,  145 => 62,  142 => 61,  132 => 53,  130 => 52,  126 => 50,  124 => 49,  120 => 47,  118 => 46,  114 => 44,  112 => 61,  108 => 41,  106 => 40,  101 => 37,  89 => 46,  87 => 26,  75 => 16,  72 => 15,  67 => 13,  61 => 11,  57 => 10,  52 => 18,  49 => 8,  44 => 6,  41 => 5,  36 => 3,  33 => 13,);
    }
}
