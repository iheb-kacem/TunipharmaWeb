<?php

/* SonataAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_cc59e7be9c6dead27a20446de5011f8450436a9a369e44957174aa6bcdd041a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 20
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 25
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 30
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : (""))));
        // line 36
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class") . " ") . ((((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "")) ? ((((((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")))) : ("")))));
        // line 37
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 38
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline")) {
                // line 43
                echo "                <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline")) {
                // line 50
                echo "                </div>
            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        $this->displayBlock("form_message", $context, $blocks);
        echo "
        ";
        // line 54
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 55
            echo "            </div>
        ";
        }
        // line 57
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 60
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "        ";
        if (((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 63
            echo "            ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 64
            echo "        ";
        }
        // line 65
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 66
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes"))) && (isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")))) {
            // line 70
            echo "            <label class=\"";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                echo "checkbox-inline";
            }
            echo "\">
        ";
        }
        // line 72
        echo "
        <input type=\"checkbox\" ";
        // line 73
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 74
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 75
            echo "            ";
            if (((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")) && twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget")))) {
                // line 76
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 79
            echo "        ";
        }
        // line 80
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 81
            echo "            </div>
            ";
            // line 82
            $this->displayBlock("form_message", $context, $blocks);
            echo "
        ";
        }
        // line 84
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 68,  786 => 238,  780 => 235,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  756 => 229,  753 => 228,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 206,  661 => 205,  658 => 204,  652 => 200,  648 => 198,  646 => 197,  641 => 196,  624 => 194,  607 => 193,  603 => 192,  598 => 191,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 186,  581 => 185,  572 => 180,  568 => 178,  566 => 177,  563 => 176,  561 => 175,  558 => 174,  554 => 153,  548 => 151,  542 => 149,  539 => 148,  536 => 147,  529 => 169,  523 => 167,  521 => 166,  518 => 165,  512 => 162,  509 => 161,  507 => 160,  504 => 159,  501 => 158,  483 => 156,  481 => 155,  478 => 154,  476 => 147,  467 => 146,  462 => 143,  456 => 140,  450 => 138,  447 => 137,  441 => 136,  428 => 133,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  404 => 125,  401 => 124,  388 => 117,  382 => 115,  376 => 113,  366 => 110,  363 => 109,  359 => 107,  356 => 105,  348 => 101,  346 => 100,  335 => 98,  332 => 97,  325 => 94,  306 => 88,  303 => 87,  291 => 84,  286 => 82,  267 => 74,  250 => 69,  321 => 152,  295 => 142,  274 => 135,  242 => 113,  153 => 55,  104 => 24,  358 => 139,  351 => 102,  347 => 134,  343 => 132,  327 => 154,  323 => 125,  319 => 124,  315 => 91,  301 => 144,  299 => 86,  293 => 113,  289 => 83,  281 => 110,  277 => 136,  271 => 108,  260 => 72,  251 => 101,  239 => 97,  213 => 82,  197 => 72,  148 => 60,  270 => 75,  253 => 70,  206 => 71,  198 => 53,  137 => 37,  129 => 47,  84 => 16,  77 => 35,  113 => 44,  81 => 15,  20 => 11,  65 => 83,  97 => 47,  371 => 260,  367 => 259,  331 => 226,  311 => 210,  308 => 89,  272 => 134,  225 => 64,  212 => 74,  90 => 20,  383 => 261,  338 => 99,  326 => 189,  318 => 188,  313 => 186,  304 => 184,  300 => 183,  288 => 173,  280 => 78,  276 => 171,  192 => 88,  126 => 50,  124 => 31,  118 => 29,  114 => 44,  134 => 49,  23 => 12,  296 => 187,  282 => 175,  279 => 174,  228 => 88,  202 => 77,  190 => 108,  185 => 86,  181 => 106,  146 => 53,  165 => 61,  178 => 100,  174 => 64,  53 => 10,  262 => 105,  259 => 108,  245 => 66,  236 => 109,  233 => 82,  231 => 108,  223 => 106,  211 => 81,  195 => 51,  161 => 86,  218 => 123,  215 => 104,  210 => 73,  200 => 73,  186 => 126,  175 => 53,  172 => 46,  167 => 48,  100 => 42,  76 => 13,  434 => 219,  420 => 134,  417 => 133,  410 => 127,  406 => 10,  403 => 251,  394 => 222,  391 => 221,  389 => 219,  385 => 116,  377 => 216,  373 => 215,  369 => 111,  361 => 212,  357 => 211,  353 => 103,  349 => 209,  345 => 208,  333 => 205,  329 => 96,  265 => 130,  257 => 103,  255 => 71,  248 => 116,  216 => 100,  207 => 108,  191 => 98,  180 => 66,  170 => 79,  160 => 76,  150 => 84,  127 => 32,  110 => 26,  70 => 33,  58 => 28,  34 => 61,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 139,  444 => 149,  440 => 148,  437 => 135,  435 => 146,  430 => 134,  427 => 134,  423 => 136,  413 => 128,  409 => 132,  407 => 126,  402 => 130,  398 => 123,  393 => 126,  387 => 122,  384 => 121,  381 => 217,  379 => 119,  374 => 112,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 206,  322 => 101,  314 => 99,  312 => 90,  309 => 148,  305 => 119,  298 => 91,  294 => 85,  285 => 111,  283 => 138,  278 => 86,  268 => 107,  264 => 73,  258 => 81,  252 => 38,  247 => 78,  241 => 77,  229 => 73,  220 => 63,  214 => 75,  177 => 65,  169 => 44,  140 => 52,  132 => 34,  128 => 58,  107 => 25,  61 => 29,  273 => 96,  269 => 133,  254 => 102,  243 => 98,  240 => 65,  238 => 84,  235 => 74,  230 => 81,  227 => 80,  224 => 79,  221 => 79,  219 => 101,  217 => 76,  208 => 57,  204 => 55,  179 => 95,  159 => 39,  143 => 38,  135 => 35,  119 => 42,  102 => 55,  71 => 33,  67 => 32,  63 => 27,  59 => 185,  87 => 25,  201 => 92,  196 => 65,  183 => 96,  171 => 63,  166 => 42,  163 => 45,  158 => 75,  156 => 41,  151 => 54,  142 => 61,  138 => 36,  136 => 50,  121 => 30,  117 => 34,  105 => 39,  91 => 34,  62 => 29,  49 => 123,  94 => 35,  89 => 39,  85 => 30,  75 => 39,  68 => 25,  56 => 184,  38 => 20,  25 => 12,  21 => 2,  28 => 13,  24 => 7,  31 => 60,  26 => 14,  19 => 11,  93 => 21,  88 => 43,  78 => 14,  46 => 122,  44 => 82,  27 => 13,  79 => 37,  72 => 37,  69 => 218,  47 => 43,  40 => 20,  37 => 19,  22 => 3,  246 => 99,  157 => 57,  145 => 62,  139 => 45,  131 => 55,  123 => 57,  120 => 56,  115 => 28,  111 => 30,  108 => 28,  101 => 23,  98 => 21,  96 => 33,  83 => 37,  74 => 34,  66 => 217,  55 => 22,  52 => 78,  50 => 44,  43 => 20,  41 => 81,  35 => 19,  32 => 18,  29 => 12,  209 => 96,  203 => 93,  199 => 100,  193 => 50,  189 => 70,  187 => 69,  182 => 85,  176 => 82,  173 => 134,  168 => 62,  164 => 41,  162 => 60,  154 => 40,  149 => 84,  147 => 69,  144 => 68,  141 => 37,  133 => 67,  130 => 33,  125 => 46,  122 => 69,  116 => 45,  112 => 27,  109 => 45,  106 => 46,  103 => 43,  99 => 35,  95 => 41,  92 => 19,  86 => 38,  82 => 28,  80 => 36,  73 => 12,  64 => 30,  60 => 15,  57 => 80,  54 => 174,  51 => 25,  48 => 24,  45 => 23,  42 => 18,  39 => 69,  36 => 68,  33 => 6,  30 => 9,);
    }
}
