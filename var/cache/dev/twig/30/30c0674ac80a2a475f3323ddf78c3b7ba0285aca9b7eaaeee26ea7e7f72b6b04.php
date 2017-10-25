<?php

/* main/index.html.twig */
class __TwigTemplate_dd7387f42561269fa5e835804a764453486059471e7bb3c04da600df96a885b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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
        $__internal_d0afe77d4aac1761fd3adbeb82ab0f77c4eab20742fe3b312190afffe682a683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0afe77d4aac1761fd3adbeb82ab0f77c4eab20742fe3b312190afffe682a683->enter($__internal_d0afe77d4aac1761fd3adbeb82ab0f77c4eab20742fe3b312190afffe682a683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_1e4addf93fcd3010947e9ccbacea4021b1b3165dc41aa363c41356914c34bd9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4addf93fcd3010947e9ccbacea4021b1b3165dc41aa363c41356914c34bd9a->enter($__internal_1e4addf93fcd3010947e9ccbacea4021b1b3165dc41aa363c41356914c34bd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0afe77d4aac1761fd3adbeb82ab0f77c4eab20742fe3b312190afffe682a683->leave($__internal_d0afe77d4aac1761fd3adbeb82ab0f77c4eab20742fe3b312190afffe682a683_prof);

        
        $__internal_1e4addf93fcd3010947e9ccbacea4021b1b3165dc41aa363c41356914c34bd9a->leave($__internal_1e4addf93fcd3010947e9ccbacea4021b1b3165dc41aa363c41356914c34bd9a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0bc561080893b50c88d7d61fc414257376bb58ce5ca7bd2232c145e2c0c71a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0bc561080893b50c88d7d61fc414257376bb58ce5ca7bd2232c145e2c0c71a6->enter($__internal_b0bc561080893b50c88d7d61fc414257376bb58ce5ca7bd2232c145e2c0c71a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_affc4d71cd3bdb926f2037b65ac639f22bac4756ad04b45fd9613fc57ac2e57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affc4d71cd3bdb926f2037b65ac639f22bac4756ad04b45fd9613fc57ac2e57a->enter($__internal_affc4d71cd3bdb926f2037b65ac639f22bac4756ad04b45fd9613fc57ac2e57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Personeneinträge";
        
        $__internal_affc4d71cd3bdb926f2037b65ac639f22bac4756ad04b45fd9613fc57ac2e57a->leave($__internal_affc4d71cd3bdb926f2037b65ac639f22bac4756ad04b45fd9613fc57ac2e57a_prof);

        
        $__internal_b0bc561080893b50c88d7d61fc414257376bb58ce5ca7bd2232c145e2c0c71a6->leave($__internal_b0bc561080893b50c88d7d61fc414257376bb58ce5ca7bd2232c145e2c0c71a6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f84b446a56cdb930385bc49f5aa9f4883fafe5e43630d0d8404b2cae15ccb589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84b446a56cdb930385bc49f5aa9f4883fafe5e43630d0d8404b2cae15ccb589->enter($__internal_f84b446a56cdb930385bc49f5aa9f4883fafe5e43630d0d8404b2cae15ccb589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47a7f5f864c192036db64ce8349d9a4ce90cf8201c8e9c32ffb177e374d40c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a7f5f864c192036db64ce8349d9a4ce90cf8201c8e9c32ffb177e374d40c47->enter($__internal_47a7f5f864c192036db64ce8349d9a4ce90cf8201c8e9c32ffb177e374d40c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class='container'>
<h1>Personeneinträge</h1>
<form class='form-inline' method=\"post\">
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</form>
<table class=\"table table-hover\">
     <thead>
\t <th>Vorname</th>
\t <th>Nachname</th>
\t <th>Strasse</th>
\t <th>Ort</th>
\t <th>PLZ</th>
         <th>Beschreibung</th>
         <th class='col-md-3'>Bild</th>
         <th>&nbsp;</th>
     </thead>
     <tbody>
    ";
        // line 24
        if ((null === (isset($context["userssrc"]) ? $context["userssrc"] : $this->getContext($context, "userssrc")))) {
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 26
                echo "\t <tr>
             <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "vorname", array()), "html", null, true);
                echo "</td>
             <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "nachname", array()), "html", null, true);
                echo "</td>
             <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "strasse", array()), "html", null, true);
                echo "</td>
             <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ort", array()), "html", null, true);
                echo "</td>
             <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "plz", array()), "html", null, true);
                echo "</td>
             <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "beschreibung", array()), "html", null, true);
                echo "</td>
             ";
                // line 33
                if ($this->getAttribute($context["row"], "bild", array())) {
                    // line 34
                    echo "             <td><img class='usrimg' src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["row"], "bild", array()), "uploaded_files"), "html", null, true);
                    echo "\" alt=\"Bild zum Benutzer\"></td>
             ";
                } else {
                    // line 36
                    echo "             <td>-</td>
             ";
                }
                // line 38
                echo "             <td>
                 <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details", array("id" => $this->getAttribute($context["row"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\">Details</a> 
                 <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["row"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info\">Bearbeiten</a> 
                 <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["row"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Löschen</a>
                 <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mailrd", array("id" => $this->getAttribute($context["row"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\">Als Mail senden</a>  
             </td>
        </tr> 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    ";
        } else {
            // line 47
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userssrc"]) ? $context["userssrc"] : $this->getContext($context, "userssrc")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 48
                echo "        <tr>
             <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "vorname", array()), "html", null, true);
                echo "</td>
             <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "nachname", array()), "html", null, true);
                echo "</td>
             <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "strasse", array()), "html", null, true);
                echo "</td>
             <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ort", array()), "html", null, true);
                echo "</td>
             <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "plz", array()), "html", null, true);
                echo "</td>
             <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "beschreibung", array()), "html", null, true);
                echo "</td>
             <td>
                 <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details", array("id" => $this->getAttribute($context["row"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\">Details</a> 
                 <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["row"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info\">Bearbeiten</a> 
                 <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["row"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Löschen</a>        
             </td>
        </tr> 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "    ";
        }
        // line 63
        echo "     </tbody>
</table>
</div>
";
        
        $__internal_47a7f5f864c192036db64ce8349d9a4ce90cf8201c8e9c32ffb177e374d40c47->leave($__internal_47a7f5f864c192036db64ce8349d9a4ce90cf8201c8e9c32ffb177e374d40c47_prof);

        
        $__internal_f84b446a56cdb930385bc49f5aa9f4883fafe5e43630d0d8404b2cae15ccb589->leave($__internal_f84b446a56cdb930385bc49f5aa9f4883fafe5e43630d0d8404b2cae15ccb589_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 63,  223 => 62,  213 => 58,  209 => 57,  205 => 56,  200 => 54,  196 => 53,  192 => 52,  188 => 51,  184 => 50,  180 => 49,  177 => 48,  172 => 47,  169 => 46,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  144 => 38,  140 => 36,  134 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  105 => 26,  100 => 25,  98 => 24,  81 => 10,  77 => 9,  73 => 8,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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
<div class='container'>
<h1>Personeneinträge</h1>
<form class='form-inline' method=\"post\">
{{ form_start(form)}}
{{ form_widget(form)}}
{{ form_end(form)}}
</form>
<table class=\"table table-hover\">
     <thead>
\t <th>Vorname</th>
\t <th>Nachname</th>
\t <th>Strasse</th>
\t <th>Ort</th>
\t <th>PLZ</th>
         <th>Beschreibung</th>
         <th class='col-md-3'>Bild</th>
         <th>&nbsp;</th>
     </thead>
     <tbody>
    {% if userssrc is null %}
        {% for row in list %}
\t <tr>
             <td>{{row.vorname}}</td>
             <td>{{row.nachname}}</td>
             <td>{{row.strasse}}</td>
             <td>{{row.ort}}</td>
             <td>{{row.plz}}</td>
             <td>{{row.beschreibung}}</td>
             {% if row.bild %}
             <td><img class='usrimg' src=\"{{asset(row.bild, 'uploaded_files')}}\" alt=\"Bild zum Benutzer\"></td>
             {% else %}
             <td>-</td>
             {% endif %}
             <td>
                 <a href=\"{{ path('details',{'id':row.id})}}\" class=\"btn btn-success\">Details</a> 
                 <a href=\"{{ path('edit',{'id':row.id})}}\" class=\"btn btn-info\">Bearbeiten</a> 
                 <a href=\"{{ path('delete',{'id':row.id})}}\" class=\"btn btn-danger\">Löschen</a>
                 <a href=\"{{ path('mailrd',{'id':row.id})}}\" class=\"btn btn-default\">Als Mail senden</a>  
             </td>
        </tr> 
        {% endfor %}
    {% else %}
        {% for row in userssrc %}
        <tr>
             <td>{{row.vorname}}</td>
             <td>{{row.nachname}}</td>
             <td>{{row.strasse}}</td>
             <td>{{row.ort}}</td>
             <td>{{row.plz}}</td>
             <td>{{row.beschreibung}}</td>
             <td>
                 <a href=\"{{ path('details',{'id':row.id})}}\" class=\"btn btn-success\">Details</a> 
                 <a href=\"{{ path('edit',{'id':row.id})}}\" class=\"btn btn-info\">Bearbeiten</a> 
                 <a href=\"{{ path('delete',{'id':row.id})}}\" class=\"btn btn-danger\">Löschen</a>        
             </td>
        </tr> 
        {% endfor %}
    {% endif %}
     </tbody>
</table>
</div>
{% endblock %}", "main/index.html.twig", "/var/www/html/test/app/Resources/views/main/index.html.twig");
    }
}
