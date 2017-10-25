<?php

/* main/message.html.twig */
class __TwigTemplate_2c96baa1c3c1c51e9afe9d9e5690a50da2d2fc76eb12ae01f21154e6302c0c75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/message.html.twig", 1);
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
        $__internal_1f7870ea8c7c4ea647e0117d102845f536cc73784b81671fa5a55ead668a2242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7870ea8c7c4ea647e0117d102845f536cc73784b81671fa5a55ead668a2242->enter($__internal_1f7870ea8c7c4ea647e0117d102845f536cc73784b81671fa5a55ead668a2242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/message.html.twig"));

        $__internal_dcff5e2f804c03e1a0a968611c587a33edf86b25d31b551aa02b9b92032c0473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcff5e2f804c03e1a0a968611c587a33edf86b25d31b551aa02b9b92032c0473->enter($__internal_dcff5e2f804c03e1a0a968611c587a33edf86b25d31b551aa02b9b92032c0473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f7870ea8c7c4ea647e0117d102845f536cc73784b81671fa5a55ead668a2242->leave($__internal_1f7870ea8c7c4ea647e0117d102845f536cc73784b81671fa5a55ead668a2242_prof);

        
        $__internal_dcff5e2f804c03e1a0a968611c587a33edf86b25d31b551aa02b9b92032c0473->leave($__internal_dcff5e2f804c03e1a0a968611c587a33edf86b25d31b551aa02b9b92032c0473_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b910351bd2435f6068ba01bb9a82f6256971188c21376f8dd4fb7d5113821149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b910351bd2435f6068ba01bb9a82f6256971188c21376f8dd4fb7d5113821149->enter($__internal_b910351bd2435f6068ba01bb9a82f6256971188c21376f8dd4fb7d5113821149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_30b9f22d371c7092bc60bd3df1732bb025cc2a10b5d80e35d65eb6aac96d9dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b9f22d371c7092bc60bd3df1732bb025cc2a10b5d80e35d65eb6aac96d9dde->enter($__internal_30b9f22d371c7092bc60bd3df1732bb025cc2a10b5d80e35d65eb6aac96d9dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Personeneinträge";
        
        $__internal_30b9f22d371c7092bc60bd3df1732bb025cc2a10b5d80e35d65eb6aac96d9dde->leave($__internal_30b9f22d371c7092bc60bd3df1732bb025cc2a10b5d80e35d65eb6aac96d9dde_prof);

        
        $__internal_b910351bd2435f6068ba01bb9a82f6256971188c21376f8dd4fb7d5113821149->leave($__internal_b910351bd2435f6068ba01bb9a82f6256971188c21376f8dd4fb7d5113821149_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ec8ef70efbd187110c471f31d56b4038d819cad50fed05e134a658dec9ba348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec8ef70efbd187110c471f31d56b4038d819cad50fed05e134a658dec9ba348->enter($__internal_8ec8ef70efbd187110c471f31d56b4038d819cad50fed05e134a658dec9ba348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b1a420172a6cee6ce12a76c7d48ec3a002e05d4088f55908f2b45930cae6ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1a420172a6cee6ce12a76c7d48ec3a002e05d4088f55908f2b45930cae6ba9->enter($__internal_4b1a420172a6cee6ce12a76c7d48ec3a002e05d4088f55908f2b45930cae6ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h3>Mail senden mit Benutzer ";
        echo twig_escape_filter($this->env, (isset($context["firstname"]) ? $context["firstname"] : $this->getContext($context, "firstname")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastname"]) ? $context["lastname"] : $this->getContext($context, "lastname")), "html", null, true);
        echo "</h3>
 <li class=\"list-group-item\">Vorname: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "vorname", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Nachname: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nachname", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Strasse: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "strasse", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Ort: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ort", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">PLZ: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "plz", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Beschreibung: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "beschreibung", array()), "html", null, true);
        echo "</li>
        <br>
<form class='form-inline' method=\"post\">
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</form>
";
        
        $__internal_4b1a420172a6cee6ce12a76c7d48ec3a002e05d4088f55908f2b45930cae6ba9->leave($__internal_4b1a420172a6cee6ce12a76c7d48ec3a002e05d4088f55908f2b45930cae6ba9_prof);

        
        $__internal_8ec8ef70efbd187110c471f31d56b4038d819cad50fed05e134a658dec9ba348->leave($__internal_8ec8ef70efbd187110c471f31d56b4038d819cad50fed05e134a658dec9ba348_prof);

    }

    public function getTemplateName()
    {
        return "main/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 16,  105 => 15,  101 => 14,  95 => 11,  91 => 10,  87 => 9,  83 => 8,  79 => 7,  75 => 6,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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
<h3>Mail senden mit Benutzer {{ firstname }} {{ lastname }}</h3>
 <li class=\"list-group-item\">Vorname: {{user.vorname}}</li>
        <li class=\"list-group-item\">Nachname: {{user.nachname}}</li>
        <li class=\"list-group-item\">Strasse: {{user.strasse}}</li>
        <li class=\"list-group-item\">Ort: {{user.ort}}</li>
        <li class=\"list-group-item\">PLZ: {{user.plz}}</li>
        <li class=\"list-group-item\">Beschreibung: {{user.beschreibung}}</li>
        <br>
<form class='form-inline' method=\"post\">
{{ form_start(form)}}
{{ form_widget(form)}}
{{ form_end(form)}}
</form>
{% endblock %}


", "main/message.html.twig", "/var/www/html/test/app/Resources/views/main/message.html.twig");
    }
}
