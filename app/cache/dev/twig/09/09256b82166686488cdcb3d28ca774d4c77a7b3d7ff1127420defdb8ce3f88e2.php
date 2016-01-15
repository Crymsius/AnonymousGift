<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c9beb2b81acb7c76aaeb390005087969e1ba8f35c159d914344c9a94ea9b62c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d0b0522402a72c9d2453b0f755f92612df44405819727a08039fa5c468a4785 = $this->env->getExtension("native_profiler");
        $__internal_6d0b0522402a72c9d2453b0f755f92612df44405819727a08039fa5c468a4785->enter($__internal_6d0b0522402a72c9d2453b0f755f92612df44405819727a08039fa5c468a4785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d0b0522402a72c9d2453b0f755f92612df44405819727a08039fa5c468a4785->leave($__internal_6d0b0522402a72c9d2453b0f755f92612df44405819727a08039fa5c468a4785_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b5865c5feb6601fd0f74888bc66fc10882125787ff4959fb7746140e2c15ccc = $this->env->getExtension("native_profiler");
        $__internal_0b5865c5feb6601fd0f74888bc66fc10882125787ff4959fb7746140e2c15ccc->enter($__internal_0b5865c5feb6601fd0f74888bc66fc10882125787ff4959fb7746140e2c15ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0b5865c5feb6601fd0f74888bc66fc10882125787ff4959fb7746140e2c15ccc->leave($__internal_0b5865c5feb6601fd0f74888bc66fc10882125787ff4959fb7746140e2c15ccc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_516bfad1c5069a26c53841b9ea35244edf8360db30eff255919bd0283940fb73 = $this->env->getExtension("native_profiler");
        $__internal_516bfad1c5069a26c53841b9ea35244edf8360db30eff255919bd0283940fb73->enter($__internal_516bfad1c5069a26c53841b9ea35244edf8360db30eff255919bd0283940fb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_516bfad1c5069a26c53841b9ea35244edf8360db30eff255919bd0283940fb73->leave($__internal_516bfad1c5069a26c53841b9ea35244edf8360db30eff255919bd0283940fb73_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_69df21d6b86b2eaaa9833499b1408f291b9c9637cab23eb3806913e66c39544e = $this->env->getExtension("native_profiler");
        $__internal_69df21d6b86b2eaaa9833499b1408f291b9c9637cab23eb3806913e66c39544e->enter($__internal_69df21d6b86b2eaaa9833499b1408f291b9c9637cab23eb3806913e66c39544e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_69df21d6b86b2eaaa9833499b1408f291b9c9637cab23eb3806913e66c39544e->leave($__internal_69df21d6b86b2eaaa9833499b1408f291b9c9637cab23eb3806913e66c39544e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
