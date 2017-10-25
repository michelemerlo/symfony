<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4e3b987bcc8ab806ccbb6eab430efbf4ad94fce683b7eef35bd979edfc3bc7e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6032a7fb2a486c1d3e19906a3db8df5fde23e6f1d0f93bff675d13f6ccf74a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6032a7fb2a486c1d3e19906a3db8df5fde23e6f1d0f93bff675d13f6ccf74a4e->enter($__internal_6032a7fb2a486c1d3e19906a3db8df5fde23e6f1d0f93bff675d13f6ccf74a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0926b08995a912bbbd87bdb8508566aae097bec1af9b6030c75a39b50755293b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0926b08995a912bbbd87bdb8508566aae097bec1af9b6030c75a39b50755293b->enter($__internal_0926b08995a912bbbd87bdb8508566aae097bec1af9b6030c75a39b50755293b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6032a7fb2a486c1d3e19906a3db8df5fde23e6f1d0f93bff675d13f6ccf74a4e->leave($__internal_6032a7fb2a486c1d3e19906a3db8df5fde23e6f1d0f93bff675d13f6ccf74a4e_prof);

        
        $__internal_0926b08995a912bbbd87bdb8508566aae097bec1af9b6030c75a39b50755293b->leave($__internal_0926b08995a912bbbd87bdb8508566aae097bec1af9b6030c75a39b50755293b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3e282d0f7eee3d6ddc8f4249693176143e385a20b1a459163bd8c34b0ff4914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e282d0f7eee3d6ddc8f4249693176143e385a20b1a459163bd8c34b0ff4914->enter($__internal_d3e282d0f7eee3d6ddc8f4249693176143e385a20b1a459163bd8c34b0ff4914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_faa6fcffeb6fd7037e094345f1f4b4faf6bc43f1b50e7b97bf398ef7aa93effe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa6fcffeb6fd7037e094345f1f4b4faf6bc43f1b50e7b97bf398ef7aa93effe->enter($__internal_faa6fcffeb6fd7037e094345f1f4b4faf6bc43f1b50e7b97bf398ef7aa93effe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_faa6fcffeb6fd7037e094345f1f4b4faf6bc43f1b50e7b97bf398ef7aa93effe->leave($__internal_faa6fcffeb6fd7037e094345f1f4b4faf6bc43f1b50e7b97bf398ef7aa93effe_prof);

        
        $__internal_d3e282d0f7eee3d6ddc8f4249693176143e385a20b1a459163bd8c34b0ff4914->leave($__internal_d3e282d0f7eee3d6ddc8f4249693176143e385a20b1a459163bd8c34b0ff4914_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_36b6491b9a9b1ff4a725635745d76ca770ed25288370061feb56bcd6ea9ac005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b6491b9a9b1ff4a725635745d76ca770ed25288370061feb56bcd6ea9ac005->enter($__internal_36b6491b9a9b1ff4a725635745d76ca770ed25288370061feb56bcd6ea9ac005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0c31ade82baefe4f4d45ae6457c01c7d61d5fed73ef4050bc0151099529f427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c31ade82baefe4f4d45ae6457c01c7d61d5fed73ef4050bc0151099529f427->enter($__internal_b0c31ade82baefe4f4d45ae6457c01c7d61d5fed73ef4050bc0151099529f427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b0c31ade82baefe4f4d45ae6457c01c7d61d5fed73ef4050bc0151099529f427->leave($__internal_b0c31ade82baefe4f4d45ae6457c01c7d61d5fed73ef4050bc0151099529f427_prof);

        
        $__internal_36b6491b9a9b1ff4a725635745d76ca770ed25288370061feb56bcd6ea9ac005->leave($__internal_36b6491b9a9b1ff4a725635745d76ca770ed25288370061feb56bcd6ea9ac005_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_91dd48ae429ebc3b9a233272febe1e0963f4232e3e114c087f98c8ba833ddde5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91dd48ae429ebc3b9a233272febe1e0963f4232e3e114c087f98c8ba833ddde5->enter($__internal_91dd48ae429ebc3b9a233272febe1e0963f4232e3e114c087f98c8ba833ddde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69e8d229bd6b5e92a0493c4ed7dfd004f3ff3a3f3efc2c5006076f395da18ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e8d229bd6b5e92a0493c4ed7dfd004f3ff3a3f3efc2c5006076f395da18ef3->enter($__internal_69e8d229bd6b5e92a0493c4ed7dfd004f3ff3a3f3efc2c5006076f395da18ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_69e8d229bd6b5e92a0493c4ed7dfd004f3ff3a3f3efc2c5006076f395da18ef3->leave($__internal_69e8d229bd6b5e92a0493c4ed7dfd004f3ff3a3f3efc2c5006076f395da18ef3_prof);

        
        $__internal_91dd48ae429ebc3b9a233272febe1e0963f4232e3e114c087f98c8ba833ddde5->leave($__internal_91dd48ae429ebc3b9a233272febe1e0963f4232e3e114c087f98c8ba833ddde5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
