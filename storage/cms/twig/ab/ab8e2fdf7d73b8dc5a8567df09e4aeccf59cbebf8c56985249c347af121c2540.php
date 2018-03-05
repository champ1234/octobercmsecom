<?php

/* /var/www/html/install-master/themes/e-commerce/layouts/single.htm */
class __TwigTemplate_73481ed344d46d6fac8d4751232feeefe35f93b330aa9d048467c5fe246f1992 extends Twig_Template
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
        echo "<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">
        <link href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
        <!--//theme-style-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 18
        echo "        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
\t\t<script src=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.etalage.min.js");
        echo "\"></script>
\t\t<script>
\t\t\tjQuery(document).ready(function(\$){

\t\t\t\t\$('#etalage').etalage({
\t\t\t\t\tthumb_image_width: 300,
\t\t\t\t\tthumb_image_height: 400,
\t\t\t\t\tsource_image_width: 900,
\t\t\t\t\tsource_image_height: 1200,
\t\t\t\t\tshow_hint: true,
\t\t\t\t\tclick_callback: function(image_anchor, instance_id){
\t\t\t\t\t\talert('Callback example:\\nYou clicked on an image with the anchor: \"'+image_anchor+'\"\\n(in Etalage instance: \"'+instance_id+'\")');
\t\t\t\t\t}
\t\t\t\t});

\t\t\t});
\t\t</script>
    </head>
    <body>

        <!-- Header -->
        <div class=\"header\">
            ";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "        </div>
  
        <!-- Content -->
        <div class=\"container\">
            ";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 48
        echo "        </div>

        <!-- Footer -->
        <div class=\"footer\">
            ";
        // line 52
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 53
        echo "        </div>

        ";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 56
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/install-master/themes/e-commerce/layouts/single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 56,  116 => 55,  112 => 53,  108 => 52,  102 => 48,  100 => 47,  94 => 43,  90 => 42,  65 => 20,  61 => 19,  58 => 18,  55 => 17,  47 => 12,  43 => 11,  39 => 10,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
        <link href=\"{{ 'assets/css/bootstrap.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\">
        <!--//theme-style-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        {% styles %}
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src=\"{{ 'assets/js/jquery.min.js'|theme }}\"></script>
\t\t<script src=\"{{ 'assets/js/jquery.etalage.min.js'|theme }}\"></script>
\t\t<script>
\t\t\tjQuery(document).ready(function(\$){

\t\t\t\t\$('#etalage').etalage({
\t\t\t\t\tthumb_image_width: 300,
\t\t\t\t\tthumb_image_height: 400,
\t\t\t\t\tsource_image_width: 900,
\t\t\t\t\tsource_image_height: 1200,
\t\t\t\t\tshow_hint: true,
\t\t\t\t\tclick_callback: function(image_anchor, instance_id){
\t\t\t\t\t\talert('Callback example:\\nYou clicked on an image with the anchor: \"'+image_anchor+'\"\\n(in Etalage instance: \"'+instance_id+'\")');
\t\t\t\t\t}
\t\t\t\t});

\t\t\t});
\t\t</script>
    </head>
    <body>

        <!-- Header -->
        <div class=\"header\">
            {% partial 'site/header' %}
        </div>
  
        <!-- Content -->
        <div class=\"container\">
            {% page %}
        </div>

        <!-- Footer -->
        <div class=\"footer\">
            {% partial 'site/footer' %}
        </div>

        {% scripts %}

    </body>
</html>", "/var/www/html/install-master/themes/e-commerce/layouts/single.htm", "");
    }
}
