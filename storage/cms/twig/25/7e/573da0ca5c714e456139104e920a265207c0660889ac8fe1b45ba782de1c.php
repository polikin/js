<?php

/* D:\projets\polikin\jsasseville/themes/jsasseville/layouts/static-layout.htm */
class __TwigTemplate_257e573da0ca5c714e456139104e920a265207c0660889ac8fe1b45ba782de1c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta property=\"og:image\" content=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" />
        ";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("SeoStaticPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "
        <link href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter("assets/dist/styles/screen.css");
        echo "\" rel=\"stylesheet\">
    </head>

    <body data-view=\"home\">
        ";
        // line 14
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = $this->getAttribute((isset($context["mainMenu"]) ? $context["mainMenu"] : null), "menuItems", array())        ;
        $context['__cms_partial_params']['class'] = "nav navbar-nav"        ;
        echo $this->env->getExtension('CMS')->partialFunction("menu-items"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "        <!-- ";
        echo $this->env->getExtension('CMS')->pageFunction();
        echo " -->

        <script src=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter("assets/dist/scripts/boot.js");
        echo "\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\projets\\polikin\\jsasseville/themes/jsasseville/layouts/static-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  51 => 15,  45 => 14,  38 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
