<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ef4bc1ced39bc5d4d269f628452d4d17fd35ff192edd46dfb4bf704d4e7290f9 extends Twig_Template
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
        $__internal_815042ac10c9caf6c0daa9bcd7dbe8323a45644bec783fe942ebf3b7af89b55e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_815042ac10c9caf6c0daa9bcd7dbe8323a45644bec783fe942ebf3b7af89b55e->enter($__internal_815042ac10c9caf6c0daa9bcd7dbe8323a45644bec783fe942ebf3b7af89b55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2a63296f8dffba63ddd6b332200fe16408b77cfe629d5f88048687aabfe68378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a63296f8dffba63ddd6b332200fe16408b77cfe629d5f88048687aabfe68378->enter($__internal_2a63296f8dffba63ddd6b332200fe16408b77cfe629d5f88048687aabfe68378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_815042ac10c9caf6c0daa9bcd7dbe8323a45644bec783fe942ebf3b7af89b55e->leave($__internal_815042ac10c9caf6c0daa9bcd7dbe8323a45644bec783fe942ebf3b7af89b55e_prof);

        
        $__internal_2a63296f8dffba63ddd6b332200fe16408b77cfe629d5f88048687aabfe68378->leave($__internal_2a63296f8dffba63ddd6b332200fe16408b77cfe629d5f88048687aabfe68378_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d38c5099f56085ac149ed90ec0d46fcb382f38f326259144f88f383be6112db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d38c5099f56085ac149ed90ec0d46fcb382f38f326259144f88f383be6112db->enter($__internal_7d38c5099f56085ac149ed90ec0d46fcb382f38f326259144f88f383be6112db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c5ff9bdf8f0f671d430a9ba8cdad3a8ce0a64a2fd39600b2fa3cc1dd7f143eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ff9bdf8f0f671d430a9ba8cdad3a8ce0a64a2fd39600b2fa3cc1dd7f143eb5->enter($__internal_c5ff9bdf8f0f671d430a9ba8cdad3a8ce0a64a2fd39600b2fa3cc1dd7f143eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c5ff9bdf8f0f671d430a9ba8cdad3a8ce0a64a2fd39600b2fa3cc1dd7f143eb5->leave($__internal_c5ff9bdf8f0f671d430a9ba8cdad3a8ce0a64a2fd39600b2fa3cc1dd7f143eb5_prof);

        
        $__internal_7d38c5099f56085ac149ed90ec0d46fcb382f38f326259144f88f383be6112db->leave($__internal_7d38c5099f56085ac149ed90ec0d46fcb382f38f326259144f88f383be6112db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_505476657f9d93c85b5f4c0ba25f6e0d5520251991aa5b7f340d9239b3ac0b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_505476657f9d93c85b5f4c0ba25f6e0d5520251991aa5b7f340d9239b3ac0b63->enter($__internal_505476657f9d93c85b5f4c0ba25f6e0d5520251991aa5b7f340d9239b3ac0b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_76c55096eab9ed85c8a3907ab90f3c9ebe70a5e1a6e5553d3267008ee1937d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c55096eab9ed85c8a3907ab90f3c9ebe70a5e1a6e5553d3267008ee1937d40->enter($__internal_76c55096eab9ed85c8a3907ab90f3c9ebe70a5e1a6e5553d3267008ee1937d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_76c55096eab9ed85c8a3907ab90f3c9ebe70a5e1a6e5553d3267008ee1937d40->leave($__internal_76c55096eab9ed85c8a3907ab90f3c9ebe70a5e1a6e5553d3267008ee1937d40_prof);

        
        $__internal_505476657f9d93c85b5f4c0ba25f6e0d5520251991aa5b7f340d9239b3ac0b63->leave($__internal_505476657f9d93c85b5f4c0ba25f6e0d5520251991aa5b7f340d9239b3ac0b63_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e03ec948e8e40e29d95336f927de5a78a371053cb7f8ce4827988d9a5d1add0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03ec948e8e40e29d95336f927de5a78a371053cb7f8ce4827988d9a5d1add0c->enter($__internal_e03ec948e8e40e29d95336f927de5a78a371053cb7f8ce4827988d9a5d1add0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_314980f118d78ccbea6536ab5c8e9bcafc7ffcf9558c8651f01dfdac0bab3789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314980f118d78ccbea6536ab5c8e9bcafc7ffcf9558c8651f01dfdac0bab3789->enter($__internal_314980f118d78ccbea6536ab5c8e9bcafc7ffcf9558c8651f01dfdac0bab3789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_314980f118d78ccbea6536ab5c8e9bcafc7ffcf9558c8651f01dfdac0bab3789->leave($__internal_314980f118d78ccbea6536ab5c8e9bcafc7ffcf9558c8651f01dfdac0bab3789_prof);

        
        $__internal_e03ec948e8e40e29d95336f927de5a78a371053cb7f8ce4827988d9a5d1add0c->leave($__internal_e03ec948e8e40e29d95336f927de5a78a371053cb7f8ce4827988d9a5d1add0c_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
