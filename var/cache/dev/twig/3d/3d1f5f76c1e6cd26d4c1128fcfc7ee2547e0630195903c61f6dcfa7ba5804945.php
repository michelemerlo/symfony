<?php

/* Emails/message.html.twig */
class __TwigTemplate_1c37a19522a36723f4ed43594c0f81dc5fda53d8eeff86f61ba4fe4b7021bc87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Emails/message.html.twig", 1);
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
        $__internal_6c8fd73d125582126009c0faba2b0bca1690a99bef7269af16226550f4ff6e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8fd73d125582126009c0faba2b0bca1690a99bef7269af16226550f4ff6e00->enter($__internal_6c8fd73d125582126009c0faba2b0bca1690a99bef7269af16226550f4ff6e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/message.html.twig"));

        $__internal_5bc0f2e816fe08f4d33491fd9b104a9a6d0e24ca1c0e2eaf508961a3bad13f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc0f2e816fe08f4d33491fd9b104a9a6d0e24ca1c0e2eaf508961a3bad13f52->enter($__internal_5bc0f2e816fe08f4d33491fd9b104a9a6d0e24ca1c0e2eaf508961a3bad13f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c8fd73d125582126009c0faba2b0bca1690a99bef7269af16226550f4ff6e00->leave($__internal_6c8fd73d125582126009c0faba2b0bca1690a99bef7269af16226550f4ff6e00_prof);

        
        $__internal_5bc0f2e816fe08f4d33491fd9b104a9a6d0e24ca1c0e2eaf508961a3bad13f52->leave($__internal_5bc0f2e816fe08f4d33491fd9b104a9a6d0e24ca1c0e2eaf508961a3bad13f52_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_52b75b605f2fbc33c257978f821dbb7e0ae66093d89175b91a29f017f50ce3d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b75b605f2fbc33c257978f821dbb7e0ae66093d89175b91a29f017f50ce3d7->enter($__internal_52b75b605f2fbc33c257978f821dbb7e0ae66093d89175b91a29f017f50ce3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9cf3ced91da2baa6297ff7f9952d8000f107865ca2bfc3da039aa26a18e4791e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf3ced91da2baa6297ff7f9952d8000f107865ca2bfc3da039aa26a18e4791e->enter($__internal_9cf3ced91da2baa6297ff7f9952d8000f107865ca2bfc3da039aa26a18e4791e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Personeneinträge";
        
        $__internal_9cf3ced91da2baa6297ff7f9952d8000f107865ca2bfc3da039aa26a18e4791e->leave($__internal_9cf3ced91da2baa6297ff7f9952d8000f107865ca2bfc3da039aa26a18e4791e_prof);

        
        $__internal_52b75b605f2fbc33c257978f821dbb7e0ae66093d89175b91a29f017f50ce3d7->leave($__internal_52b75b605f2fbc33c257978f821dbb7e0ae66093d89175b91a29f017f50ce3d7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_741d65de26598d2d9701e0357255431b7d43d44f89dff0d8068177423e25f81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741d65de26598d2d9701e0357255431b7d43d44f89dff0d8068177423e25f81b->enter($__internal_741d65de26598d2d9701e0357255431b7d43d44f89dff0d8068177423e25f81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8283c0b2fffea780e9a7ac2c6a16bc377905918a5cbe92b80f16b90e171f7537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8283c0b2fffea780e9a7ac2c6a16bc377905918a5cbe92b80f16b90e171f7537->enter($__internal_8283c0b2fffea780e9a7ac2c6a16bc377905918a5cbe92b80f16b90e171f7537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h3>Benutzer ";
        echo twig_escape_filter($this->env, (isset($context["firstname"]) ? $context["firstname"] : $this->getContext($context, "firstname")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastname"]) ? $context["lastname"] : $this->getContext($context, "lastname")), "html", null, true);
        echo "</h3>
<form class='form-inline' method=\"post\">
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</form>


";
        // line 14
        echo "Um zum Benutzer zu gelangen: <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("details", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["firstname"]) ? $context["firstname"] : $this->getContext($context, "firstname")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastname"]) ? $context["lastname"] : $this->getContext($context, "lastname")), "html", null, true);
        echo "</a>.
<br>
Dankeschön!
";
        
        $__internal_8283c0b2fffea780e9a7ac2c6a16bc377905918a5cbe92b80f16b90e171f7537->leave($__internal_8283c0b2fffea780e9a7ac2c6a16bc377905918a5cbe92b80f16b90e171f7537_prof);

        
        $__internal_741d65de26598d2d9701e0357255431b7d43d44f89dff0d8068177423e25f81b->leave($__internal_741d65de26598d2d9701e0357255431b7d43d44f89dff0d8068177423e25f81b_prof);

    }

    public function getTemplateName()
    {
        return "Emails/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 14,  84 => 9,  80 => 8,  76 => 7,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block title %}Personeneinträge{% endblock %}
{% block body %}
<h3>Benutzer {{ firstname }} {{ lastname }}</h3>
<form class='form-inline' method=\"post\">
{{ form_start(form)}}
{{ form_widget(form)}}
{{ form_end(form)}}
</form>


{# example, assuming you have a route named \"login\" #}
Um zum Benutzer zu gelangen: <a href=\"{{ url('details',{'id':id}) }}\">{{ firstname }} {{ lastname }}</a>.
<br>
Dankeschön!
{% endblock %}


", "Emails/message.html.twig", "/var/www/html/test/app/Resources/views/Emails/message.html.twig");
    }
}
