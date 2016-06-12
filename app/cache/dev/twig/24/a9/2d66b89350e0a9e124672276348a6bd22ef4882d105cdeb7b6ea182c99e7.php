<?php

/* MainBundle:Default:success.html.twig */
class __TwigTemplate_24a92d66b89350e0a9e124672276348a6bd22ef4882d105cdeb7b6ea182c99e7 extends Twig_Template
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
            'scripts' => array($this, 'block_scripts'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Confirmation | TuniPharma
";
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        // line 6
        echo "    Confirmation
";
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
    }

    // line 10
    public function block_corps($context, array $blocks = array())
    {
        // line 11
        echo "
    ";
        // line 13
        echo "    <div class=\"alert alert-success fade in\">
        <strong>Modification avec Succés !</strong>
    </div>

";
    }

    // line 18
    public function block_scripts($context, array $blocks = array())
    {
        // line 19
        echo "    <script>
        \$('document').ready(function() {
            setTimeout(function() {
                window.location.href = \"";
        // line 22
        echo $this->env->getExtension('routing')->getPath((isset($context["redirect"]) ? $context["redirect"] : $this->getContext($context, "redirect")));
        echo "\";
            }, 2000);
        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Default:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  262 => 109,  259 => 108,  245 => 9,  236 => 111,  233 => 110,  231 => 108,  223 => 106,  211 => 103,  195 => 99,  161 => 86,  218 => 100,  215 => 104,  210 => 80,  200 => 63,  186 => 41,  175 => 94,  172 => 17,  167 => 8,  100 => 53,  76 => 27,  434 => 219,  420 => 134,  417 => 133,  410 => 38,  406 => 10,  403 => 9,  394 => 222,  391 => 221,  389 => 219,  385 => 218,  377 => 216,  373 => 215,  369 => 214,  361 => 212,  357 => 211,  353 => 210,  349 => 209,  345 => 208,  333 => 205,  329 => 204,  265 => 143,  257 => 137,  255 => 39,  248 => 10,  216 => 109,  207 => 102,  191 => 98,  180 => 88,  170 => 81,  160 => 74,  150 => 67,  127 => 53,  110 => 40,  70 => 19,  58 => 17,  34 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 220,  435 => 146,  430 => 135,  427 => 134,  423 => 136,  413 => 39,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 217,  379 => 119,  374 => 116,  368 => 112,  365 => 213,  362 => 110,  360 => 109,  355 => 106,  341 => 207,  337 => 206,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 38,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 108,  177 => 65,  169 => 60,  140 => 60,  132 => 51,  128 => 49,  107 => 36,  61 => 24,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 121,  235 => 74,  230 => 116,  227 => 107,  224 => 71,  221 => 77,  219 => 105,  217 => 75,  208 => 68,  204 => 72,  179 => 95,  159 => 61,  143 => 56,  135 => 82,  119 => 42,  102 => 55,  71 => 10,  67 => 18,  63 => 15,  59 => 13,  87 => 30,  201 => 92,  196 => 54,  183 => 96,  171 => 93,  166 => 71,  163 => 62,  158 => 67,  156 => 100,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 65,  105 => 36,  91 => 31,  62 => 14,  49 => 14,  94 => 33,  89 => 31,  85 => 30,  75 => 22,  68 => 25,  56 => 11,  38 => 6,  25 => 3,  21 => 2,  28 => 3,  24 => 1,  31 => 2,  26 => 6,  19 => 1,  93 => 28,  88 => 43,  78 => 13,  46 => 8,  44 => 19,  27 => 4,  79 => 18,  72 => 26,  69 => 25,  47 => 12,  40 => 5,  37 => 10,  22 => 1,  246 => 90,  157 => 85,  145 => 46,  139 => 45,  131 => 54,  123 => 58,  120 => 57,  115 => 63,  111 => 37,  108 => 38,  101 => 35,  98 => 31,  96 => 33,  83 => 25,  74 => 31,  66 => 24,  55 => 13,  52 => 21,  50 => 11,  43 => 6,  41 => 9,  35 => 3,  32 => 2,  29 => 3,  209 => 82,  203 => 101,  199 => 100,  193 => 53,  189 => 42,  187 => 97,  182 => 30,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 99,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 79,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 40,  109 => 34,  106 => 36,  103 => 36,  99 => 35,  95 => 28,  92 => 21,  86 => 41,  82 => 22,  80 => 28,  73 => 19,  64 => 24,  60 => 23,  57 => 11,  54 => 21,  51 => 10,  48 => 8,  45 => 17,  42 => 9,  39 => 3,  36 => 2,  33 => 4,  30 => 7,);
    }
}
