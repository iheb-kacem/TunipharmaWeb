<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_b03820b14012f6c01a468e41346fc201ceb85f6864a23abee5ff4bfbaf8e4b79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        echo " cms-container";
        if ((!$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method"))) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class"), "html", null, true);
        }
    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        echo "container";
    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre");
        }
        // line 23
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post");
        }
    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 42,  77 => 27,  113 => 50,  81 => 24,  20 => 1,  65 => 29,  97 => 66,  371 => 260,  367 => 259,  331 => 226,  311 => 210,  308 => 209,  272 => 176,  225 => 134,  212 => 129,  90 => 50,  383 => 261,  338 => 191,  326 => 189,  318 => 188,  313 => 186,  304 => 184,  300 => 183,  288 => 173,  280 => 172,  276 => 171,  192 => 96,  126 => 50,  124 => 49,  118 => 68,  114 => 44,  134 => 75,  23 => 12,  296 => 187,  282 => 175,  279 => 174,  228 => 126,  202 => 112,  190 => 108,  185 => 107,  181 => 106,  146 => 77,  165 => 130,  178 => 100,  174 => 123,  53 => 23,  262 => 109,  259 => 108,  245 => 9,  236 => 111,  233 => 110,  231 => 108,  223 => 106,  211 => 103,  195 => 99,  161 => 86,  218 => 123,  215 => 104,  210 => 80,  200 => 63,  186 => 126,  175 => 94,  172 => 17,  167 => 8,  100 => 27,  76 => 27,  434 => 219,  420 => 134,  417 => 133,  410 => 38,  406 => 10,  403 => 251,  394 => 222,  391 => 221,  389 => 219,  385 => 218,  377 => 216,  373 => 215,  369 => 214,  361 => 212,  357 => 211,  353 => 210,  349 => 209,  345 => 208,  333 => 205,  329 => 204,  265 => 143,  257 => 137,  255 => 39,  248 => 10,  216 => 131,  207 => 108,  191 => 98,  180 => 88,  170 => 97,  160 => 74,  150 => 84,  127 => 53,  110 => 40,  70 => 19,  58 => 12,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 220,  435 => 146,  430 => 135,  427 => 134,  423 => 136,  413 => 39,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 217,  379 => 119,  374 => 116,  368 => 112,  365 => 213,  362 => 110,  360 => 109,  355 => 106,  341 => 207,  337 => 206,  322 => 101,  314 => 99,  312 => 98,  309 => 185,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 175,  264 => 84,  258 => 81,  252 => 38,  247 => 78,  241 => 77,  229 => 73,  220 => 118,  214 => 122,  177 => 65,  169 => 60,  140 => 74,  132 => 53,  128 => 71,  107 => 47,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 121,  235 => 74,  230 => 116,  227 => 107,  224 => 71,  221 => 77,  219 => 105,  217 => 75,  208 => 128,  204 => 72,  179 => 95,  159 => 61,  143 => 80,  135 => 82,  119 => 42,  102 => 55,  71 => 22,  67 => 25,  63 => 27,  59 => 14,  87 => 25,  201 => 92,  196 => 54,  183 => 96,  171 => 93,  166 => 121,  163 => 72,  158 => 67,  156 => 100,  151 => 63,  142 => 61,  138 => 54,  136 => 76,  121 => 67,  117 => 65,  105 => 36,  91 => 28,  62 => 18,  49 => 19,  94 => 49,  89 => 35,  85 => 33,  75 => 16,  68 => 25,  56 => 23,  38 => 6,  25 => 6,  21 => 2,  28 => 4,  24 => 7,  31 => 14,  26 => 14,  19 => 11,  93 => 29,  88 => 43,  78 => 27,  46 => 16,  44 => 19,  27 => 4,  79 => 30,  72 => 21,  69 => 25,  47 => 10,  40 => 19,  37 => 18,  22 => 3,  246 => 90,  157 => 88,  145 => 62,  139 => 45,  131 => 54,  123 => 58,  120 => 47,  115 => 63,  111 => 37,  108 => 41,  101 => 25,  98 => 24,  96 => 33,  83 => 41,  74 => 24,  66 => 21,  55 => 13,  52 => 20,  50 => 22,  43 => 12,  41 => 18,  35 => 8,  32 => 3,  29 => 15,  209 => 82,  203 => 101,  199 => 100,  193 => 53,  189 => 42,  187 => 97,  182 => 125,  176 => 64,  173 => 134,  168 => 72,  164 => 92,  162 => 129,  154 => 66,  149 => 84,  147 => 58,  144 => 49,  141 => 48,  133 => 67,  130 => 73,  125 => 44,  122 => 69,  116 => 41,  112 => 43,  109 => 34,  106 => 46,  103 => 28,  99 => 35,  95 => 38,  92 => 21,  86 => 41,  82 => 42,  80 => 52,  73 => 26,  64 => 19,  60 => 23,  57 => 10,  54 => 16,  51 => 22,  48 => 21,  45 => 20,  42 => 18,  39 => 7,  36 => 17,  33 => 6,  30 => 2,);
    }
}
