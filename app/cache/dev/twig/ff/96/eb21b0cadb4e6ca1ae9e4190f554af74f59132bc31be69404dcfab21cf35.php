<?php

/* MainBundle:Pharmacien:Service.html.twig */
class __TwigTemplate_ff96eb21b0cadb4e6ca1ae9e4190f554af74f59132bc31be69404dcfab21cf35 extends Twig_Template
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
        echo "<form class=\"form\" method=\"post\" action=\"#\" accept-charset=\"UTF-8\">
    <div class=\"col-sm-5\">
        <div class=\"form-group\">
            <label>Liste des Services:</label>

            <select class=\"form-control\" id=\"input-select-dispo\" multiple=\"multiple\" size =\"7\">
                ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 8
            echo "

                <option value=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "nom"), "html", null, true);
            echo "</option>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </select>
        </div>
    </div>
    <div class=\"col-sm-2\">

        <center>
            <br>
            <br>

            <a class=\"btn btn-danger btn-sm btn-circle\" id=\"tocurrent\" href=\"#\">

                <i class=\"fa-icon-chevron-right  text-white\"></i>

            </a>
            <br>
            <br>

        

            <a class=\"btn btn-danger btn-sm btn-circle\" id=\"todispo\" href=\"#\">

                <i class=\"fa-icon-chevron-left  text-white\"></i>

            </a>

        </center>
        

    </div>
    <div class=\"col-sm-5\">
        <div class=\"form-group\">
            <label>Liste des Services disponibles:</label>

            <select class=\"form-control\" id=\"input-select-current\" name='hh' multiple=\"multiple\" size =\"7\">
                
                ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pharmacie"]) ? $context["pharmacie"] : $this->getContext($context, "pharmacie")), "idService"));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 49
            echo "
                <option value=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "nom"), "html", null, true);
            echo "</option>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </select>
        </div>

    </div>
</form>


";
    }

    public function getTemplateName()
    {
        return "MainBundle:Pharmacien:Service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 50,  83 => 48,  35 => 10,  31 => 8,  27 => 7,  42 => 19,  149 => 84,  143 => 81,  134 => 75,  128 => 71,  121 => 67,  103 => 55,  94 => 49,  82 => 42,  73 => 36,  54 => 19,  46 => 13,  37 => 9,  30 => 5,  23 => 3,  19 => 1,  403 => 251,  383 => 234,  338 => 191,  326 => 189,  318 => 188,  313 => 186,  309 => 185,  304 => 184,  300 => 183,  288 => 173,  280 => 172,  276 => 171,  220 => 118,  207 => 108,  192 => 96,  163 => 72,  154 => 66,  150 => 65,  145 => 62,  142 => 61,  132 => 53,  130 => 52,  126 => 50,  124 => 49,  120 => 47,  118 => 46,  114 => 44,  112 => 61,  108 => 41,  106 => 40,  101 => 53,  89 => 46,  87 => 49,  75 => 16,  72 => 15,  67 => 13,  61 => 11,  57 => 10,  52 => 18,  49 => 8,  44 => 6,  41 => 5,  36 => 3,  33 => 13,);
    }
}
