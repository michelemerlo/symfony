<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2de374e67e496f6c9244186b912f9a27d442d4873d1742fa3e6e03eaf1de624c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b75b0b1d7b79e39f9a7147f1a6ae646b783a4bf5e71141b84e1a66247221b01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b75b0b1d7b79e39f9a7147f1a6ae646b783a4bf5e71141b84e1a66247221b01c->enter($__internal_b75b0b1d7b79e39f9a7147f1a6ae646b783a4bf5e71141b84e1a66247221b01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c3f419598f9bdaa7c6a23fb5d6c3bdc1539fc3479edd335997bb9165a3403750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f419598f9bdaa7c6a23fb5d6c3bdc1539fc3479edd335997bb9165a3403750->enter($__internal_c3f419598f9bdaa7c6a23fb5d6c3bdc1539fc3479edd335997bb9165a3403750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b75b0b1d7b79e39f9a7147f1a6ae646b783a4bf5e71141b84e1a66247221b01c->leave($__internal_b75b0b1d7b79e39f9a7147f1a6ae646b783a4bf5e71141b84e1a66247221b01c_prof);

        
        $__internal_c3f419598f9bdaa7c6a23fb5d6c3bdc1539fc3479edd335997bb9165a3403750->leave($__internal_c3f419598f9bdaa7c6a23fb5d6c3bdc1539fc3479edd335997bb9165a3403750_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e19f2fc77bbf77968c8adc7b7cb03fff4bd290ef382403242509c80728145e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e19f2fc77bbf77968c8adc7b7cb03fff4bd290ef382403242509c80728145e0->enter($__internal_7e19f2fc77bbf77968c8adc7b7cb03fff4bd290ef382403242509c80728145e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_479a409446aab1e138b044600a7735c48ab77c3884d8c60077511bf98b718688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479a409446aab1e138b044600a7735c48ab77c3884d8c60077511bf98b718688->enter($__internal_479a409446aab1e138b044600a7735c48ab77c3884d8c60077511bf98b718688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_479a409446aab1e138b044600a7735c48ab77c3884d8c60077511bf98b718688->leave($__internal_479a409446aab1e138b044600a7735c48ab77c3884d8c60077511bf98b718688_prof);

        
        $__internal_7e19f2fc77bbf77968c8adc7b7cb03fff4bd290ef382403242509c80728145e0->leave($__internal_7e19f2fc77bbf77968c8adc7b7cb03fff4bd290ef382403242509c80728145e0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77bfd9f891bb3f3aea756a4ca0a33eba549c88eb3356d26fe4d721445dc4a85a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77bfd9f891bb3f3aea756a4ca0a33eba549c88eb3356d26fe4d721445dc4a85a->enter($__internal_77bfd9f891bb3f3aea756a4ca0a33eba549c88eb3356d26fe4d721445dc4a85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b70df8cee7ef4778315fb9b2ae94d2def172ed6e05d716f5f93f8743d4f837c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70df8cee7ef4778315fb9b2ae94d2def172ed6e05d716f5f93f8743d4f837c6->enter($__internal_b70df8cee7ef4778315fb9b2ae94d2def172ed6e05d716f5f93f8743d4f837c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b70df8cee7ef4778315fb9b2ae94d2def172ed6e05d716f5f93f8743d4f837c6->leave($__internal_b70df8cee7ef4778315fb9b2ae94d2def172ed6e05d716f5f93f8743d4f837c6_prof);

        
        $__internal_77bfd9f891bb3f3aea756a4ca0a33eba549c88eb3356d26fe4d721445dc4a85a->leave($__internal_77bfd9f891bb3f3aea756a4ca0a33eba549c88eb3356d26fe4d721445dc4a85a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ef678aed3787c5d2858f70124f5985b5ac216d0678b9c4c9fa7db36599c431b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef678aed3787c5d2858f70124f5985b5ac216d0678b9c4c9fa7db36599c431b->enter($__internal_4ef678aed3787c5d2858f70124f5985b5ac216d0678b9c4c9fa7db36599c431b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e1b90d37edc2592a5402f7463f9efa1435489290b82536b71c5209456b90af1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b90d37edc2592a5402f7463f9efa1435489290b82536b71c5209456b90af1e->enter($__internal_e1b90d37edc2592a5402f7463f9efa1435489290b82536b71c5209456b90af1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e1b90d37edc2592a5402f7463f9efa1435489290b82536b71c5209456b90af1e->leave($__internal_e1b90d37edc2592a5402f7463f9efa1435489290b82536b71c5209456b90af1e_prof);

        
        $__internal_4ef678aed3787c5d2858f70124f5985b5ac216d0678b9c4c9fa7db36599c431b->leave($__internal_4ef678aed3787c5d2858f70124f5985b5ac216d0678b9c4c9fa7db36599c431b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
