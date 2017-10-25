<?php

/* main/anmelden.html.twig */
class __TwigTemplate_37fdbc003a667ce58f3bfa34706814da1a7f32b98ef26c6299c944827aefde27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/anmelden.html.twig", 1);
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
        $__internal_ea7e7b9dbd2482dadd021d777731bfc16a7507d5dc7cdbc3de44364bbfc3a34d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7e7b9dbd2482dadd021d777731bfc16a7507d5dc7cdbc3de44364bbfc3a34d->enter($__internal_ea7e7b9dbd2482dadd021d777731bfc16a7507d5dc7cdbc3de44364bbfc3a34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/anmelden.html.twig"));

        $__internal_3ecd1852ca1d1b866b405dd9665dc14c8c5120c73db18dce96e3c671d1160e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ecd1852ca1d1b866b405dd9665dc14c8c5120c73db18dce96e3c671d1160e79->enter($__internal_3ecd1852ca1d1b866b405dd9665dc14c8c5120c73db18dce96e3c671d1160e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/anmelden.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea7e7b9dbd2482dadd021d777731bfc16a7507d5dc7cdbc3de44364bbfc3a34d->leave($__internal_ea7e7b9dbd2482dadd021d777731bfc16a7507d5dc7cdbc3de44364bbfc3a34d_prof);

        
        $__internal_3ecd1852ca1d1b866b405dd9665dc14c8c5120c73db18dce96e3c671d1160e79->leave($__internal_3ecd1852ca1d1b866b405dd9665dc14c8c5120c73db18dce96e3c671d1160e79_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ceb25da6ab5fbdf832b2f28d88ed7f2217e73cfce9b16a26af013a9862b8f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ceb25da6ab5fbdf832b2f28d88ed7f2217e73cfce9b16a26af013a9862b8f7a->enter($__internal_5ceb25da6ab5fbdf832b2f28d88ed7f2217e73cfce9b16a26af013a9862b8f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a84c64c4ba40d277c4edf04ed9493110c733a7ac19936a40d8cfaf3240d9b912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84c64c4ba40d277c4edf04ed9493110c733a7ac19936a40d8cfaf3240d9b912->enter($__internal_a84c64c4ba40d277c4edf04ed9493110c733a7ac19936a40d8cfaf3240d9b912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Anmeldung";
        
        $__internal_a84c64c4ba40d277c4edf04ed9493110c733a7ac19936a40d8cfaf3240d9b912->leave($__internal_a84c64c4ba40d277c4edf04ed9493110c733a7ac19936a40d8cfaf3240d9b912_prof);

        
        $__internal_5ceb25da6ab5fbdf832b2f28d88ed7f2217e73cfce9b16a26af013a9862b8f7a->leave($__internal_5ceb25da6ab5fbdf832b2f28d88ed7f2217e73cfce9b16a26af013a9862b8f7a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d88271cc3814e4b7f9e23c7aa27169ad6034f92acd640852dded7f49441fe0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d88271cc3814e4b7f9e23c7aa27169ad6034f92acd640852dded7f49441fe0a->enter($__internal_9d88271cc3814e4b7f9e23c7aa27169ad6034f92acd640852dded7f49441fe0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_203fbc46e733373663d13bba4ed0ef04e91ba80b6dccdd2ac3b42157b4a23edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203fbc46e733373663d13bba4ed0ef04e91ba80b6dccdd2ac3b42157b4a23edc->enter($__internal_203fbc46e733373663d13bba4ed0ef04e91ba80b6dccdd2ac3b42157b4a23edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"page-header\">Anmeldung</h1>
    ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "    <div class='well' id='logindiv'>
        <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anmelden");
        echo "\" method=\"post\" class=\"form-horizontal\">
            <div class=\"form-group\">
            <label for=\"_username\" class=\"control-label\" id=\"lblname\">Benutzername:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" />
            </div>
            <div class=\"form-group\">
            <label for=\"_password\" class=\"control-label\" id=\"lblpwd\">Passwort:</label>
            <input type=\"password\" id=\"passwort\" name=\"_password\" />
            </div>
            <input type=\"hidden\" value=\"/homepage\" name=\"_target_path\" />
            <button type=\"submit\" class=\"btn btn-default\">anmelden</button>
        </form>
    </div>
";
        
        $__internal_203fbc46e733373663d13bba4ed0ef04e91ba80b6dccdd2ac3b42157b4a23edc->leave($__internal_203fbc46e733373663d13bba4ed0ef04e91ba80b6dccdd2ac3b42157b4a23edc_prof);

        
        $__internal_9d88271cc3814e4b7f9e23c7aa27169ad6034f92acd640852dded7f49441fe0a->leave($__internal_9d88271cc3814e4b7f9e23c7aa27169ad6034f92acd640852dded7f49441fe0a_prof);

    }

    public function getTemplateName()
    {
        return "main/anmelden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 9,  79 => 8,  73 => 6,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Anmeldung{% endblock %}
{% block body %}
    <h1 class=\"page-header\">Anmeldung</h1>
    {% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security')}}</div>
{% endif %}
    <div class='well' id='logindiv'>
        <form action=\"{{ path('anmelden') }}\" method=\"post\" class=\"form-horizontal\">
            <div class=\"form-group\">
            <label for=\"_username\" class=\"control-label\" id=\"lblname\">Benutzername:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" />
            </div>
            <div class=\"form-group\">
            <label for=\"_password\" class=\"control-label\" id=\"lblpwd\">Passwort:</label>
            <input type=\"password\" id=\"passwort\" name=\"_password\" />
            </div>
            <input type=\"hidden\" value=\"/homepage\" name=\"_target_path\" />
            <button type=\"submit\" class=\"btn btn-default\">anmelden</button>
        </form>
    </div>
{% endblock %} ", "main/anmelden.html.twig", "/var/www/html/test/app/Resources/views/main/anmelden.html.twig");
    }
}
