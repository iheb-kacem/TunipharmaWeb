<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_870877aeaaaeed642b3f826faa6703e84b2459e19d36d60dd9efca46961201ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        echo "    ";
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        echo "        ";
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        echo "            ";
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        echo "                ";
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        echo "                    ";
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        echo "                        ";
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        echo "                            ";
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        echo "                                ";
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        echo "                                    ";
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        echo "                                        ";
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        echo "                                            <!DOCTYPE html>
                                            <html ";
        // line 23
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
                                                <head>
                                                    ";
        // line 25
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 29
        echo "
                                                    ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
                                                    ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "
                                                    <title>
                                                        ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

                                                        ";
        // line 59
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"))))) {
            // line 60
            echo "                                                            ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
                                                        ";
        } else {
            // line 62
            echo "                                                            ";
            if (array_key_exists("action", $context)) {
                // line 63
                echo "                                                                -
                                                                ";
                // line 64
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 65
                    echo "                                                                    ";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first"))) {
                        // line 66
                        echo "                                                                        ";
                        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 2)) {
                            // line 67
                            echo "                                                                            &gt;
                                                                        ";
                        }
                        // line 69
                        echo "
                                                                        ";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                        echo "
                                                                    ";
                    }
                    // line 72
                    echo "                                                                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                                                            ";
            }
            // line 74
            echo "                                                        ";
        }
        // line 75
        echo "                                                    </title>
                                                </head>
                                                <body ";
        // line 77
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
                                                    ";
        // line 78
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 160
        echo "
                                                    ";
        // line 161
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 316
        echo "                                                                                                                                                                                </body>
                                                                                                                                                                            </html>
";
    }

    // line 23
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 25
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 26
        echo "                                                        <meta charset=\"UTF-8\">
                                                        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
                                                    ";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 31
        echo "
                                                        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 33
            echo "                                                            <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["stylesheet"]) ? $context["stylesheet"] : $this->getContext($context, "stylesheet"))), "html", null, true);
            echo "\"  />
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
                                                    ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "                                                        <script>
                                                            window.SONATA_CONFIG = {
                                                                CONFIRM_EXIT: ";
        // line 41
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                                                                USE_SELECT2: ";
        // line 42
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                                                                USE_ICHECK: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 44
        echo "                                                            };
                                                            window.SONATA_TRANSLATIONS = {
                                                                CONFIRM_EXIT: '";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                                                            };
                                                        </script>

                                                        ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 51
            echo "                                                            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["javascript"]) ? $context["javascript"] : $this->getContext($context, "javascript"))), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
                                                    ";
    }

    // line 77
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 78
    public function block_sonata_header($context, array $blocks = array())
    {
        // line 79
        echo "                                                        <header class=\"header\">
                                                            ";
        // line 80
        $this->displayBlock('logo', $context, $blocks);
        // line 90
        echo "                                                            ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 158
        echo "                                                        </header>
                                                    ";
    }

    // line 80
    public function block_logo($context, array $blocks = array())
    {
        // line 81
        echo "                                                                <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">
                                                                    ";
        // line 82
        if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 83
            echo "                                                                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "titlelogo")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
            echo "\">";
            if (("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method"))) {
                echo "&nbsp;";
            }
            // line 84
            echo "                                                                    ";
        }
        // line 85
        echo "                                                                    ";
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 86
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
            echo "
                                                                    ";
        }
        // line 88
        echo "                                                                </a>
                                                            ";
    }

    // line 90
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 91
        echo "                                                                ";
        if (array_key_exists("admin_pool", $context)) {
            // line 92
            echo "                                                                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                                                                        <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                                                                            <span class=\"sr-only\">Toggle navigation</span>
                                                                            <span class=\"icon-bar\"></span>
                                                                            <span class=\"icon-bar\"></span>
                                                                            <span class=\"icon-bar\"></span>
                                                                        </a>

                                                                        <div class=\"navbar-left\">
                                                                            ";
            // line 101
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 126
            echo "                                                                        </div>

                                                                        ";
            // line 128
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 155
            echo "                                                                    </nav>
                                                                ";
        }
        // line 157
        echo "                                                            ";
    }

    // line 101
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 102
        echo "                                                                                ";
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) || array_key_exists("action", $context))) {
            // line 103
            echo "                                                                                    <ol class=\"nav navbar-top-links breadcrumb\">
                                                                                        ";
            // line 104
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 105
                echo "                                                                                            ";
                if (array_key_exists("action", $context)) {
                    // line 106
                    echo "                                                                                                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 107
                        echo "                                                                                                    ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                            // line 108
                            echo "                                                                                                        <li>
                                                                                                            ";
                            // line 109
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri")))) {
                                // line 110
                                echo "                                                                                                                <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri"), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label");
                                echo "</a>
                                                                                                            ";
                            } else {
                                // line 112
                                echo "                                                                                                                ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                                echo "
                                                                                                            ";
                            }
                            // line 114
                            echo "                                                                                                        </li>
                                                                                                    ";
                        } else {
                            // line 116
                            echo "                                                                                                        <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                            echo "</span></li>
                                                                                                            ";
                        }
                        // line 118
                        echo "                                                                                                        ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo "                                                                                                    ";
                }
                // line 120
                echo "                                                                                                ";
            } else {
                // line 121
                echo "                                                                                                    ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                                                                                ";
            }
            // line 123
            echo "                                                                                    </ol>
                                                                                ";
        }
        // line 125
        echo "                                                                            ";
    }

    // line 128
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 129
        echo "                                                                            <div class=\"navbar-right\">
                                                                                <ul class=\"nav navbar-nav\">
                                                                                    <li class=\"dropdown\">
                                                                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                                                            <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                                                                        </a>
                                                                                        ";
        // line 135
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"));
        $template->display($context);
        // line 136
        echo "                                                                                    </li>
                                                                                    <li class=\"dropdown user-menu\">
                                                                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                                                            <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                                                                        </a>
                                                                                        <ul class=\"dropdown-menu dropdown-user\">
                                                                                            ";
        // line 142
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"));
        $template->display($context);
        // line 143
        echo "                                                                                            <li role=\"presentation\" class=\"dropdown-header\"></li>
                                                                                            <li role=\"presentation\">
                                                                                                <a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "\">Accueil</a>
                                                                                            </li>
                                                                                            <li role=\"presentation\">
                                                                                                <a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Déconnexion</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        ";
    }

    // line 161
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 162
        echo "                                                        <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                                                            ";
        // line 163
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 235
        echo "
                                                                                                                                                                                    <aside class=\"right-side\">
                                                                                                                                                                                        ";
        // line 237
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 312
        echo "                                                                                                                                                                                    </aside>

                                                                                                                                                                                </div>
                                                                                                                                                                                ";
    }

    // line 163
    public function block_sonata_left_side($context, array $blocks = array())
    {
        // line 164
        echo "                                                                <aside class=\"left-side sidebar-offcanvas\">
                                                                    <section class=\"sidebar\">
                                                                        ";
        // line 166
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 232
        echo "                                                                                                                                                                                    </section>
                                                                                                                                                                                </aside>
                                                                                                                                                                                ";
    }

    // line 166
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 167
        echo "                                                                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 181
        echo "
                                                                            ";
        // line 182
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 183
        echo "                                                                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 228
        echo "                                                                                                                                                                                    ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 231
        echo "                                                                                                                                                                                    ";
    }

    // line 167
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 168
        echo "                                                                                ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 169
            echo "                                                                                    <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                                                                        <div class=\"input-group custom-search-form\">
                                                                                            <input type=\"text\" name=\"q\" value=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                                                            <span class=\"input-group-btn\">
                                                                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                                                                    <i class=\"fa fa-search\"></i>
                                                                                                </button>
                                                                                            </span>
                                                                                        </div>
                                                                                    </form>
                                                                                ";
        }
        // line 180
        echo "                                                                            ";
    }

    // line 182
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 183
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 184
        echo "                                                                                ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 185
            echo "                                                                                    <ul class=\"sidebar-menu\">
                                                                                        ";
            // line 186
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 187
                echo "                                                                                            ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 188
                echo "                                                                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 189
                        echo "                                                                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                        // line 190
                        echo "                                                                                                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "
                                                                                                            ";
                // line 193
                echo "                                                                                                            ";
                $context["item_count"] = 0;
                // line 194
                echo "                                                                                                                ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 195
                    echo "                                                                                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 196
                            echo "                                                                                                                        ";
                            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 197
                                echo "                                                                                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 198
                                echo "                                                                                                                                ";
                            }
                            // line 199
                            echo "                                                                                                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 200
                    echo "                                                                                                                                        ";
                }
                // line 201
                echo "
                                                                                                                                            ";
                // line 202
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 203
                    echo "                                                                                                                                                <li class=\"treeview\">
                                                                                                                                                    <a href=\"#\">
                                                                                                                                                        ";
                    // line 205
                    if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon"))) : (""))) {
                        echo $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "icon");
                    }
                    // line 206
                    echo "                                                                                                                                                        <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                    echo "</span>
                                                                                                                                                        <i class=\"fa pull-right fa-angle-left\"></i>
                                                                                                                                                    </a>
                                                                                                                                                    ";
                    // line 209
                    $context["active"] = false;
                    // line 210
                    echo "                                                                                                                                                        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 211
                        echo "                                                                                                                                                            ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code")))) {
                            // line 212
                            echo "                                                                                                                                                                ";
                            $context["active"] = true;
                            // line 213
                            echo "                                                                                                                                                                    ";
                        }
                        // line 214
                        echo "                                                                                                                                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 215
                    echo "                                                                                                                                                                            <ul class=\"treeview-menu";
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                                                                                                                                                ";
                    // line 216
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 217
                        echo "                                                                                                                                                                                    ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 218
                            echo "                                                                                                                                                                                        <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code"))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                                                                                                                                                        ";
                        }
                        // line 220
                        echo "                                                                                                                                                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 221
                    echo "                                                                                                                                                                            </ul>
                                                                                                                                                                        </li>
                                                                                                                                                                        ";
                }
                // line 224
                echo "                                                                                                                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                                                                                                                                                                            </ul>
                                                                                                                                                                            ";
        }
        // line 227
        echo "                                                                                                                                                                                ";
    }

    // line 228
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        // line 229
        echo "                                                                                                                                                                                        <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a></p>
                                                                                                                                                                                    ";
    }

    // line 237
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 238
        echo "                                                                                                                                                                                            <section class=\"content-header\">
                                                                                                                                                                                                ";
        // line 239
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 271
        echo "                                                                                                                                                                                            </section>

                                                                                                                                                                                            <section class=\"content\">
                                                                                                                                                                                                ";
        // line 274
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 310
        echo "                                                                                                                                                                                            </section>
                                                                                                                                                                                        ";
    }

    // line 239
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 240
        echo "                                                                                                                                                                                                    ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 269
        echo "
                                                                                                                                                                                                ";
    }

    // line 240
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 241
        echo "                                                                                                                                                                                                        ";
        if (((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) || (!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))))) {
            // line 242
            echo "                                                                                                                                                                                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                                                                                                                                                                                        ";
            // line 243
            if ((!twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"))))) {
                // line 244
                echo "                                                                                                                                                                                                        <div class=\"navbar-header\">
                                                                                                                                                                                                        <span class=\"navbar-brand\">";
                // line 245
                echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
                echo "</span>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        ";
            }
            // line 248
            echo "                                                                                                                                                                                                        <div class=\"container-fluid\">
                                                                                                                                                                                                        <div class=\"navbar-left\">
                                                                                                                                                                                                        ";
            // line 250
            if ((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))))) {
                // line 251
                echo "                                                                                                                                                                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                                                                                                                                                                        ";
            }
            // line 253
            echo "                                                                                                                                                                                                        </div>

                                                                                                                                                                                                        ";
            // line 255
            if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
                // line 256
                echo "                                                                                                                                                                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                                                                                                                                                                        <li class=\"dropdown sonata-actions\">
                                                                                                                                                                                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Actions <b class=\"caret\"></b></a>
                                                                                                                                                                                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                                                                                                                                                                                        ";
                // line 260
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                                                                                                                                                        </ul>
                                                                                                                                                                                                        </li>
                                                                                                                                                                                                        </ul>
                                                                                                                                                                                                        ";
            }
            // line 265
            echo "                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        </nav>
                                                                                                                                                                                                        ";
        }
        // line 268
        echo "                                                                                                                                                                                                    ";
    }

    // line 274
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 275
        echo "
                                                                                                                                                                                                    ";
        // line 276
        $this->displayBlock('notice', $context, $blocks);
        // line 279
        echo "
                                                                                                                                                                                                    ";
        // line 280
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"))))) {
            // line 281
            echo "                                                                                                                                                                                                        <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                                                                                                                                                                                                    ";
        }
        // line 283
        echo "
                                                                                                                                                                                                    ";
        // line 284
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"))))) {
            // line 285
            echo "                                                                                                                                                                                                        <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                                                                                                                                                                                                    ";
        }
        // line 287
        echo "
                                                                                                                                                                                                    ";
        // line 288
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"))))) {
            // line 289
            echo "                                                                                                                                                                                                        <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                                                                                                                                                                                                    ";
        }
        // line 291
        echo "
                                                                                                                                                                                                    ";
        // line 292
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"))))) {
            // line 293
            echo "                                                                                                                                                                                                        <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                                                                                                                                                                                                    ";
        }
        // line 295
        echo "
                                                                                                                                                                                                    ";
        // line 296
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table")))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))))) {
            // line 297
            echo "                                                                                                                                                                                                        <div class=\"row\">
                                                                                                                                                                                                        <div class=\"sonata-ba-list ";
            // line 298
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                                                                                                                                                                                        ";
            // line 299
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                                                                                                                                                                                        </div>

                                                                                                                                                                                                        ";
            // line 302
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 303
                echo "                                                                                                                                                                                                        <div class=\"sonata-ba-filter col-md-2\">
                                                                                                                                                                                                        ";
                // line 304
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        ";
            }
            // line 307
            echo "                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    ";
        }
        // line 309
        echo "                                                                                                                                                                                                ";
    }

    // line 276
    public function block_notice($context, array $blocks = array())
    {
        // line 277
        echo "                                                                                                                                                                                                        ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 278
        echo "                                                                                                                                                                                                    ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  975 => 278,  972 => 277,  969 => 276,  965 => 309,  961 => 307,  955 => 304,  952 => 303,  950 => 302,  944 => 299,  936 => 298,  933 => 297,  931 => 296,  928 => 295,  922 => 293,  920 => 292,  917 => 291,  911 => 289,  909 => 288,  906 => 287,  900 => 285,  898 => 284,  895 => 283,  889 => 281,  887 => 280,  884 => 279,  882 => 276,  879 => 275,  876 => 274,  872 => 268,  867 => 265,  859 => 260,  853 => 256,  851 => 255,  847 => 253,  841 => 251,  839 => 250,  835 => 248,  829 => 245,  826 => 244,  824 => 243,  821 => 242,  818 => 241,  815 => 240,  810 => 269,  807 => 240,  804 => 239,  799 => 310,  797 => 274,  792 => 271,  790 => 239,  787 => 238,  784 => 237,  779 => 229,  776 => 228,  772 => 227,  768 => 225,  762 => 224,  757 => 221,  751 => 220,  739 => 218,  736 => 217,  732 => 216,  725 => 215,  719 => 214,  716 => 213,  713 => 212,  710 => 211,  705 => 210,  703 => 209,  696 => 206,  692 => 205,  688 => 203,  686 => 202,  683 => 201,  680 => 200,  673 => 199,  670 => 198,  667 => 197,  664 => 196,  658 => 195,  655 => 194,  652 => 193,  649 => 191,  642 => 190,  639 => 189,  633 => 188,  630 => 187,  626 => 186,  623 => 185,  620 => 184,  617 => 183,  611 => 182,  607 => 180,  593 => 171,  587 => 169,  584 => 168,  581 => 167,  577 => 231,  574 => 228,  571 => 183,  569 => 182,  566 => 181,  563 => 167,  560 => 166,  554 => 232,  552 => 166,  548 => 164,  545 => 163,  538 => 312,  536 => 237,  532 => 235,  530 => 163,  527 => 162,  524 => 161,  513 => 148,  507 => 145,  503 => 143,  500 => 142,  492 => 136,  489 => 135,  481 => 129,  478 => 128,  474 => 125,  470 => 123,  464 => 121,  461 => 120,  458 => 119,  444 => 118,  438 => 116,  434 => 114,  428 => 112,  420 => 110,  418 => 109,  415 => 108,  412 => 107,  394 => 106,  391 => 105,  389 => 104,  386 => 103,  383 => 102,  380 => 101,  376 => 157,  372 => 155,  370 => 128,  366 => 126,  364 => 101,  353 => 92,  350 => 91,  347 => 90,  342 => 88,  336 => 86,  333 => 85,  330 => 84,  321 => 83,  319 => 82,  314 => 81,  311 => 80,  306 => 158,  303 => 90,  301 => 80,  298 => 79,  295 => 78,  289 => 77,  284 => 53,  275 => 51,  271 => 50,  264 => 46,  260 => 44,  254 => 43,  246 => 42,  238 => 41,  234 => 39,  231 => 38,  226 => 35,  217 => 33,  213 => 32,  210 => 31,  207 => 30,  201 => 26,  198 => 25,  192 => 23,  186 => 316,  184 => 161,  181 => 160,  179 => 78,  175 => 77,  168 => 74,  165 => 73,  151 => 72,  146 => 70,  143 => 69,  139 => 67,  110 => 62,  104 => 60,  102 => 59,  97 => 57,  93 => 55,  91 => 38,  88 => 37,  76 => 23,  70 => 21,  67 => 20,  61 => 18,  58 => 17,  49 => 14,  46 => 13,  43 => 12,  41 => 11,  194 => 66,  189 => 63,  185 => 61,  176 => 58,  171 => 75,  167 => 56,  164 => 55,  162 => 54,  157 => 51,  148 => 49,  144 => 48,  136 => 66,  133 => 65,  129 => 44,  120 => 42,  116 => 64,  113 => 63,  111 => 39,  107 => 37,  98 => 35,  94 => 34,  86 => 30,  83 => 29,  81 => 25,  77 => 29,  73 => 22,  64 => 19,  59 => 23,  55 => 16,  52 => 15,  50 => 20,  45 => 18,  42 => 17,  39 => 16,  34 => 15,  28 => 14,);
    }
}
