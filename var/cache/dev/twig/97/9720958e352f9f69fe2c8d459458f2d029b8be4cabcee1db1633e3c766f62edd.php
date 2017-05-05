<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76025aa4745b3cc9094158904180372a80326933692e42637e6d7ee8e00b8bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76025aa4745b3cc9094158904180372a80326933692e42637e6d7ee8e00b8bc6->enter($__internal_76025aa4745b3cc9094158904180372a80326933692e42637e6d7ee8e00b8bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_652003c238ae2fdb8443bfa34d0ecdc507511ca938c071729450d9ddce7222d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652003c238ae2fdb8443bfa34d0ecdc507511ca938c071729450d9ddce7222d3->enter($__internal_652003c238ae2fdb8443bfa34d0ecdc507511ca938c071729450d9ddce7222d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76025aa4745b3cc9094158904180372a80326933692e42637e6d7ee8e00b8bc6->leave($__internal_76025aa4745b3cc9094158904180372a80326933692e42637e6d7ee8e00b8bc6_prof);

        
        $__internal_652003c238ae2fdb8443bfa34d0ecdc507511ca938c071729450d9ddce7222d3->leave($__internal_652003c238ae2fdb8443bfa34d0ecdc507511ca938c071729450d9ddce7222d3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3966c04a814027f164860fa29aeef3302f2982f782bed14398199c816e02718c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3966c04a814027f164860fa29aeef3302f2982f782bed14398199c816e02718c->enter($__internal_3966c04a814027f164860fa29aeef3302f2982f782bed14398199c816e02718c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b6e212186f05641e4d0d4505885524a899088fc959cdb661d8770455981e0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6e212186f05641e4d0d4505885524a899088fc959cdb661d8770455981e0c6->enter($__internal_9b6e212186f05641e4d0d4505885524a899088fc959cdb661d8770455981e0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9b6e212186f05641e4d0d4505885524a899088fc959cdb661d8770455981e0c6->leave($__internal_9b6e212186f05641e4d0d4505885524a899088fc959cdb661d8770455981e0c6_prof);

        
        $__internal_3966c04a814027f164860fa29aeef3302f2982f782bed14398199c816e02718c->leave($__internal_3966c04a814027f164860fa29aeef3302f2982f782bed14398199c816e02718c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5eea662b8c418215af5f9f2492536be80e32a9d7b3ddc0b51d5302c3364769ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eea662b8c418215af5f9f2492536be80e32a9d7b3ddc0b51d5302c3364769ad->enter($__internal_5eea662b8c418215af5f9f2492536be80e32a9d7b3ddc0b51d5302c3364769ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_91c7b8cd922e13db13ab8eef7a32bf14ca71d8e21c73b39372ddd59797fa35ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c7b8cd922e13db13ab8eef7a32bf14ca71d8e21c73b39372ddd59797fa35ab->enter($__internal_91c7b8cd922e13db13ab8eef7a32bf14ca71d8e21c73b39372ddd59797fa35ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_91c7b8cd922e13db13ab8eef7a32bf14ca71d8e21c73b39372ddd59797fa35ab->leave($__internal_91c7b8cd922e13db13ab8eef7a32bf14ca71d8e21c73b39372ddd59797fa35ab_prof);

        
        $__internal_5eea662b8c418215af5f9f2492536be80e32a9d7b3ddc0b51d5302c3364769ad->leave($__internal_5eea662b8c418215af5f9f2492536be80e32a9d7b3ddc0b51d5302c3364769ad_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c6d829a9416aeded23547fcf28bb31b58b7e0f94f416b1294c876b2dfd2bc3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6d829a9416aeded23547fcf28bb31b58b7e0f94f416b1294c876b2dfd2bc3c->enter($__internal_7c6d829a9416aeded23547fcf28bb31b58b7e0f94f416b1294c876b2dfd2bc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b701a445ba6bdff0474405184d80fc241e3ae1ab2c313bd8f993c0d39c02ae1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b701a445ba6bdff0474405184d80fc241e3ae1ab2c313bd8f993c0d39c02ae1a->enter($__internal_b701a445ba6bdff0474405184d80fc241e3ae1ab2c313bd8f993c0d39c02ae1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b701a445ba6bdff0474405184d80fc241e3ae1ab2c313bd8f993c0d39c02ae1a->leave($__internal_b701a445ba6bdff0474405184d80fc241e3ae1ab2c313bd8f993c0d39c02ae1a_prof);

        
        $__internal_7c6d829a9416aeded23547fcf28bb31b58b7e0f94f416b1294c876b2dfd2bc3c->leave($__internal_7c6d829a9416aeded23547fcf28bb31b58b7e0f94f416b1294c876b2dfd2bc3c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/puyol/Bureau/php_symfonymovies/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
