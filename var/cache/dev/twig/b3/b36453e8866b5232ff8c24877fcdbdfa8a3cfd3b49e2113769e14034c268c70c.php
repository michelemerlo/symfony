<?php

/* main/new.html.twig */
class __TwigTemplate_0787de4b94e7236e9603c5d472b68142423dc0e094c5655358105246b1f13a2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6aadc1b9eb3f4b9f68b11d527158282cdb81e74b56b989689aeec93bd38ee55e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aadc1b9eb3f4b9f68b11d527158282cdb81e74b56b989689aeec93bd38ee55e->enter($__internal_6aadc1b9eb3f4b9f68b11d527158282cdb81e74b56b989689aeec93bd38ee55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/new.html.twig"));

        $__internal_88b5b9e9b4c56f39671e1a476fd4bb91b09ec16f4a83f0c6784aa92148434b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b5b9e9b4c56f39671e1a476fd4bb91b09ec16f4a83f0c6784aa92148434b59->enter($__internal_88b5b9e9b4c56f39671e1a476fd4bb91b09ec16f4a83f0c6784aa92148434b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aadc1b9eb3f4b9f68b11d527158282cdb81e74b56b989689aeec93bd38ee55e->leave($__internal_6aadc1b9eb3f4b9f68b11d527158282cdb81e74b56b989689aeec93bd38ee55e_prof);

        
        $__internal_88b5b9e9b4c56f39671e1a476fd4bb91b09ec16f4a83f0c6784aa92148434b59->leave($__internal_88b5b9e9b4c56f39671e1a476fd4bb91b09ec16f4a83f0c6784aa92148434b59_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_78b7779faddfe0ae303f29cc87ddc69d5a9a5b45caf918e59565c6aebc1e540c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b7779faddfe0ae303f29cc87ddc69d5a9a5b45caf918e59565c6aebc1e540c->enter($__internal_78b7779faddfe0ae303f29cc87ddc69d5a9a5b45caf918e59565c6aebc1e540c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3d1a530de5c7f8769d89a10855ec6187b2266577f59538958f9db41833c11b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d1a530de5c7f8769d89a10855ec6187b2266577f59538958f9db41833c11b4->enter($__internal_a3d1a530de5c7f8769d89a10855ec6187b2266577f59538958f9db41833c11b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Neuer Eintrag";
        
        $__internal_a3d1a530de5c7f8769d89a10855ec6187b2266577f59538958f9db41833c11b4->leave($__internal_a3d1a530de5c7f8769d89a10855ec6187b2266577f59538958f9db41833c11b4_prof);

        
        $__internal_78b7779faddfe0ae303f29cc87ddc69d5a9a5b45caf918e59565c6aebc1e540c->leave($__internal_78b7779faddfe0ae303f29cc87ddc69d5a9a5b45caf918e59565c6aebc1e540c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0d8d4f23f53c4020e1daea793b0c4aa8fafa3a005269ba930f6127d499770df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d8d4f23f53c4020e1daea793b0c4aa8fafa3a005269ba930f6127d499770df->enter($__internal_e0d8d4f23f53c4020e1daea793b0c4aa8fafa3a005269ba930f6127d499770df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9ac05548b6d1caadcc38d613658545b8b985d6e68d3a1de218f9a1e664a768e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ac05548b6d1caadcc38d613658545b8b985d6e68d3a1de218f9a1e664a768e->enter($__internal_a9ac05548b6d1caadcc38d613658545b8b985d6e68d3a1de218f9a1e664a768e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"list-group\">Neuer Eintrag</h2>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beschreibung", array()), 'widget', array("required" => false));
        echo "
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_a9ac05548b6d1caadcc38d613658545b8b985d6e68d3a1de218f9a1e664a768e->leave($__internal_a9ac05548b6d1caadcc38d613658545b8b985d6e68d3a1de218f9a1e664a768e_prof);

        
        $__internal_e0d8d4f23f53c4020e1daea793b0c4aa8fafa3a005269ba930f6127d499770df->leave($__internal_e0d8d4f23f53c4020e1daea793b0c4aa8fafa3a005269ba930f6127d499770df_prof);

    }

    public function getTemplateName()
    {
        return "main/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 8,  79 => 7,  75 => 6,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Neuer Eintrag{% endblock %}
{% block body %}
    <h2 class=\"list-group\">Neuer Eintrag</h2>
    {{ form_start(form)}}
    {{ form_widget(form)}}
    {{ form_widget(form.beschreibung, {'required': false})}}
    {{ form_end(form)}}
{% endblock %} ", "main/new.html.twig", "/var/www/html/test/app/Resources/views/main/new.html.twig");
    }
}
