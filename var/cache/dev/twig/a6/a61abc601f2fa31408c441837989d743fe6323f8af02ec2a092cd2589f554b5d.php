<?php

/* base.html.twig */
class __TwigTemplate_8c557d389c34aaf2311526bfb2585db90f2fc4a5f384317d7fdfe5a8765dbf42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9e847b88110ccde9a062b9d5fae1ef0e9d248e06d8c1a242d78eef34b7193cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e847b88110ccde9a062b9d5fae1ef0e9d248e06d8c1a242d78eef34b7193cf->enter($__internal_f9e847b88110ccde9a062b9d5fae1ef0e9d248e06d8c1a242d78eef34b7193cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_859b75ffa9d49e902ad1e3e3fd5036c709f8822e493181e33fcb7948cd909541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859b75ffa9d49e902ad1e3e3fd5036c709f8822e493181e33fcb7948cd909541->enter($__internal_859b75ffa9d49e902ad1e3e3fd5036c709f8822e493181e33fcb7948cd909541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"de\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap-CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
     <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/grund.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

   

    <!-- Nur für Testzwecke. Kopiere diese Zeilen nicht in echte Projekte! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"../../assets/js/ie-emulation-modes-warning.js\"></script>

    <!-- Unterstützung für Media Queries und HTML5-Elemente in IE8 über HTML5 shim und Respond.js -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Navigation ein-/ausblenden</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Test-Projekt</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
             ";
        // line 48
        echo "            <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_entry");
        echo "\">Neuer Eintrag</a></li>
            <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anmelden");
        echo "\">Anmelden</a></li>
            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Abmelden</a></li>
            ";
        // line 53
        echo "          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "            </div>
        </div>
    </div>
";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    <!-- Bootstrap-JavaScript
    ================================================== -->
    <!-- Am Ende des Dokuments platziert, damit Seiten schneller laden -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <!-- IE10-Anzeigefenster-Hack für Fehler auf Surface und Desktop-Windows-8 -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
  </body>
</html>";
        
        $__internal_f9e847b88110ccde9a062b9d5fae1ef0e9d248e06d8c1a242d78eef34b7193cf->leave($__internal_f9e847b88110ccde9a062b9d5fae1ef0e9d248e06d8c1a242d78eef34b7193cf_prof);

        
        $__internal_859b75ffa9d49e902ad1e3e3fd5036c709f8822e493181e33fcb7948cd909541->leave($__internal_859b75ffa9d49e902ad1e3e3fd5036c709f8822e493181e33fcb7948cd909541_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_b952ce002677a4bcaccd368e468122efd5737798348ef427a7e8059ed7b533fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b952ce002677a4bcaccd368e468122efd5737798348ef427a7e8059ed7b533fc->enter($__internal_b952ce002677a4bcaccd368e468122efd5737798348ef427a7e8059ed7b533fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f45fe135fcd0cbf12841b8656c4b8f8692578f07c0ac068fbd5ac05314eed1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f45fe135fcd0cbf12841b8656c4b8f8692578f07c0ac068fbd5ac05314eed1a->enter($__internal_6f45fe135fcd0cbf12841b8656c4b8f8692578f07c0ac068fbd5ac05314eed1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome";
        
        $__internal_6f45fe135fcd0cbf12841b8656c4b8f8692578f07c0ac068fbd5ac05314eed1a->leave($__internal_6f45fe135fcd0cbf12841b8656c4b8f8692578f07c0ac068fbd5ac05314eed1a_prof);

        
        $__internal_b952ce002677a4bcaccd368e468122efd5737798348ef427a7e8059ed7b533fc->leave($__internal_b952ce002677a4bcaccd368e468122efd5737798348ef427a7e8059ed7b533fc_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34657edc70fd899a4d81c423b333dad207b1c616a2d6a97a7dfef30427299fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34657edc70fd899a4d81c423b333dad207b1c616a2d6a97a7dfef30427299fa9->enter($__internal_34657edc70fd899a4d81c423b333dad207b1c616a2d6a97a7dfef30427299fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5ca049a5e1b5a412e3f428afc73c0289bd8388ac4236497d4b132ff3a38d2dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca049a5e1b5a412e3f428afc73c0289bd8388ac4236497d4b132ff3a38d2dc8->enter($__internal_5ca049a5e1b5a412e3f428afc73c0289bd8388ac4236497d4b132ff3a38d2dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5ca049a5e1b5a412e3f428afc73c0289bd8388ac4236497d4b132ff3a38d2dc8->leave($__internal_5ca049a5e1b5a412e3f428afc73c0289bd8388ac4236497d4b132ff3a38d2dc8_prof);

        
        $__internal_34657edc70fd899a4d81c423b333dad207b1c616a2d6a97a7dfef30427299fa9->leave($__internal_34657edc70fd899a4d81c423b333dad207b1c616a2d6a97a7dfef30427299fa9_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_591b8b488f6e83b4e30ded2b8fc2854ac1b90e6352ffc3fb390ea7878c8a1950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591b8b488f6e83b4e30ded2b8fc2854ac1b90e6352ffc3fb390ea7878c8a1950->enter($__internal_591b8b488f6e83b4e30ded2b8fc2854ac1b90e6352ffc3fb390ea7878c8a1950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf3ec23747a3ddd37c77561809e36ebb1d027dab0173f8d45fdbee6dfe73b6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3ec23747a3ddd37c77561809e36ebb1d027dab0173f8d45fdbee6dfe73b6fe->enter($__internal_bf3ec23747a3ddd37c77561809e36ebb1d027dab0173f8d45fdbee6dfe73b6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bf3ec23747a3ddd37c77561809e36ebb1d027dab0173f8d45fdbee6dfe73b6fe->leave($__internal_bf3ec23747a3ddd37c77561809e36ebb1d027dab0173f8d45fdbee6dfe73b6fe_prof);

        
        $__internal_591b8b488f6e83b4e30ded2b8fc2854ac1b90e6352ffc3fb390ea7878c8a1950->leave($__internal_591b8b488f6e83b4e30ded2b8fc2854ac1b90e6352ffc3fb390ea7878c8a1950_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ace17c43f6c86eb45a65542f5a3e70e7a9fb77d5c5fdd02a59b040cc29bc334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ace17c43f6c86eb45a65542f5a3e70e7a9fb77d5c5fdd02a59b040cc29bc334->enter($__internal_7ace17c43f6c86eb45a65542f5a3e70e7a9fb77d5c5fdd02a59b040cc29bc334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fcfc48b2809321f62f89cd9498612fce2260b82d275cafbe4c0d742dc07731a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfc48b2809321f62f89cd9498612fce2260b82d275cafbe4c0d742dc07731a5->enter($__internal_fcfc48b2809321f62f89cd9498612fce2260b82d275cafbe4c0d742dc07731a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
";
        
        $__internal_fcfc48b2809321f62f89cd9498612fce2260b82d275cafbe4c0d742dc07731a5->leave($__internal_fcfc48b2809321f62f89cd9498612fce2260b82d275cafbe4c0d742dc07731a5_prof);

        
        $__internal_7ace17c43f6c86eb45a65542f5a3e70e7a9fb77d5c5fdd02a59b040cc29bc334->leave($__internal_7ace17c43f6c86eb45a65542f5a3e70e7a9fb77d5c5fdd02a59b040cc29bc334_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 66,  197 => 65,  180 => 61,  163 => 16,  145 => 11,  127 => 69,  125 => 65,  120 => 62,  118 => 61,  108 => 53,  104 => 51,  100 => 50,  96 => 49,  91 => 48,  84 => 43,  54 => 17,  52 => 16,  48 => 15,  41 => 11,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"de\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}Welcome{% endblock %}</title>

    <!-- Bootstrap-CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
     <link href=\"{{ asset('css/grund.css')}}\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

   

    <!-- Nur für Testzwecke. Kopiere diese Zeilen nicht in echte Projekte! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"../../assets/js/ie-emulation-modes-warning.js\"></script>

    <!-- Unterstützung für Media Queries und HTML5-Elemente in IE8 über HTML5 shim und Respond.js -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Navigation ein-/ausblenden</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"{{path('homepage')}}\">Test-Projekt</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
             {#{% if session is null %}#}
            <li><a href=\"{{path('homepage')}}\">Home</a></li>
            <li><a href=\"{{path('new_entry')}}\">Neuer Eintrag</a></li>
            <li><a href=\"{{path('anmelden')}}\">Anmelden</a></li>
            <li><a href=\"{{path('logout')}}\">Abmelden</a></li>
            {#{% endif %}#}
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {% block body %}{% endblock %}
            </div>
        </div>
    </div>
{% block javascripts %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
{% endblock %}
    <!-- Bootstrap-JavaScript
    ================================================== -->
    <!-- Am Ende des Dokuments platziert, damit Seiten schneller laden -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <!-- IE10-Anzeigefenster-Hack für Fehler auf Surface und Desktop-Windows-8 -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
  </body>
</html>", "base.html.twig", "/var/www/html/test/app/Resources/views/base.html.twig");
    }
}
