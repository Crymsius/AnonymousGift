<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_be76d3e7bc34e02c596c8be5db9c41dcd7f44a491a229bd8a583cb23f82252cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_163aac7b5450fbb280cfb869b826b537693d24ea55e3fdbd3015c1393b115ff0 = $this->env->getExtension("native_profiler");
        $__internal_163aac7b5450fbb280cfb869b826b537693d24ea55e3fdbd3015c1393b115ff0->enter($__internal_163aac7b5450fbb280cfb869b826b537693d24ea55e3fdbd3015c1393b115ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_163aac7b5450fbb280cfb869b826b537693d24ea55e3fdbd3015c1393b115ff0->leave($__internal_163aac7b5450fbb280cfb869b826b537693d24ea55e3fdbd3015c1393b115ff0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_597c4404eb45cd4d4ccbb1984a621fda6c2015b7df8926095e9ce02eada756b0 = $this->env->getExtension("native_profiler");
        $__internal_597c4404eb45cd4d4ccbb1984a621fda6c2015b7df8926095e9ce02eada756b0->enter($__internal_597c4404eb45cd4d4ccbb1984a621fda6c2015b7df8926095e9ce02eada756b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_597c4404eb45cd4d4ccbb1984a621fda6c2015b7df8926095e9ce02eada756b0->leave($__internal_597c4404eb45cd4d4ccbb1984a621fda6c2015b7df8926095e9ce02eada756b0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39ac0d097a9a50bb5de0149e06644bdb2e06c64d43fe8c016f039d1eacb2ad4a = $this->env->getExtension("native_profiler");
        $__internal_39ac0d097a9a50bb5de0149e06644bdb2e06c64d43fe8c016f039d1eacb2ad4a->enter($__internal_39ac0d097a9a50bb5de0149e06644bdb2e06c64d43fe8c016f039d1eacb2ad4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_39ac0d097a9a50bb5de0149e06644bdb2e06c64d43fe8c016f039d1eacb2ad4a->leave($__internal_39ac0d097a9a50bb5de0149e06644bdb2e06c64d43fe8c016f039d1eacb2ad4a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3a3ce6cc57f0944230de80d497c096d015a7a1a794a642434f25e60502d5872 = $this->env->getExtension("native_profiler");
        $__internal_a3a3ce6cc57f0944230de80d497c096d015a7a1a794a642434f25e60502d5872->enter($__internal_a3a3ce6cc57f0944230de80d497c096d015a7a1a794a642434f25e60502d5872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a3a3ce6cc57f0944230de80d497c096d015a7a1a794a642434f25e60502d5872->leave($__internal_a3a3ce6cc57f0944230de80d497c096d015a7a1a794a642434f25e60502d5872_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
