<?php

/* /var/www/html/install-master/themes/rainlab-relax/partials/footer.htm */
class __TwigTemplate_eb90e67c72c9f8966d0e8ffad8a40c74c2a8271d3e18cc2d9df695a3bcff4bdf extends Twig_Template
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
        // line 1
        echo "<div class=\"container\">

    <div class=\"row\" id=\"footerSliceMenu\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["footerMenu"] ?? null), "menuItems", array())) {
            // line 5
            echo "            <ul class=\"menu-links\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["footerMenu"] ?? null), "menuItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "                    <li class=\"head-link ";
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isActive", array())) ? ("active") : (""));
                echo "\">
                        <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
                echo "</a>
                    </li>
                    ";
                // line 10
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    // line 11
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["childItem"]) {
                        // line 12
                        echo "                            <li class=\"";
                        echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["childItem"], "isActive", array())) ? ("active") : (""));
                        echo "\">
                                <a href=\"";
                        // line 13
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["childItem"], "url", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["childItem"], "title", array()), "html", null, true);
                        echo "</a>
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "                    ";
                }
                // line 17
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            </ul>
        ";
        }
        // line 20
        echo "
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <div class=\"contact-details\">
                <ul>
                    <li class=\"head-link\">
                        <a href=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Contact</a>
                    </li>
                </ul>
                ";
        // line 37
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/details"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 38
        echo "            </div>
        </div>
    </div>

    <div class=\"credit text-right\">
        <p>
            &copy; Copyright ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Your Company - Powered by
            <i class=\"icon-leaf\"></i> <a href=\"http://octobercms.com\" target=\"_blank\">OctoberCMS</a>
        </p>
    </div>
</div>

";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 52
        echo "<script>
    jQuery(document).ready(function(\$){
        var \$container = \$('#footerSliceMenu'),
            \$links = \$('.menu-links li', \$container),
            \$slices = \$('.menu-slice', \$container),
            totalLinks = \$links.length,
            totalSlices = \$slices.length,
            perSlice = Math.ceil(totalLinks / totalSlices),
            activeSlice = 1,
            count = 0

            \$.each(\$links, function(){
                \$(this).appendTo(\$slices.eq(activeSlice - 1))

                if (++count == perSlice) {
                    count = 0
                    activeSlice++
                }
            })

            \$('.menu-links', \$container).remove()
    })
</script>
";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/install-master/themes/rainlab-relax/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 51,  126 => 52,  124 => 51,  115 => 44,  107 => 38,  103 => 37,  97 => 34,  81 => 20,  77 => 18,  71 => 17,  68 => 16,  57 => 13,  52 => 12,  47 => 11,  45 => 10,  38 => 8,  33 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">

    <div class=\"row\" id=\"footerSliceMenu\">
        {% if footerMenu.menuItems %}
            <ul class=\"menu-links\">
                {% for item in footerMenu.menuItems %}
                    <li class=\"head-link {{ item.isActive ? 'active' : '' }}\">
                        <a href=\"{{ item.url }}\">{{ item.title }}</a>
                    </li>
                    {% if item.items %}
                        {% for childItem in item.items %}
                            <li class=\"{{ childItem.isActive ? 'active' : '' }}\">
                                <a href=\"{{ childItem.url }}\">{{ childItem.title }}</a>
                            </li>
                        {% endfor %}
                    {% endif %}
                {% endfor %}
            </ul>
        {% endif %}

        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <div class=\"contact-details\">
                <ul>
                    <li class=\"head-link\">
                        <a href=\"{{ 'contact'|page }}\">Contact</a>
                    </li>
                </ul>
                {% content 'contact/details' %}
            </div>
        </div>
    </div>

    <div class=\"credit text-right\">
        <p>
            &copy; Copyright {{ \"now\"|date(\"Y\") }} Your Company - Powered by
            <i class=\"icon-leaf\"></i> <a href=\"http://octobercms.com\" target=\"_blank\">OctoberCMS</a>
        </p>
    </div>
</div>

{# This script splits the footer menu in to 3 columns #}
{% put scripts %}
<script>
    jQuery(document).ready(function(\$){
        var \$container = \$('#footerSliceMenu'),
            \$links = \$('.menu-links li', \$container),
            \$slices = \$('.menu-slice', \$container),
            totalLinks = \$links.length,
            totalSlices = \$slices.length,
            perSlice = Math.ceil(totalLinks / totalSlices),
            activeSlice = 1,
            count = 0

            \$.each(\$links, function(){
                \$(this).appendTo(\$slices.eq(activeSlice - 1))

                if (++count == perSlice) {
                    count = 0
                    activeSlice++
                }
            })

            \$('.menu-links', \$container).remove()
    })
</script>
{% endput %}", "/var/www/html/install-master/themes/rainlab-relax/partials/footer.htm", "");
    }
}
