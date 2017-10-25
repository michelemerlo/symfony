<?php

/* Emails/messageinfo.html.twig */
class __TwigTemplate_1414fb6a91064589aa63da4256b591c93ff4b62a5c493cc49854b146eca082ba extends Twig_Template
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
        $__internal_2d208ea48f6f3be23e5c3cd36f97aad9d876174ce06b41b3c1594d2ca6344d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d208ea48f6f3be23e5c3cd36f97aad9d876174ce06b41b3c1594d2ca6344d2a->enter($__internal_2d208ea48f6f3be23e5c3cd36f97aad9d876174ce06b41b3c1594d2ca6344d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/messageinfo.html.twig"));

        $__internal_14096d0b81144fb0151af86f8de0b171984bc2542ba7113beb5bbc84b34ad780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14096d0b81144fb0151af86f8de0b171984bc2542ba7113beb5bbc84b34ad780->enter($__internal_14096d0b81144fb0151af86f8de0b171984bc2542ba7113beb5bbc84b34ad780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/messageinfo.html.twig"));

        // line 1
        echo "<h3>Benutzer ";
        echo twig_escape_filter($this->env, (isset($context["firstname"]) ? $context["firstname"] : $this->getContext($context, "firstname")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastname"]) ? $context["lastname"] : $this->getContext($context, "lastname")), "html", null, true);
        echo "</h3>
<p>Bemerkung: ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["addition"]) ? $context["addition"] : $this->getContext($context, "addition")), "html", null, true);
        echo " </p> 
<br>
";
        // line 5
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
        
        $__internal_2d208ea48f6f3be23e5c3cd36f97aad9d876174ce06b41b3c1594d2ca6344d2a->leave($__internal_2d208ea48f6f3be23e5c3cd36f97aad9d876174ce06b41b3c1594d2ca6344d2a_prof);

        
        $__internal_14096d0b81144fb0151af86f8de0b171984bc2542ba7113beb5bbc84b34ad780->leave($__internal_14096d0b81144fb0151af86f8de0b171984bc2542ba7113beb5bbc84b34ad780_prof);

    }

    public function getTemplateName()
    {
        return "Emails/messageinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  32 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Benutzer {{ firstname }} {{ lastname }}</h3>
<p>Bemerkung: {{ addition }} </p> 
<br>
{# example, assuming you have a route named \"login\" #}
Um zum Benutzer zu gelangen: <a href=\"{{ url('details',{'id':id}) }}\">{{ firstname }} {{ lastname }}</a>.
<br>
Dankeschön!



", "Emails/messageinfo.html.twig", "/var/www/html/test/app/Resources/views/Emails/messageinfo.html.twig");
    }
}
