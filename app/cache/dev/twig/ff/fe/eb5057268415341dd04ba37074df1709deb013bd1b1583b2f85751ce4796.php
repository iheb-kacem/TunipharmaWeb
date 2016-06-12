<?php

/* MainBundle:Pharmacien:Espace.html.twig */
class __TwigTemplate_fffeeb5057268415341dd04ba37074df1709deb013bd1b1583b2f85751ce4796 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MainBundle::PageLayout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'css' => array($this, 'block_css'),
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
        echo "    Accès pharmacien | TuniPharma
";
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        // line 6
        echo "    Accès pharmacien
";
    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
        // line 9
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/jquery-ui.min.css"), "html", null, true);
        echo "\" rel='stylesheet' />
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/fullcalendar.css"), "html", null, true);
        echo "\" rel='stylesheet' />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/fullcalendar.print.css"), "html", null, true);
        echo "\" rel='stylesheet' media='print' />
";
    }

    // line 13
    public function block_description($context, array $blocks = array())
    {
    }

    // line 15
    public function block_corps($context, array $blocks = array())
    {
        // line 16
        echo "    <div class='row'>
        <div class='col-sm-12'>
            <div class='tabbable'>
                <ul class='nav nav-tabs' id='tab'>
                    <li class='active'>
                        <a data-toggle='tab' href='#tab-content-1'>Pharmacie</a>
                    </li>
                    <li>
                        <a data-toggle='tab' href='#tab-content-2'>Carte</a>
                    </li>
                    ";
        // line 26
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "old")) {
            // line 27
            echo "                    <li>
                        <a data-toggle='tab' href='#tab-content-5'>Services</a>
                    </li>
                    <li>
                        <a data-toggle='tab' href='#tab-content-3'>Horaire de Garde</a>
                    </li>
                    <li>
                        <a data-toggle='tab' href='#tab-content-4'>Blog</a>
                    </li>
                    ";
        }
        // line 37
        echo "                </ul>
                <div class='tab-content' id='tab-content'>
                    <div class='tab-pane fade in active' id='tab-content-1'>
                        ";
        // line 40
        $this->env->loadTemplate("MainBundle:Pharmacien:Pharmacie.html.twig")->display($context);
        // line 41
        echo "                    </div>
                    <div class='tab-pane fade' id='tab-content-2'>
                        ";
        // line 43
        $this->env->loadTemplate("MainBundle:Pharmacien:carte.html.twig")->display($context);
        // line 44
        echo "                    </div>
                    <div class='tab-pane fade' id='tab-content-3'>
                        ";
        // line 46
        $this->env->loadTemplate("MainBundle:Pharmacien:garde.html.twig")->display($context);
        // line 47
        echo "                    </div>
                    <div class='tab-pane fade' id='tab-content-4'>
                        ";
        // line 49
        $this->env->loadTemplate("MainBundle:Pharmacien:blog.html.twig")->display($context);
        // line 50
        echo "                    </div>
                    <div class='tab-pane fade' id='tab-content-5'>
                        ";
        // line 52
        $this->env->loadTemplate("MainBundle:Pharmacien:Service.html.twig")->display($context);
        // line 53
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 61
    public function block_scripts($context, array $blocks = array())
    {
        // line 62
        echo "    <script type=\"text/javascript\"
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyApra_QEBW3-pPoaWIQNmCpY5e0skbX3pQ&sensor=false\">
    </script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/jquery-ui.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>

                function initialize() {

                    var latlng, map, marker, options;
                    latlng = new google.maps.LatLng(";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pharmacie"]) ? $context["pharmacie"] : $this->getContext($context, "pharmacie")), "lat"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pharmacie"]) ? $context["pharmacie"] : $this->getContext($context, "pharmacie")), "log"), "html", null, true);
        echo ");
                    options = {
                        scrollwheel: false,
                        zoom: 16,
                        center: latlng,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        mapTypeControl: true
                    };
                    map = new google.maps.Map(document.getElementById(\"map-canvas\"), options);
                    marker = new google.maps.Marker({
                        position: latlng,
                        draggable: true,
                        animation: google.maps.Animation.DROP,
                        map: map
                    });
                    google.maps.event.addListener(marker, 'dragend', function() {
                        document.getElementById(\"input-lat\").value = marker.getPosition().lat();
                        document.getElementById(\"form_lat\").value = marker.getPosition().lat();
                        document.getElementById(\"input-log\").value = marker.getPosition().lng();
                        document.getElementById(\"form_log\").value = marker.getPosition().lng();
                    });
                }
                function Insert(jour, obj) {
                    \$.ajax({
                        url: '";
        // line 96
        echo $this->env->getExtension('routing')->getPath("_gardes");
        echo "',
                        data: {jour: jour,
                            type: \"create\"},
                        success: function(data) {
                            \$(obj).attr('garde', data);

                        }
                    });
                }
                function Delete(Id, obj) {

                    \$.ajax({
                        url: '";
        // line 108
        echo $this->env->getExtension('routing')->getPath("_gardes");
        echo "',
                        data: {id: Id,
                            type: \"delete\"},
                        success: function(data) {
                            \$(obj).attr('garde', 'false');
                        }
                    });
                }
                function Read() {
                    \$.ajax({
                        url: '";
        // line 118
        echo $this->env->getExtension('routing')->getPath("_gardes");
        echo "',
                        data: {type: \"read\"},
                        success: function(data) {
                            \$.each(data, function(index, val) {
                                var obj = \$(\"td[data-date='\" + val[1] + \"']\");
                                \$(obj).css('background', 'rgb(223, 240, 216)').attr('garde', val[0]);
                            });
                        }
                    });
                }
                \$('[data-toggle=tab][href=#tab-content-2]').click(function() {
                    setTimeout(function() {
                        document.getElementById(\"map-canvas\").innerHTML = \"\";
                        initialize();
                    }, 500);
                });
                \$('[data-toggle=tab][href=#tab-content-3]').click(function() {
                    setTimeout(function() {
                        document.getElementById(\"calendar\").innerHTML = \"\";
                        var date = new Date();
                        var d = date.getDate();
                        var m = date.getMonth();
                        var y = date.getFullYear();

                        var calendar = \$('#calendar').fullCalendar({
                            header: {
                                left: 'prev,next',
                                center: 'title',
                                right: 'today'
                            },
                            selectable: true,
                            selectHelper: true,
                            select: function(start, end, allDay) {
                                var jour = start.getFullYear() + \"-\" + (\"0\" + (start.getMonth() + 1)).slice(-2) + \"-\" + (\"0\" + start.getDate()).slice(-2);
                                var obj = \$(\"td[data-date='\" + jour + \"']\");
                                if (\$(obj).attr('garde') === 'false') {
                                    Insert(jour, obj);
                                    \$(obj).css('background', 'rgb(223, 240, 216)');
                                } else {
                                    Delete(\$(obj).attr('garde'), obj);
                                    \$(obj).css('background', 'rgb(255, 255, 255)')
                                }
                                calendar.fullCalendar('unselect');
                            },
                            editable: true
                        });
                        Read();
                        \$(\"td[class='fc-header-right'\").after().append('<td class=\"fc-header-right\"><span style=\"-moz-user-select: none;\" unselectable=\"on\" class=\"fc-button fc-button-today fc-state-default fc-corner-left fc-corner-right fc-state-disabled\">today</span></td>');
                    }, 500);
                });
                \$('#submit_location').click(function() {
                    \$('#form_pharmacie').submit();
                });
                var gouvernorats = new Array(";
        // line 171
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")));
        foreach ($context['_seq'] as $context["_key"] => $context["vil"]) {
            // line 172
            echo "                        \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vil"]) ? $context["vil"] : $this->getContext($context, "vil")), "gouvernorat"), "html", null, true);
            echo "\",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                        \"\");
                var country_arr = [];
                \$.each(gouvernorats, function(i, el) {
                    if ((\$.inArray(el, country_arr) === -1) && (el !== \"\"))
                        country_arr.push(el);
                });
                var s_a = new Array();
                s_a['0'] = \"\";
                var s_b = new Array();
                s_b['0'] = \"\";
        ";
        // line 183
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")));
        foreach ($context['_seq'] as $context["_key"] => $context["vil"]) {
            // line 184
            echo "            if (s_a['";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vil"]) ? $context["vil"] : $this->getContext($context, "vil")), "gouvernorat"), "html", null, true);
            echo "'] === undefined) {
                s_a['";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vil"]) ? $context["vil"] : $this->getContext($context, "vil")), "gouvernorat"), "html", null, true);
            echo "'] = \"\";
                s_b['";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vil"]) ? $context["vil"] : $this->getContext($context, "vil")), "gouvernorat"), "html", null, true);
            echo "'] = \"\";
            }
            s_a['";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vil"]) ? $context["vil"] : $this->getContext($context, "vil")), "gouvernorat"), "html", null, true);
            echo "'] = s_a['";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vil"]) ? $context["vil"] : $this->getContext($context, "vil")), "gouvernorat"), "html", null, true);
            echo "'] + \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vil"]) ? $context["vil"] : $this->getContext($context, "vil")), "delegation"), "html", null, true);
            echo "|\";
            s_b['";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vil"]) ? $context["vil"] : $this->getContext($context, "vil")), "gouvernorat"), "html", null, true);
            echo "'] = s_b['";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vil"]) ? $context["vil"] : $this->getContext($context, "vil")), "gouvernorat"), "html", null, true);
            echo "'] + \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vil"]) ? $context["vil"] : $this->getContext($context, "vil")), "codepostal"), "html", null, true);
            echo "|\";
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "

            function print_country(country) {
                //given the id of the <select> tag as function argument, it inserts <option> tags
                var option_str = document.getElementById(country);
                option_str.length = 0;
                option_str.options[0] = new Option('Select Country', '0');
                option_str.selectedIndex = 0;
                for (var i = 0; i < country_arr.length; i++) {
                    option_str.options[option_str.length] = new Option(country_arr[i], country_arr[i]);
                }
            }

            function print_state(state, selectedIndex) {
                var option_str = document.getElementById(state);
                option_str.length = 0;    // Fixed by Julian Woods
                option_str.options[0] = new Option('Select State', '');
                option_str.selectedIndex = 0;
                var state_arr = s_a[selectedIndex].split(\"|\");
                var state_code = s_b[selectedIndex].split(\"|\");
                for (var i = 0; i < state_arr.length; i++) {
                    option_str.options[option_str.length] = new Option(state_arr[i], state_code[i]);
                }
            }
            function print_code(code, value) {
                var option_str = document.getElementById(code);
                option_str.value = value;
                option_str = document.getElementById('form_codepostal');
                option_str.value = value;
            }
            print_country(\"gouvernorat\");

    </script>
    <script>
        \$('#tocurrent').click(function() {
            var idservice;
            \$(\"#input-select-dispo option\").each(function() {
                if (\$(this).is(':selected')) {
                    \$('#input-select-current').append('<option value=\"' + (\$(this).val()) + '\">' + (\$(this).text()) + '</option>');
                    \$(this).remove();
                    idservice = \$(this).val();
                }
                \$.ajax({
                    url: '";
        // line 234
        echo $this->env->getExtension('routing')->getPath("_EspacePharmacien_saveus");
        echo "',
                    data: {idservice: idservice,
                            type: 'insert'}
                });
            });

        });

        \$('#todispo').click(function() {
            var idservice;
            \$(\"#input-select-current option\").each(function() {
                if (\$(this).is(':selected')) {
                    \$('#input-select-dispo').append('<option value=\"' + (\$(this).val()) + '\">' + (\$(this).text()) + '</option>');
                    \$(this).remove();
                    idservice = \$(this).val();
                }
                \$.ajax({
                    url: '";
        // line 251
        echo $this->env->getExtension('routing')->getPath("_EspacePharmacien_saveus");
        echo "',
                    data: {idservice: idservice,
                            type: 'delete'}
                });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Pharmacien:Espace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 251,  383 => 234,  338 => 191,  326 => 189,  318 => 188,  313 => 186,  309 => 185,  304 => 184,  300 => 183,  288 => 173,  280 => 172,  276 => 171,  220 => 118,  207 => 108,  192 => 96,  163 => 72,  154 => 66,  150 => 65,  145 => 62,  142 => 61,  132 => 53,  130 => 52,  126 => 50,  124 => 49,  120 => 47,  118 => 46,  114 => 44,  112 => 43,  108 => 41,  106 => 40,  101 => 37,  89 => 27,  87 => 26,  75 => 16,  72 => 15,  67 => 13,  61 => 11,  57 => 10,  52 => 9,  49 => 8,  44 => 6,  41 => 5,  36 => 3,  33 => 2,);
    }
}
