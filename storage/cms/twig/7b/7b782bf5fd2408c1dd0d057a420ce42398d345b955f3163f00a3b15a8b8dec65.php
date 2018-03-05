<?php

/* /var/www/html/install-master/themes/rainlab-relax/partials/sidemenu.htm */
class __TwigTemplate_2d6c7f550255a705ab6ec6d760fa2c1cf7ea42202c26a0dfb27a6dd1248c7d8e extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["parentOrSelf"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "parent", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "parent", array())) : (($context["page"] ?? null)));
        // line 4
        $context["childPages"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["parentOrSelf"] ?? null), "children", array());
        // line 5
        echo "
<ul>
    <li class=\"head-link ";
        // line 7
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "url", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["parentOrSelf"] ?? null), "url", array()))) ? ("active") : (""));
        echo "\">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('System\Twig\Extension')->appFilter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["parentOrSelf"] ?? null), "url", array()));
        echo "\">
            ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["parentOrSelf"] ?? null), "title", array()), "html", null, true);
        echo "
        </a>
    </li>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["childPage"]) {
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["childPage"], "navigation_hidden", array())) {
                // line 13
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "url", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["childPage"], "url", array()))) ? ("active") : (""));
                echo "\">
            <a href=\"";
                // line 14
                echo $this->env->getExtension('System\Twig\Extension')->appFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["childPage"], "url", array()));
                echo "\">
                ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["childPage"], "title", array()), "html", null, true);
                echo "
            </a>
        </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/install-master/themes/rainlab-relax/partials/sidemenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  58 => 15,  54 => 14,  49 => 13,  44 => 12,  38 => 9,  34 => 8,  30 => 7,  26 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Renders a menu with any child static pages #}

{% set parentOrSelf = page.parent ?: page %}
{% set childPages = parentOrSelf.children %}

<ul>
    <li class=\"head-link {{ page.url == parentOrSelf.url ? 'active' }}\">
        <a href=\"{{ parentOrSelf.url|app }}\">
            {{ parentOrSelf.title }}
        </a>
    </li>
    {% for childPage in childPages if not childPage.navigation_hidden %}
        <li class=\"{{ page.url == childPage.url ? 'active' }}\">
            <a href=\"{{ childPage.url|app }}\">
                {{ childPage.title }}
            </a>
        </li>
    {% endfor %}
</ul>", "/var/www/html/install-master/themes/rainlab-relax/partials/sidemenu.htm", "");
    }
}
