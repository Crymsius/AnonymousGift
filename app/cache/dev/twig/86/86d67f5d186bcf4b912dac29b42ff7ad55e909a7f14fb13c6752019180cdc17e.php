<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e45f9eb285f5ceb151a73c4dbb13f2a431128b72bd2962eca45385fc859adb14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f66cc6c359eb1e3b4b2968678cdb84ced3e22ebe5f1e0f6dc9ced12abfd1ced1 = $this->env->getExtension("native_profiler");
        $__internal_f66cc6c359eb1e3b4b2968678cdb84ced3e22ebe5f1e0f6dc9ced12abfd1ced1->enter($__internal_f66cc6c359eb1e3b4b2968678cdb84ced3e22ebe5f1e0f6dc9ced12abfd1ced1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f66cc6c359eb1e3b4b2968678cdb84ced3e22ebe5f1e0f6dc9ced12abfd1ced1->leave($__internal_f66cc6c359eb1e3b4b2968678cdb84ced3e22ebe5f1e0f6dc9ced12abfd1ced1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f51230565b2091b6fbfd6813c19c8d6df7bee12520104adec226da8a1e8b9d40 = $this->env->getExtension("native_profiler");
        $__internal_f51230565b2091b6fbfd6813c19c8d6df7bee12520104adec226da8a1e8b9d40->enter($__internal_f51230565b2091b6fbfd6813c19c8d6df7bee12520104adec226da8a1e8b9d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f51230565b2091b6fbfd6813c19c8d6df7bee12520104adec226da8a1e8b9d40->leave($__internal_f51230565b2091b6fbfd6813c19c8d6df7bee12520104adec226da8a1e8b9d40_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
