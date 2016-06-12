<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_bf8a3224cfc37db38ff6c7ffcb7e679b26e88cdd2b4abed13da64327446161f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        // line 15
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 16
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren"))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        // line 24
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 25
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed")) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass")));
            } elseif ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentAncestor")) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass")));
            }
            // line 33
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst")) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass")));
            }
            // line 36
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast")) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass")));
            }
            // line 39
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes");
            // line 40
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes"))))) {
                // line 41
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"))) && ((!$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink")))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level"))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes"), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes")), (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<div";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes"), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes")), (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 59,  84 => 40,  77 => 36,  113 => 50,  81 => 24,  20 => 1,  65 => 29,  97 => 47,  371 => 260,  367 => 259,  331 => 226,  311 => 210,  308 => 209,  272 => 176,  225 => 134,  212 => 129,  90 => 50,  383 => 261,  338 => 191,  326 => 189,  318 => 188,  313 => 186,  304 => 184,  300 => 183,  288 => 173,  280 => 172,  276 => 171,  192 => 96,  126 => 50,  124 => 49,  118 => 68,  114 => 44,  134 => 75,  23 => 12,  296 => 187,  282 => 175,  279 => 174,  228 => 126,  202 => 112,  190 => 108,  185 => 107,  181 => 106,  146 => 77,  165 => 130,  178 => 100,  174 => 123,  53 => 23,  262 => 109,  259 => 108,  245 => 9,  236 => 111,  233 => 110,  231 => 108,  223 => 106,  211 => 103,  195 => 99,  161 => 86,  218 => 123,  215 => 104,  210 => 80,  200 => 63,  186 => 126,  175 => 94,  172 => 17,  167 => 8,  100 => 27,  76 => 27,  434 => 219,  420 => 134,  417 => 133,  410 => 38,  406 => 10,  403 => 251,  394 => 222,  391 => 221,  389 => 219,  385 => 218,  377 => 216,  373 => 215,  369 => 214,  361 => 212,  357 => 211,  353 => 210,  349 => 209,  345 => 208,  333 => 205,  329 => 204,  265 => 143,  257 => 137,  255 => 39,  248 => 10,  216 => 131,  207 => 108,  191 => 98,  180 => 88,  170 => 97,  160 => 74,  150 => 84,  127 => 53,  110 => 40,  70 => 19,  58 => 12,  34 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 220,  435 => 146,  430 => 135,  427 => 134,  423 => 136,  413 => 39,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 217,  379 => 119,  374 => 116,  368 => 112,  365 => 213,  362 => 110,  360 => 109,  355 => 106,  341 => 207,  337 => 206,  322 => 101,  314 => 99,  312 => 98,  309 => 185,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 175,  264 => 84,  258 => 81,  252 => 38,  247 => 78,  241 => 77,  229 => 73,  220 => 118,  214 => 122,  177 => 65,  169 => 60,  140 => 74,  132 => 53,  128 => 71,  107 => 52,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 121,  235 => 74,  230 => 116,  227 => 107,  224 => 71,  221 => 77,  219 => 105,  217 => 75,  208 => 128,  204 => 72,  179 => 95,  159 => 61,  143 => 80,  135 => 82,  119 => 42,  102 => 55,  71 => 22,  67 => 25,  63 => 27,  59 => 14,  87 => 25,  201 => 92,  196 => 54,  183 => 96,  171 => 93,  166 => 121,  163 => 72,  158 => 67,  156 => 100,  151 => 63,  142 => 61,  138 => 54,  136 => 76,  121 => 67,  117 => 57,  105 => 51,  91 => 44,  62 => 27,  49 => 19,  94 => 49,  89 => 43,  85 => 33,  75 => 16,  68 => 25,  56 => 23,  38 => 6,  25 => 6,  21 => 2,  28 => 4,  24 => 7,  31 => 14,  26 => 14,  19 => 11,  93 => 45,  88 => 43,  78 => 27,  46 => 16,  44 => 18,  27 => 4,  79 => 37,  72 => 33,  69 => 31,  47 => 10,  40 => 19,  37 => 18,  22 => 3,  246 => 90,  157 => 88,  145 => 62,  139 => 45,  131 => 54,  123 => 58,  120 => 47,  115 => 63,  111 => 37,  108 => 41,  101 => 49,  98 => 24,  96 => 33,  83 => 41,  74 => 34,  66 => 29,  55 => 24,  52 => 23,  50 => 22,  43 => 12,  41 => 18,  35 => 8,  32 => 16,  29 => 15,  209 => 82,  203 => 101,  199 => 100,  193 => 53,  189 => 42,  187 => 97,  182 => 125,  176 => 64,  173 => 134,  168 => 72,  164 => 92,  162 => 129,  154 => 66,  149 => 84,  147 => 58,  144 => 49,  141 => 48,  133 => 67,  130 => 73,  125 => 44,  122 => 69,  116 => 41,  112 => 43,  109 => 53,  106 => 46,  103 => 50,  99 => 35,  95 => 38,  92 => 21,  86 => 41,  82 => 39,  80 => 52,  73 => 26,  64 => 28,  60 => 26,  57 => 25,  54 => 16,  51 => 22,  48 => 21,  45 => 20,  42 => 18,  39 => 17,  36 => 16,  33 => 6,  30 => 2,);
    }
}
