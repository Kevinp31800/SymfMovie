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
        $__internal_5be4fd956a3e7d715bdf09d43f27b6f42c307d422079e31861db374a903d095b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be4fd956a3e7d715bdf09d43f27b6f42c307d422079e31861db374a903d095b->enter($__internal_5be4fd956a3e7d715bdf09d43f27b6f42c307d422079e31861db374a903d095b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movies/form.html.twig"));

        $__internal_ba192632671d81204bf785879c095cccd65bc735a36ec81fbbf8462b13421085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba192632671d81204bf785879c095cccd65bc735a36ec81fbbf8462b13421085->enter($__internal_ba192632671d81204bf785879c095cccd65bc735a36ec81fbbf8462b13421085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movies/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5be4fd956a3e7d715bdf09d43f27b6f42c307d422079e31861db374a903d095b->leave($__internal_5be4fd956a3e7d715bdf09d43f27b6f42c307d422079e31861db374a903d095b_prof);

        
        $__internal_ba192632671d81204bf785879c095cccd65bc735a36ec81fbbf8462b13421085->leave($__internal_ba192632671d81204bf785879c095cccd65bc735a36ec81fbbf8462b13421085_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b4c4b025ff64eedfb18b8442b16df2f7ef37b279cd7b781379d4e7a9535312d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4c4b025ff64eedfb18b8442b16df2f7ef37b279cd7b781379d4e7a9535312d->enter($__internal_3b4c4b025ff64eedfb18b8442b16df2f7ef37b279cd7b781379d4e7a9535312d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88bed4fd0d52fc100536f2557c3fa34b55e8b438e5a1f1917ab13f1f7584edd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88bed4fd0d52fc100536f2557c3fa34b55e8b438e5a1f1917ab13f1f7584edd6->enter($__internal_88bed4fd0d52fc100536f2557c3fa34b55e8b438e5a1f1917ab13f1f7584edd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Movie";
        
        $__internal_88bed4fd0d52fc100536f2557c3fa34b55e8b438e5a1f1917ab13f1f7584edd6->leave($__internal_88bed4fd0d52fc100536f2557c3fa34b55e8b438e5a1f1917ab13f1f7584edd6_prof);

        
        $__internal_3b4c4b025ff64eedfb18b8442b16df2f7ef37b279cd7b781379d4e7a9535312d->leave($__internal_3b4c4b025ff64eedfb18b8442b16df2f7ef37b279cd7b781379d4e7a9535312d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_85ede3e0d1daf28976ae69a3c38224b7d9502a986cc6f2d8bdb99ce890d8eacd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ede3e0d1daf28976ae69a3c38224b7d9502a986cc6f2d8bdb99ce890d8eacd->enter($__internal_85ede3e0d1daf28976ae69a3c38224b7d9502a986cc6f2d8bdb99ce890d8eacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acea09376753e09a311151dbdc09b55447b604d4d94a286cc89b6012f9d56900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acea09376753e09a311151dbdc09b55447b604d4d94a286cc89b6012f9d56900->enter($__internal_acea09376753e09a311151dbdc09b55447b604d4d94a286cc89b6012f9d56900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_acea09376753e09a311151dbdc09b55447b604d4d94a286cc89b6012f9d56900->leave($__internal_acea09376753e09a311151dbdc09b55447b604d4d94a286cc89b6012f9d56900_prof);

        
        $__internal_85ede3e0d1daf28976ae69a3c38224b7d9502a986cc6f2d8bdb99ce890d8eacd->leave($__internal_85ede3e0d1daf28976ae69a3c38224b7d9502a986cc6f2d8bdb99ce890d8eacd_prof);

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
", "movies/form.html.twig", "/home/jerome/Documents/01_Simplon/Git/SymfMovie/app/Resources/views/movies/form.html.twig");
    }
}
