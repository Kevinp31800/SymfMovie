<?php

/* movies/form.html.twig */
class __TwigTemplate_012c938ea49f978aa13039a8dc41e000b29140c72ba5bbd726eb04b6db4ba58b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "movies/form.html.twig", 1);
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
        $__internal_d066420831873a10e518f811e11b99fe67ddbf8ef54e4d673c7ca8cef3fda72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d066420831873a10e518f811e11b99fe67ddbf8ef54e4d673c7ca8cef3fda72c->enter($__internal_d066420831873a10e518f811e11b99fe67ddbf8ef54e4d673c7ca8cef3fda72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movies/form.html.twig"));

        $__internal_e0e39541a0d33dcf507f11b1eb2c8fcbe8b97142b8419901a16e8e4e7987c671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e39541a0d33dcf507f11b1eb2c8fcbe8b97142b8419901a16e8e4e7987c671->enter($__internal_e0e39541a0d33dcf507f11b1eb2c8fcbe8b97142b8419901a16e8e4e7987c671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movies/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d066420831873a10e518f811e11b99fe67ddbf8ef54e4d673c7ca8cef3fda72c->leave($__internal_d066420831873a10e518f811e11b99fe67ddbf8ef54e4d673c7ca8cef3fda72c_prof);

        
        $__internal_e0e39541a0d33dcf507f11b1eb2c8fcbe8b97142b8419901a16e8e4e7987c671->leave($__internal_e0e39541a0d33dcf507f11b1eb2c8fcbe8b97142b8419901a16e8e4e7987c671_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62834128f0e54fa6e7378d56da09b2c661215f87d0df5f3418e1e2fe9e878930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62834128f0e54fa6e7378d56da09b2c661215f87d0df5f3418e1e2fe9e878930->enter($__internal_62834128f0e54fa6e7378d56da09b2c661215f87d0df5f3418e1e2fe9e878930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48e4c1a2743f713dbd567f354c3a4693b4d99fab9942f02562689c9cad4fb89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e4c1a2743f713dbd567f354c3a4693b4d99fab9942f02562689c9cad4fb89d->enter($__internal_48e4c1a2743f713dbd567f354c3a4693b4d99fab9942f02562689c9cad4fb89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Movie";
        
        $__internal_48e4c1a2743f713dbd567f354c3a4693b4d99fab9942f02562689c9cad4fb89d->leave($__internal_48e4c1a2743f713dbd567f354c3a4693b4d99fab9942f02562689c9cad4fb89d_prof);

        
        $__internal_62834128f0e54fa6e7378d56da09b2c661215f87d0df5f3418e1e2fe9e878930->leave($__internal_62834128f0e54fa6e7378d56da09b2c661215f87d0df5f3418e1e2fe9e878930_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_04c73201a242811d43e597b4319a25afa2b567217d201724c0c462dc9c0af3b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c73201a242811d43e597b4319a25afa2b567217d201724c0c462dc9c0af3b9->enter($__internal_04c73201a242811d43e597b4319a25afa2b567217d201724c0c462dc9c0af3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c003cfe932dfb4b34e169d413df2e20e37c4fe1d2f5fbc591b67575bf58ad5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c003cfe932dfb4b34e169d413df2e20e37c4fe1d2f5fbc591b67575bf58ad5f3->enter($__internal_c003cfe932dfb4b34e169d413df2e20e37c4fe1d2f5fbc591b67575bf58ad5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"form-group\">
\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'row');
        echo "
</div>
<div class=\"form-group\">
\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "summary", array()), 'row');
        echo "
</div>
";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_c003cfe932dfb4b34e169d413df2e20e37c4fe1d2f5fbc591b67575bf58ad5f3->leave($__internal_c003cfe932dfb4b34e169d413df2e20e37c4fe1d2f5fbc591b67575bf58ad5f3_prof);

        
        $__internal_04c73201a242811d43e597b4319a25afa2b567217d201724c0c462dc9c0af3b9->leave($__internal_04c73201a242811d43e597b4319a25afa2b567217d201724c0c462dc9c0af3b9_prof);

    }

    public function getTemplateName()
    {
        return "movies/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 15,  84 => 13,  78 => 10,  72 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}New Movie{% endblock %}

{% block body %}
{{ form_start(form) }}
{{ form_errors(form) }}

<div class=\"form-group\">
\t{{ form_row(form.title) }}
</div>
<div class=\"form-group\">
\t{{ form_row(form.summary) }}
</div>
{{ form_end(form) }}
{% endblock %}
", "movies/form.html.twig", "/home/puyol/Bureau/php_symfonymovies/app/Resources/views/movies/form.html.twig");
    }
}
