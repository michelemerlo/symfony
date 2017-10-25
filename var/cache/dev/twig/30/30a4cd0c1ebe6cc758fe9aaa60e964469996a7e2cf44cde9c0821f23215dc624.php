<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a2f9134308656ac59cb00428b5813fff0d91cd5c6c7ac6d829b8155a720084c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40c21e5b956e90ef822cc63c9903a81e672dc33c47946a072a2350a51a9d7fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c21e5b956e90ef822cc63c9903a81e672dc33c47946a072a2350a51a9d7fe3->enter($__internal_40c21e5b956e90ef822cc63c9903a81e672dc33c47946a072a2350a51a9d7fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8b2f1760000329b4b6029a20d38b0ca161cf39d90fb7689cadbfa984bd2d9d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2f1760000329b4b6029a20d38b0ca161cf39d90fb7689cadbfa984bd2d9d0d->enter($__internal_8b2f1760000329b4b6029a20d38b0ca161cf39d90fb7689cadbfa984bd2d9d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_40c21e5b956e90ef822cc63c9903a81e672dc33c47946a072a2350a51a9d7fe3->leave($__internal_40c21e5b956e90ef822cc63c9903a81e672dc33c47946a072a2350a51a9d7fe3_prof);

        
        $__internal_8b2f1760000329b4b6029a20d38b0ca161cf39d90fb7689cadbfa984bd2d9d0d->leave($__internal_8b2f1760000329b4b6029a20d38b0ca161cf39d90fb7689cadbfa984bd2d9d0d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8666bcab7c3edc149a2a42dfd2abe44b7bca04c319a07d7026442e3bff62a96c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8666bcab7c3edc149a2a42dfd2abe44b7bca04c319a07d7026442e3bff62a96c->enter($__internal_8666bcab7c3edc149a2a42dfd2abe44b7bca04c319a07d7026442e3bff62a96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b5f6ecbd0c36ecb34f9022f8aa04e130ac62848870122b8f48f2f794cf9d7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5f6ecbd0c36ecb34f9022f8aa04e130ac62848870122b8f48f2f794cf9d7ce->enter($__internal_4b5f6ecbd0c36ecb34f9022f8aa04e130ac62848870122b8f48f2f794cf9d7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4b5f6ecbd0c36ecb34f9022f8aa04e130ac62848870122b8f48f2f794cf9d7ce->leave($__internal_4b5f6ecbd0c36ecb34f9022f8aa04e130ac62848870122b8f48f2f794cf9d7ce_prof);

        
        $__internal_8666bcab7c3edc149a2a42dfd2abe44b7bca04c319a07d7026442e3bff62a96c->leave($__internal_8666bcab7c3edc149a2a42dfd2abe44b7bca04c319a07d7026442e3bff62a96c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e50dac589f88cb5797c6c2a08103ea445aefd0ea3255edf6908dc2606413cc57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e50dac589f88cb5797c6c2a08103ea445aefd0ea3255edf6908dc2606413cc57->enter($__internal_e50dac589f88cb5797c6c2a08103ea445aefd0ea3255edf6908dc2606413cc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a1529694590fb7e35de2c978254b4ddb4e676801b0380793fb9dc05443ea5fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1529694590fb7e35de2c978254b4ddb4e676801b0380793fb9dc05443ea5fb5->enter($__internal_a1529694590fb7e35de2c978254b4ddb4e676801b0380793fb9dc05443ea5fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a1529694590fb7e35de2c978254b4ddb4e676801b0380793fb9dc05443ea5fb5->leave($__internal_a1529694590fb7e35de2c978254b4ddb4e676801b0380793fb9dc05443ea5fb5_prof);

        
        $__internal_e50dac589f88cb5797c6c2a08103ea445aefd0ea3255edf6908dc2606413cc57->leave($__internal_e50dac589f88cb5797c6c2a08103ea445aefd0ea3255edf6908dc2606413cc57_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c7de91e69411e772de9ef2945040fed77f0ad50d54cd9ab0cefc4af602b390e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7de91e69411e772de9ef2945040fed77f0ad50d54cd9ab0cefc4af602b390e->enter($__internal_8c7de91e69411e772de9ef2945040fed77f0ad50d54cd9ab0cefc4af602b390e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb2dc0b1084adb0cde90ecebb5844842d33d1df711dbf82dde8e0b51882e82d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2dc0b1084adb0cde90ecebb5844842d33d1df711dbf82dde8e0b51882e82d2->enter($__internal_fb2dc0b1084adb0cde90ecebb5844842d33d1df711dbf82dde8e0b51882e82d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fb2dc0b1084adb0cde90ecebb5844842d33d1df711dbf82dde8e0b51882e82d2->leave($__internal_fb2dc0b1084adb0cde90ecebb5844842d33d1df711dbf82dde8e0b51882e82d2_prof);

        
        $__internal_8c7de91e69411e772de9ef2945040fed77f0ad50d54cd9ab0cefc4af602b390e->leave($__internal_8c7de91e69411e772de9ef2945040fed77f0ad50d54cd9ab0cefc4af602b390e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
