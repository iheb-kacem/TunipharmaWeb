<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_13f277fc0d51da06515caf715bf58e141f8635aca16e84a97f87615e4a897318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "username"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "revisionType"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "id"), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 139,  351 => 135,  347 => 134,  343 => 132,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  281 => 110,  277 => 109,  271 => 108,  260 => 104,  251 => 101,  239 => 97,  213 => 82,  197 => 74,  148 => 60,  270 => 4,  253 => 1,  206 => 71,  198 => 66,  137 => 37,  129 => 59,  84 => 16,  77 => 27,  113 => 44,  81 => 15,  20 => 11,  65 => 83,  97 => 47,  371 => 260,  367 => 259,  331 => 226,  311 => 210,  308 => 209,  272 => 176,  225 => 87,  212 => 74,  90 => 20,  383 => 261,  338 => 130,  326 => 189,  318 => 188,  313 => 186,  304 => 184,  300 => 183,  288 => 173,  280 => 172,  276 => 171,  192 => 64,  126 => 50,  124 => 49,  118 => 68,  114 => 44,  134 => 56,  23 => 12,  296 => 187,  282 => 175,  279 => 174,  228 => 88,  202 => 77,  190 => 108,  185 => 59,  181 => 106,  146 => 77,  165 => 64,  178 => 100,  174 => 67,  53 => 10,  262 => 105,  259 => 108,  245 => 9,  236 => 111,  233 => 81,  231 => 108,  223 => 106,  211 => 81,  195 => 99,  161 => 86,  218 => 123,  215 => 104,  210 => 73,  200 => 63,  186 => 126,  175 => 53,  172 => 51,  167 => 48,  100 => 23,  76 => 27,  434 => 219,  420 => 134,  417 => 133,  410 => 38,  406 => 10,  403 => 251,  394 => 222,  391 => 221,  389 => 219,  385 => 218,  377 => 216,  373 => 215,  369 => 214,  361 => 212,  357 => 211,  353 => 210,  349 => 209,  345 => 208,  333 => 205,  329 => 204,  265 => 106,  257 => 103,  255 => 39,  248 => 100,  216 => 131,  207 => 108,  191 => 98,  180 => 56,  170 => 97,  160 => 44,  150 => 84,  127 => 54,  110 => 40,  70 => 19,  58 => 12,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 220,  435 => 146,  430 => 135,  427 => 134,  423 => 136,  413 => 39,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 217,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 206,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 38,  247 => 78,  241 => 77,  229 => 73,  220 => 118,  214 => 122,  177 => 54,  169 => 66,  140 => 74,  132 => 53,  128 => 71,  107 => 52,  61 => 11,  273 => 96,  269 => 94,  254 => 102,  243 => 98,  240 => 86,  238 => 121,  235 => 74,  230 => 116,  227 => 107,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 95,  159 => 61,  143 => 59,  135 => 82,  119 => 42,  102 => 55,  71 => 22,  67 => 19,  63 => 27,  59 => 23,  87 => 25,  201 => 92,  196 => 65,  183 => 96,  171 => 93,  166 => 121,  163 => 45,  158 => 62,  156 => 41,  151 => 63,  142 => 61,  138 => 57,  136 => 76,  121 => 67,  117 => 34,  105 => 39,  91 => 34,  62 => 24,  49 => 9,  94 => 35,  89 => 43,  85 => 30,  75 => 16,  68 => 25,  56 => 23,  38 => 17,  25 => 12,  21 => 2,  28 => 13,  24 => 7,  31 => 14,  26 => 14,  19 => 11,  93 => 21,  88 => 43,  78 => 27,  46 => 16,  44 => 18,  27 => 13,  79 => 37,  72 => 10,  69 => 9,  47 => 43,  40 => 20,  37 => 19,  22 => 3,  246 => 99,  157 => 88,  145 => 62,  139 => 45,  131 => 55,  123 => 58,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 49,  98 => 37,  96 => 33,  83 => 41,  74 => 23,  66 => 29,  55 => 22,  52 => 78,  50 => 44,  43 => 12,  41 => 18,  35 => 15,  32 => 12,  29 => 15,  209 => 82,  203 => 101,  199 => 100,  193 => 53,  189 => 71,  187 => 60,  182 => 69,  176 => 64,  173 => 134,  168 => 72,  164 => 92,  162 => 129,  154 => 40,  149 => 84,  147 => 58,  144 => 49,  141 => 48,  133 => 67,  130 => 73,  125 => 44,  122 => 69,  116 => 45,  112 => 43,  109 => 53,  106 => 46,  103 => 50,  99 => 35,  95 => 22,  92 => 21,  86 => 17,  82 => 28,  80 => 52,  73 => 26,  64 => 28,  60 => 15,  57 => 80,  54 => 16,  51 => 22,  48 => 21,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 6,  30 => 9,);
    }
}
