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
        $__internal_26453cf75915b7d07ab29e46387a8493988e4d391588e4406df3d99f9d11f54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26453cf75915b7d07ab29e46387a8493988e4d391588e4406df3d99f9d11f54e->enter($__internal_26453cf75915b7d07ab29e46387a8493988e4d391588e4406df3d99f9d11f54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_55162352b3b4f1bb576dae8371017332c4c8a0c0baf0c92827877eac96c09e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55162352b3b4f1bb576dae8371017332c4c8a0c0baf0c92827877eac96c09e4c->enter($__internal_55162352b3b4f1bb576dae8371017332c4c8a0c0baf0c92827877eac96c09e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26453cf75915b7d07ab29e46387a8493988e4d391588e4406df3d99f9d11f54e->leave($__internal_26453cf75915b7d07ab29e46387a8493988e4d391588e4406df3d99f9d11f54e_prof);

        
        $__internal_55162352b3b4f1bb576dae8371017332c4c8a0c0baf0c92827877eac96c09e4c->leave($__internal_55162352b3b4f1bb576dae8371017332c4c8a0c0baf0c92827877eac96c09e4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b58a10beed546571fb099003ec1fd4a9fb59ea0628ee8693b6fe329ea9e8c84a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b58a10beed546571fb099003ec1fd4a9fb59ea0628ee8693b6fe329ea9e8c84a->enter($__internal_b58a10beed546571fb099003ec1fd4a9fb59ea0628ee8693b6fe329ea9e8c84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5d82e8ee530ae788e0aa3f9d56ccbc4560c0c6bc5f5892bb2f14e04c0d28283b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d82e8ee530ae788e0aa3f9d56ccbc4560c0c6bc5f5892bb2f14e04c0d28283b->enter($__internal_5d82e8ee530ae788e0aa3f9d56ccbc4560c0c6bc5f5892bb2f14e04c0d28283b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5d82e8ee530ae788e0aa3f9d56ccbc4560c0c6bc5f5892bb2f14e04c0d28283b->leave($__internal_5d82e8ee530ae788e0aa3f9d56ccbc4560c0c6bc5f5892bb2f14e04c0d28283b_prof);

        
        $__internal_b58a10beed546571fb099003ec1fd4a9fb59ea0628ee8693b6fe329ea9e8c84a->leave($__internal_b58a10beed546571fb099003ec1fd4a9fb59ea0628ee8693b6fe329ea9e8c84a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ab99c5f623e71f2f5093d12091f85c81879c4bd75341585c4a69fa259a0b043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab99c5f623e71f2f5093d12091f85c81879c4bd75341585c4a69fa259a0b043->enter($__internal_6ab99c5f623e71f2f5093d12091f85c81879c4bd75341585c4a69fa259a0b043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8cd17a19c64fe5e0454ab3333125741d603b233873da3bf77558e231ceb52355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd17a19c64fe5e0454ab3333125741d603b233873da3bf77558e231ceb52355->enter($__internal_8cd17a19c64fe5e0454ab3333125741d603b233873da3bf77558e231ceb52355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8cd17a19c64fe5e0454ab3333125741d603b233873da3bf77558e231ceb52355->leave($__internal_8cd17a19c64fe5e0454ab3333125741d603b233873da3bf77558e231ceb52355_prof);

        
        $__internal_6ab99c5f623e71f2f5093d12091f85c81879c4bd75341585c4a69fa259a0b043->leave($__internal_6ab99c5f623e71f2f5093d12091f85c81879c4bd75341585c4a69fa259a0b043_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f72de86e7ae7a2777f0b91ff79ace75578ceca7909eb0be7c087efa6ddff41cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72de86e7ae7a2777f0b91ff79ace75578ceca7909eb0be7c087efa6ddff41cc->enter($__internal_f72de86e7ae7a2777f0b91ff79ace75578ceca7909eb0be7c087efa6ddff41cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c032847d9d916ff50789ffc11466915f7b40111194692d6f2e99cdf05771713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c032847d9d916ff50789ffc11466915f7b40111194692d6f2e99cdf05771713->enter($__internal_1c032847d9d916ff50789ffc11466915f7b40111194692d6f2e99cdf05771713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1c032847d9d916ff50789ffc11466915f7b40111194692d6f2e99cdf05771713->leave($__internal_1c032847d9d916ff50789ffc11466915f7b40111194692d6f2e99cdf05771713_prof);

        
        $__internal_f72de86e7ae7a2777f0b91ff79ace75578ceca7909eb0be7c087efa6ddff41cc->leave($__internal_f72de86e7ae7a2777f0b91ff79ace75578ceca7909eb0be7c087efa6ddff41cc_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/jerome/Documents/01_Simplon/Git/SymfMovie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
