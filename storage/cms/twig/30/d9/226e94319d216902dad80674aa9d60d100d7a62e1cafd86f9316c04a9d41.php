<?php

/* D:\projets\polikin\jsasseville/plugins/anandpatel/seoextension/components/staticpage/default.htm */
class __TwigTemplate_30d9226e94319d216902dad80674aa9d60d100d7a62e1cafd86f9316c04a9d41 extends Twig_Template
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
        echo "


";
        // line 4
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "redirect_url", array())) {
            // line 5
            echo "    <meta http-equiv=\"refresh\" content=\"0; url=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "redirect_url", array()), "html", null, true);
            echo "\" />
";
        }
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_title", array())) {
            // line 9
            echo "    <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), array($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_title", array())));
            echo "</title>
";
        } else {
            // line 11
            echo "    <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), array($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "title", array())));
            echo "</title>
";
        }
        // line 13
        echo "
";
        // line 14
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_description", array())) {
            // line 15
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_description", array()), "html", null, true);
            echo "\">
";
        }
        // line 17
        echo "
";
        // line 18
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_keywords", array())) {
            // line 19
            echo "    <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "seo_keywords", array()), "html", null, true);
            echo "\">
";
        }
        // line 21
        echo "
";
        // line 22
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "canonical_url", array())) {
            // line 23
            echo "    <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "canonical_url", array()), "html", null, true);
            echo "\" />
";
        } else {
            // line 25
            echo "    ";
            echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), array(""));
            echo "
";
        }
        // line 27
        echo "
    <meta name=\"robots\" content=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "robot_index", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "robot_follow", array()), "html", null, true);
        echo "\">

";
        // line 30
        echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), array(""));
        echo "


";
        // line 33
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogTitle", array())) {
            // line 34
            echo "<meta property=\"og:title\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogTitle", array()), "html", null, true);
            echo "\" />
";
        }
        // line 36
        echo "
";
        // line 37
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogUrl", array())) {
            // line 38
            echo "<meta property=\"og:url\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogUrl", array()), "html", null, true);
            echo "\" />
";
        }
        // line 40
        echo "
";
        // line 41
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogSiteName", array())) {
            // line 42
            echo "<meta property=\"og:site_name\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogSiteName", array()), "html", null, true);
            echo "\" />
";
        }
        // line 44
        echo "
";
        // line 45
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogDescription", array())) {
            // line 46
            echo "<meta property=\"og:description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogDescription", array()), "html", null, true);
            echo "\" />
";
        }
        // line 48
        echo "
";
        // line 49
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogFbAppId", array())) {
            // line 50
            echo "<meta property=\"fb:app_id\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "ogFbAppId", array()), "html", null, true);
            echo "\" />
";
        }
        // line 52
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\projets\\polikin\\jsasseville/plugins/anandpatel/seoextension/components/staticpage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 52,  150 => 50,  148 => 49,  145 => 48,  139 => 46,  137 => 45,  134 => 44,  128 => 42,  126 => 41,  123 => 40,  117 => 38,  115 => 37,  112 => 36,  106 => 34,  104 => 33,  98 => 30,  91 => 28,  88 => 27,  82 => 25,  76 => 23,  74 => 22,  71 => 21,  65 => 19,  63 => 18,  60 => 17,  54 => 15,  52 => 14,  49 => 13,  43 => 11,  37 => 9,  35 => 8,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
