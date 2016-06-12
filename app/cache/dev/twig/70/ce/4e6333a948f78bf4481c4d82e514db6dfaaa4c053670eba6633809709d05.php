<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_70ce4e6333a948f78bf4481c4d82e514db6dfaaa4c053670eba6633809709d05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
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

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        ";
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                    // line 18
                    echo "            ";
                    $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                    // line 19
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
        ";
            // line 21
            if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                // line 22
                echo "            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                echo "</h3>
                </div>
                <div class=\"box-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            ";
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 30
                    echo "                                ";
                    if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")))) {
                        // line 31
                        echo "                                            <tr>
                                                <td class=\"sonata-ba-list-label\" width=\"40%\">
                                                    ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                        echo "
                                                </td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        ";
                        // line 37
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
                            // line 38
                            echo "                                                            ";
                            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                                // line 39
                                echo "                                                                <a class=\"btn btn-link btn-flat\" href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                                echo "\">
                                                                    <i class=\"fa fa-plus-circle\"></i>
                                                                    ";
                                // line 41
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 42
                                echo "                                                                </a>
                                                            ";
                            } else {
                                // line 44
                                echo "                                                                <a class=\"btn btn-link btn-flat dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                                    <i class=\"fa fa-plus-circle\"></i>
                                                                    ";
                                // line 46
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 47
                                echo "                                                                    <span class=\"caret\"></span>
                                                                </a>
                                                                <ul class=\"dropdown-menu\">
                                                                    ";
                                // line 50
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                    // line 51
                                    echo "                                                                        <li>
                                                                            <a href=\"";
                                    // line 52
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), "html", null, true);
                                    echo "</a>
                                                                        </li>
                                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 55
                                echo "                                                                </ul>
                                                            ";
                            }
                            // line 57
                            echo "                                                        ";
                        }
                        // line 58
                        echo "                                                        ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 59
                            echo "                                                            <a class=\"btn btn-link btn-flat\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">
                                                                <i class=\"glyphicon glyphicon-list\"></i>
                                                                ";
                            // line 61
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                            // line 62
                            echo "</a>
                                                        ";
                        }
                        // line 64
                        echo "                                                    </div>
                                                </td>
                                            </tr>
                                ";
                    }
                    // line 68
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                        </tbody>
                    </table>
                </div>
            </div>
        ";
            }
            // line 74
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 64,  152 => 62,  150 => 61,  141 => 58,  138 => 57,  134 => 55,  123 => 52,  109 => 46,  105 => 44,  101 => 42,  99 => 41,  90 => 38,  74 => 30,  62 => 24,  56 => 21,  53 => 20,  37 => 17,  29 => 15,  26 => 14,  975 => 278,  972 => 277,  969 => 276,  965 => 309,  961 => 307,  955 => 304,  952 => 303,  950 => 302,  944 => 299,  936 => 298,  933 => 297,  931 => 296,  928 => 295,  922 => 293,  920 => 292,  917 => 291,  911 => 289,  909 => 288,  906 => 287,  900 => 285,  898 => 284,  895 => 283,  889 => 281,  887 => 280,  884 => 279,  882 => 276,  879 => 275,  876 => 274,  872 => 268,  867 => 265,  859 => 260,  853 => 256,  851 => 255,  847 => 253,  841 => 251,  839 => 250,  835 => 248,  829 => 245,  826 => 244,  824 => 243,  821 => 242,  818 => 241,  815 => 240,  810 => 269,  807 => 240,  804 => 239,  799 => 310,  797 => 274,  792 => 271,  790 => 239,  787 => 238,  784 => 237,  779 => 229,  776 => 228,  772 => 227,  768 => 225,  762 => 224,  757 => 221,  751 => 220,  739 => 218,  736 => 217,  732 => 216,  725 => 215,  719 => 214,  716 => 213,  713 => 212,  710 => 211,  705 => 210,  703 => 209,  696 => 206,  692 => 205,  688 => 203,  686 => 202,  683 => 201,  680 => 200,  673 => 199,  670 => 198,  667 => 197,  664 => 196,  658 => 195,  655 => 194,  652 => 193,  649 => 191,  642 => 190,  639 => 189,  633 => 188,  630 => 187,  626 => 186,  623 => 185,  620 => 184,  617 => 183,  611 => 182,  607 => 180,  593 => 171,  587 => 169,  584 => 168,  581 => 167,  577 => 231,  574 => 228,  571 => 183,  569 => 182,  566 => 181,  563 => 167,  560 => 166,  554 => 232,  552 => 166,  548 => 164,  545 => 163,  538 => 312,  536 => 237,  532 => 235,  530 => 163,  527 => 162,  524 => 161,  513 => 148,  507 => 145,  503 => 143,  500 => 142,  492 => 136,  489 => 135,  481 => 129,  478 => 128,  474 => 125,  470 => 123,  464 => 121,  461 => 120,  458 => 119,  444 => 118,  438 => 116,  434 => 114,  428 => 112,  420 => 110,  418 => 109,  415 => 108,  412 => 107,  394 => 106,  391 => 105,  389 => 104,  386 => 103,  383 => 102,  380 => 101,  376 => 157,  372 => 155,  370 => 128,  366 => 126,  364 => 101,  353 => 92,  350 => 91,  347 => 90,  342 => 88,  336 => 86,  333 => 85,  330 => 84,  321 => 83,  319 => 82,  314 => 81,  311 => 80,  306 => 158,  303 => 90,  301 => 80,  298 => 79,  295 => 78,  289 => 77,  284 => 53,  275 => 51,  271 => 50,  264 => 46,  260 => 44,  254 => 43,  246 => 42,  238 => 41,  234 => 39,  231 => 38,  226 => 35,  217 => 33,  213 => 32,  210 => 31,  207 => 30,  201 => 26,  198 => 25,  192 => 23,  186 => 316,  184 => 161,  181 => 160,  179 => 78,  175 => 74,  168 => 69,  165 => 73,  151 => 72,  146 => 70,  143 => 69,  139 => 67,  110 => 62,  104 => 60,  102 => 59,  97 => 57,  93 => 39,  91 => 38,  88 => 37,  76 => 23,  70 => 29,  67 => 20,  61 => 18,  58 => 22,  49 => 14,  46 => 19,  43 => 18,  41 => 11,  194 => 66,  189 => 63,  185 => 61,  176 => 58,  171 => 75,  167 => 56,  164 => 55,  162 => 68,  157 => 51,  148 => 49,  144 => 59,  136 => 66,  133 => 65,  129 => 44,  120 => 51,  116 => 50,  113 => 63,  111 => 47,  107 => 37,  98 => 35,  94 => 34,  86 => 30,  83 => 29,  81 => 33,  77 => 31,  73 => 22,  64 => 19,  59 => 23,  55 => 16,  52 => 15,  50 => 20,  45 => 18,  42 => 17,  39 => 16,  34 => 16,  28 => 14,);
    }
}
