<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5e276029df096f60f1d55e16bb79f27bb0e261287257bb8e74c790056fba810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_7781643981c4050308d6e844df147227cee128452510fd00db7feccab98e44be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7781643981c4050308d6e844df147227cee128452510fd00db7feccab98e44be->enter($__internal_7781643981c4050308d6e844df147227cee128452510fd00db7feccab98e44be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1d0e24cc1de90fb74655fbce5f0cf63bae5f4c82b9d9019a51fdfdb3a231fae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0e24cc1de90fb74655fbce5f0cf63bae5f4c82b9d9019a51fdfdb3a231fae6->enter($__internal_1d0e24cc1de90fb74655fbce5f0cf63bae5f4c82b9d9019a51fdfdb3a231fae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7781643981c4050308d6e844df147227cee128452510fd00db7feccab98e44be->leave($__internal_7781643981c4050308d6e844df147227cee128452510fd00db7feccab98e44be_prof);

        
        $__internal_1d0e24cc1de90fb74655fbce5f0cf63bae5f4c82b9d9019a51fdfdb3a231fae6->leave($__internal_1d0e24cc1de90fb74655fbce5f0cf63bae5f4c82b9d9019a51fdfdb3a231fae6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_79a57191da0928793932b7baff2a4413bc59e8b996984459c1a45d93a3947225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a57191da0928793932b7baff2a4413bc59e8b996984459c1a45d93a3947225->enter($__internal_79a57191da0928793932b7baff2a4413bc59e8b996984459c1a45d93a3947225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6865cf113622c631d80a04720286efaf036928f5c821d6d62a46291beebd8b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6865cf113622c631d80a04720286efaf036928f5c821d6d62a46291beebd8b46->enter($__internal_6865cf113622c631d80a04720286efaf036928f5c821d6d62a46291beebd8b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6865cf113622c631d80a04720286efaf036928f5c821d6d62a46291beebd8b46->leave($__internal_6865cf113622c631d80a04720286efaf036928f5c821d6d62a46291beebd8b46_prof);

        
        $__internal_79a57191da0928793932b7baff2a4413bc59e8b996984459c1a45d93a3947225->leave($__internal_79a57191da0928793932b7baff2a4413bc59e8b996984459c1a45d93a3947225_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4c71fc3dcd6f699162036c63d7c97db3ad6b2ac1ae848355123f0fe3b69d139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c71fc3dcd6f699162036c63d7c97db3ad6b2ac1ae848355123f0fe3b69d139->enter($__internal_f4c71fc3dcd6f699162036c63d7c97db3ad6b2ac1ae848355123f0fe3b69d139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7eaa444a4a4a4f9d2eaeaf8edfa79deb1a226f711a23e7e634f6cd1dfa283a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eaa444a4a4a4f9d2eaeaf8edfa79deb1a226f711a23e7e634f6cd1dfa283a84->enter($__internal_7eaa444a4a4a4f9d2eaeaf8edfa79deb1a226f711a23e7e634f6cd1dfa283a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7eaa444a4a4a4f9d2eaeaf8edfa79deb1a226f711a23e7e634f6cd1dfa283a84->leave($__internal_7eaa444a4a4a4f9d2eaeaf8edfa79deb1a226f711a23e7e634f6cd1dfa283a84_prof);

        
        $__internal_f4c71fc3dcd6f699162036c63d7c97db3ad6b2ac1ae848355123f0fe3b69d139->leave($__internal_f4c71fc3dcd6f699162036c63d7c97db3ad6b2ac1ae848355123f0fe3b69d139_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8ae8820620b8d27ea932405fc0ee4c0a047ee8fc8b075f6092b1b98ec39e507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ae8820620b8d27ea932405fc0ee4c0a047ee8fc8b075f6092b1b98ec39e507->enter($__internal_c8ae8820620b8d27ea932405fc0ee4c0a047ee8fc8b075f6092b1b98ec39e507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c38999196cfe65f55b9e094eaf2753543f60bb048c3ff95e3adf8da0fedcdd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c38999196cfe65f55b9e094eaf2753543f60bb048c3ff95e3adf8da0fedcdd4->enter($__internal_8c38999196cfe65f55b9e094eaf2753543f60bb048c3ff95e3adf8da0fedcdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c38999196cfe65f55b9e094eaf2753543f60bb048c3ff95e3adf8da0fedcdd4->leave($__internal_8c38999196cfe65f55b9e094eaf2753543f60bb048c3ff95e3adf8da0fedcdd4_prof);

        
        $__internal_c8ae8820620b8d27ea932405fc0ee4c0a047ee8fc8b075f6092b1b98ec39e507->leave($__internal_c8ae8820620b8d27ea932405fc0ee4c0a047ee8fc8b075f6092b1b98ec39e507_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/puyol/Bureau/php_symfonymovies/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
