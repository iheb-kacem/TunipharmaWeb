<?php

/* UserBundle:Registration:register_content.html.twig */
class __TwigTemplate_272f34c76cb4af5c25a8bf9c47ef4fad18c2054916cabb96f4962d1ef336188e extends Twig_Template
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
        echo "<div class='row'>
    <div class='col-sm-12'>
        <div class='row'>
            <div class='col-sm-12'>
                <form class=\"form form-horizontal\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
                    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
                    <fieldset class='row'>
                        <div class='col-sm-4 mg-b-md'>
                            <div class='lead'>Informations Personelles : </div>
                        </div>
                        <div class='col-sm-7 col-sm-offset-1'>
                            <div class='form-group'>
                                <label for=\"nom\">Nom : </label>
                                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class='form-group'>
                                <label for=\"nom\">Prénom : </label>
                                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class='form-group'>
                                <label for=\"email\">E-Mail : </label>
                                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class='form-group'>
                                <label for=\"cin\">N° Carte d'Identité : </label>
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class='row'>
                        <div class='col-sm-4 mg-b-md'>
                            <div class='lead'>Paramétres d'identification :</div>
                        </div>
                        <div class='col-sm-7 col-sm-offset-1'>
                            <div class='form-group'>
                                <label for=\"nom\">Pseudo : </label>
                                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class='form-group'>
                                <label for=\"nom\">Mot de Passe : </label>
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class='form-group'>
                                <label for=\"nom\">Confirmation : </label>
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                    </fieldset>
                    <div class='col-sm-7 col-sm-offset-1'>
                        <div class='col-md-9 col-md-offset-3'>
                            <button class='btn btn-contrast' type='submit'>
                                <i class='icon-save'></i>
                                S'inscrire
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 42,  77 => 38,  113 => 50,  81 => 24,  20 => 1,  65 => 29,  97 => 66,  371 => 260,  367 => 259,  331 => 226,  311 => 210,  308 => 209,  272 => 176,  225 => 134,  212 => 129,  90 => 50,  383 => 261,  338 => 191,  326 => 189,  318 => 188,  313 => 186,  304 => 184,  300 => 183,  288 => 173,  280 => 172,  276 => 171,  192 => 96,  126 => 50,  124 => 49,  118 => 68,  114 => 44,  134 => 75,  23 => 3,  296 => 187,  282 => 175,  279 => 174,  228 => 126,  202 => 112,  190 => 108,  185 => 107,  181 => 106,  146 => 77,  165 => 130,  178 => 100,  174 => 123,  53 => 10,  262 => 109,  259 => 108,  245 => 9,  236 => 111,  233 => 110,  231 => 108,  223 => 106,  211 => 103,  195 => 99,  161 => 86,  218 => 123,  215 => 104,  210 => 80,  200 => 63,  186 => 126,  175 => 94,  172 => 17,  167 => 8,  100 => 27,  76 => 27,  434 => 219,  420 => 134,  417 => 133,  410 => 38,  406 => 10,  403 => 251,  394 => 222,  391 => 221,  389 => 219,  385 => 218,  377 => 216,  373 => 215,  369 => 214,  361 => 212,  357 => 211,  353 => 210,  349 => 209,  345 => 208,  333 => 205,  329 => 204,  265 => 143,  257 => 137,  255 => 39,  248 => 10,  216 => 131,  207 => 108,  191 => 98,  180 => 88,  170 => 97,  160 => 74,  150 => 84,  127 => 53,  110 => 40,  70 => 19,  58 => 13,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 220,  435 => 146,  430 => 135,  427 => 134,  423 => 136,  413 => 39,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 217,  379 => 119,  374 => 116,  368 => 112,  365 => 213,  362 => 110,  360 => 109,  355 => 106,  341 => 207,  337 => 206,  322 => 101,  314 => 99,  312 => 98,  309 => 185,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 175,  264 => 84,  258 => 81,  252 => 38,  247 => 78,  241 => 77,  229 => 73,  220 => 118,  214 => 122,  177 => 65,  169 => 60,  140 => 74,  132 => 53,  128 => 71,  107 => 47,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 121,  235 => 74,  230 => 116,  227 => 107,  224 => 71,  221 => 77,  219 => 105,  217 => 75,  208 => 128,  204 => 72,  179 => 95,  159 => 61,  143 => 80,  135 => 82,  119 => 42,  102 => 55,  71 => 22,  67 => 20,  63 => 27,  59 => 14,  87 => 25,  201 => 92,  196 => 54,  183 => 96,  171 => 93,  166 => 121,  163 => 72,  158 => 67,  156 => 100,  151 => 63,  142 => 61,  138 => 54,  136 => 76,  121 => 67,  117 => 65,  105 => 36,  91 => 46,  62 => 19,  49 => 19,  94 => 49,  89 => 35,  85 => 33,  75 => 16,  68 => 25,  56 => 23,  38 => 11,  25 => 6,  21 => 2,  28 => 5,  24 => 7,  31 => 7,  26 => 12,  19 => 2,  93 => 29,  88 => 43,  78 => 27,  46 => 14,  44 => 6,  27 => 5,  79 => 30,  72 => 21,  69 => 25,  47 => 8,  40 => 11,  37 => 9,  22 => 2,  246 => 90,  157 => 88,  145 => 62,  139 => 45,  131 => 54,  123 => 58,  120 => 47,  115 => 63,  111 => 37,  108 => 41,  101 => 53,  98 => 31,  96 => 33,  83 => 41,  74 => 35,  66 => 21,  55 => 11,  52 => 10,  50 => 11,  43 => 12,  41 => 5,  35 => 8,  32 => 3,  29 => 6,  209 => 82,  203 => 101,  199 => 100,  193 => 53,  189 => 42,  187 => 97,  182 => 125,  176 => 64,  173 => 134,  168 => 72,  164 => 92,  162 => 129,  154 => 66,  149 => 84,  147 => 58,  144 => 49,  141 => 48,  133 => 67,  130 => 73,  125 => 44,  122 => 69,  116 => 41,  112 => 43,  109 => 34,  106 => 46,  103 => 28,  99 => 35,  95 => 38,  92 => 21,  86 => 41,  82 => 42,  80 => 52,  73 => 26,  64 => 19,  60 => 15,  57 => 10,  54 => 16,  51 => 10,  48 => 12,  45 => 6,  42 => 15,  39 => 5,  36 => 10,  33 => 4,  30 => 2,);
    }
}
