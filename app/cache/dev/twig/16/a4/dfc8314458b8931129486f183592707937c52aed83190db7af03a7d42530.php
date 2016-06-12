<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_16a4dfc8314458b8931129486f183592707937c52aed83190db7af03a7d42530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name") == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")))), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")), "method"))) {
            // line 19
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "editable")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
            // line 24
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"));
            // line 25
            echo "
        ";
            // line 26
            if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
                // line 27
                echo "            ";
                $context["url"] = $this->env->getExtension('routing')->getPath("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")));
                // line 28
                echo "            <span ";
                $this->displayBlock('field_span_attributes', $context, $blocks);
                echo ">
                ";
                // line 29
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 32
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 34
            echo "    ";
        }
        // line 35
        echo "</td>
";
    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
    }

    // line 28
    public function block_field_span_attributes($context, array $blocks = array())
    {
        echo "class=\"x-editable\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label"), array(), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain")), "html", null, true);
        echo "\" data-pk=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 89,  12 => 36,  975 => 278,  972 => 277,  969 => 276,  965 => 309,  944 => 299,  933 => 297,  928 => 295,  922 => 293,  917 => 291,  911 => 289,  909 => 288,  906 => 287,  898 => 284,  895 => 283,  887 => 280,  884 => 279,  882 => 276,  879 => 275,  872 => 268,  867 => 265,  859 => 260,  853 => 256,  851 => 255,  847 => 253,  839 => 250,  835 => 248,  829 => 245,  826 => 244,  824 => 243,  821 => 242,  818 => 241,  815 => 240,  810 => 269,  807 => 240,  804 => 239,  799 => 310,  797 => 274,  792 => 271,  790 => 239,  787 => 238,  784 => 237,  779 => 229,  776 => 228,  762 => 224,  757 => 221,  736 => 217,  732 => 216,  716 => 213,  713 => 212,  705 => 210,  703 => 209,  688 => 203,  686 => 202,  673 => 199,  670 => 198,  667 => 197,  655 => 194,  642 => 190,  639 => 189,  633 => 188,  630 => 187,  626 => 186,  623 => 185,  620 => 184,  611 => 182,  587 => 169,  574 => 228,  571 => 183,  560 => 166,  552 => 166,  545 => 163,  538 => 312,  532 => 235,  530 => 163,  492 => 136,  458 => 119,  438 => 116,  418 => 109,  415 => 108,  412 => 107,  380 => 101,  370 => 128,  364 => 101,  336 => 86,  330 => 103,  234 => 39,  692 => 205,  676 => 385,  656 => 378,  645 => 369,  631 => 364,  625 => 361,  615 => 354,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 231,  575 => 328,  569 => 182,  565 => 324,  540 => 308,  510 => 293,  500 => 142,  495 => 289,  486 => 286,  482 => 285,  452 => 268,  339 => 191,  324 => 179,  244 => 140,  226 => 35,  152 => 62,  551 => 184,  546 => 182,  543 => 181,  541 => 180,  537 => 178,  531 => 175,  525 => 172,  520 => 170,  516 => 294,  513 => 148,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  489 => 135,  479 => 153,  475 => 152,  448 => 139,  443 => 137,  424 => 128,  421 => 244,  399 => 116,  386 => 103,  375 => 106,  372 => 155,  354 => 102,  310 => 171,  302 => 168,  292 => 91,  155 => 53,  320 => 122,  317 => 121,  284 => 53,  275 => 86,  256 => 79,  237 => 71,  232 => 84,  188 => 48,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 307,  958 => 253,  955 => 304,  952 => 303,  950 => 302,  947 => 249,  939 => 243,  936 => 298,  934 => 241,  931 => 296,  923 => 236,  920 => 292,  918 => 234,  915 => 233,  903 => 229,  900 => 285,  897 => 227,  894 => 226,  892 => 225,  889 => 281,  881 => 220,  878 => 219,  876 => 274,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 251,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  772 => 227,  769 => 171,  767 => 170,  764 => 169,  751 => 220,  749 => 162,  746 => 161,  739 => 218,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 211,  707 => 148,  699 => 142,  697 => 141,  696 => 206,  695 => 139,  694 => 138,  689 => 137,  683 => 201,  680 => 200,  678 => 390,  675 => 132,  666 => 382,  662 => 125,  654 => 123,  649 => 191,  643 => 120,  640 => 119,  638 => 118,  635 => 365,  619 => 113,  617 => 183,  614 => 111,  596 => 106,  593 => 171,  576 => 101,  564 => 99,  557 => 96,  555 => 317,  550 => 94,  547 => 93,  527 => 162,  524 => 161,  515 => 85,  503 => 143,  496 => 161,  493 => 78,  490 => 287,  470 => 123,  464 => 121,  459 => 273,  442 => 62,  433 => 60,  426 => 58,  414 => 122,  408 => 119,  405 => 49,  400 => 233,  390 => 43,  350 => 91,  344 => 193,  342 => 88,  316 => 16,  290 => 90,  266 => 366,  263 => 365,  222 => 66,  194 => 52,  184 => 48,  786 => 238,  780 => 176,  777 => 234,  775 => 233,  771 => 231,  768 => 225,  756 => 165,  753 => 164,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 215,  722 => 219,  719 => 214,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 196,  661 => 380,  658 => 195,  652 => 193,  648 => 198,  646 => 197,  641 => 368,  624 => 194,  607 => 180,  603 => 192,  598 => 107,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 168,  581 => 167,  572 => 180,  568 => 178,  566 => 181,  563 => 167,  561 => 175,  558 => 174,  554 => 232,  548 => 164,  542 => 149,  539 => 148,  536 => 237,  529 => 299,  523 => 167,  521 => 166,  518 => 165,  512 => 84,  509 => 83,  507 => 145,  504 => 292,  501 => 80,  483 => 154,  481 => 129,  478 => 128,  476 => 147,  467 => 72,  462 => 146,  456 => 68,  450 => 64,  447 => 137,  441 => 136,  428 => 112,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  404 => 125,  401 => 124,  388 => 112,  382 => 115,  376 => 157,  366 => 126,  363 => 32,  359 => 107,  356 => 105,  348 => 100,  346 => 99,  335 => 21,  332 => 20,  325 => 93,  306 => 95,  303 => 94,  291 => 84,  286 => 82,  267 => 74,  250 => 93,  321 => 100,  295 => 78,  274 => 135,  242 => 113,  153 => 56,  104 => 34,  358 => 139,  351 => 102,  347 => 90,  343 => 132,  327 => 102,  323 => 125,  319 => 82,  315 => 98,  301 => 80,  299 => 83,  293 => 109,  289 => 77,  281 => 105,  277 => 78,  271 => 50,  260 => 44,  251 => 101,  239 => 97,  213 => 32,  197 => 119,  148 => 49,  270 => 84,  253 => 78,  206 => 57,  198 => 25,  137 => 29,  129 => 25,  84 => 34,  77 => 34,  113 => 39,  81 => 20,  20 => 11,  65 => 30,  97 => 41,  371 => 35,  367 => 259,  331 => 226,  311 => 80,  308 => 88,  272 => 134,  225 => 67,  212 => 279,  90 => 24,  383 => 102,  338 => 99,  326 => 189,  318 => 188,  313 => 90,  304 => 184,  300 => 93,  288 => 107,  280 => 87,  276 => 395,  192 => 23,  126 => 24,  124 => 25,  118 => 46,  114 => 50,  134 => 28,  23 => 12,  296 => 167,  282 => 161,  279 => 104,  228 => 68,  202 => 55,  190 => 49,  185 => 61,  181 => 160,  146 => 70,  165 => 73,  178 => 46,  174 => 42,  53 => 27,  262 => 81,  259 => 149,  245 => 335,  236 => 109,  233 => 304,  231 => 69,  223 => 106,  211 => 81,  195 => 51,  161 => 71,  218 => 123,  215 => 126,  210 => 31,  200 => 54,  186 => 316,  175 => 45,  172 => 46,  167 => 56,  100 => 57,  76 => 35,  434 => 114,  420 => 110,  417 => 243,  410 => 127,  406 => 10,  403 => 117,  394 => 106,  391 => 105,  389 => 104,  385 => 225,  377 => 37,  373 => 215,  369 => 111,  361 => 207,  357 => 211,  353 => 92,  349 => 209,  345 => 208,  333 => 85,  329 => 96,  265 => 99,  257 => 103,  255 => 74,  248 => 336,  216 => 100,  207 => 30,  191 => 69,  180 => 62,  170 => 74,  160 => 40,  150 => 34,  127 => 76,  110 => 63,  70 => 21,  58 => 25,  34 => 17,  480 => 75,  474 => 125,  469 => 158,  461 => 120,  457 => 153,  453 => 139,  444 => 118,  440 => 148,  437 => 134,  435 => 146,  430 => 255,  427 => 129,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 217,  368 => 103,  365 => 141,  362 => 110,  360 => 109,  355 => 27,  341 => 131,  337 => 22,  322 => 101,  314 => 81,  312 => 97,  309 => 117,  305 => 87,  298 => 79,  294 => 85,  285 => 3,  283 => 138,  278 => 160,  268 => 373,  264 => 82,  258 => 354,  252 => 38,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 43,  169 => 57,  140 => 52,  132 => 57,  128 => 47,  107 => 48,  61 => 29,  273 => 85,  269 => 100,  254 => 43,  243 => 73,  240 => 72,  238 => 41,  235 => 311,  230 => 303,  227 => 301,  224 => 79,  221 => 67,  219 => 101,  217 => 64,  208 => 124,  204 => 66,  179 => 78,  159 => 70,  143 => 69,  135 => 81,  119 => 108,  102 => 43,  71 => 32,  67 => 32,  63 => 20,  59 => 13,  87 => 28,  201 => 26,  196 => 52,  183 => 46,  171 => 44,  166 => 100,  163 => 45,  158 => 75,  156 => 38,  151 => 72,  142 => 30,  138 => 49,  136 => 66,  121 => 52,  117 => 45,  105 => 44,  91 => 39,  62 => 14,  49 => 23,  94 => 40,  89 => 42,  85 => 32,  75 => 31,  68 => 24,  56 => 28,  38 => 21,  25 => 12,  21 => 11,  28 => 22,  24 => 12,  31 => 23,  26 => 14,  19 => 11,  93 => 55,  88 => 38,  78 => 19,  46 => 22,  44 => 21,  27 => 16,  79 => 31,  72 => 30,  69 => 31,  47 => 25,  40 => 19,  37 => 24,  22 => 12,  246 => 42,  157 => 37,  145 => 60,  139 => 67,  131 => 48,  123 => 47,  120 => 46,  115 => 45,  111 => 43,  108 => 45,  101 => 46,  98 => 31,  96 => 44,  83 => 36,  74 => 33,  66 => 30,  55 => 12,  52 => 20,  50 => 25,  43 => 21,  41 => 23,  35 => 20,  32 => 19,  29 => 15,  209 => 58,  203 => 55,  199 => 265,  193 => 51,  189 => 63,  187 => 69,  182 => 80,  176 => 58,  173 => 134,  168 => 43,  164 => 55,  162 => 41,  154 => 36,  149 => 62,  147 => 52,  144 => 48,  141 => 58,  133 => 65,  130 => 57,  125 => 46,  122 => 45,  116 => 107,  112 => 105,  109 => 46,  106 => 104,  103 => 38,  99 => 42,  95 => 28,  92 => 27,  86 => 37,  82 => 38,  80 => 35,  73 => 34,  64 => 27,  60 => 28,  57 => 18,  54 => 25,  51 => 26,  48 => 25,  45 => 24,  42 => 23,  39 => 25,  36 => 20,  33 => 16,  30 => 13,);
    }
}
