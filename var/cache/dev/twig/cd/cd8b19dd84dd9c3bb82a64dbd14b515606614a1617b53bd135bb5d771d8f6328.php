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
        $__internal_0ac0f6a90ae9c3d3b1a465316bba1c8d7b6fd873efe4f2df89a6bc9b9db54db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac0f6a90ae9c3d3b1a465316bba1c8d7b6fd873efe4f2df89a6bc9b9db54db8->enter($__internal_0ac0f6a90ae9c3d3b1a465316bba1c8d7b6fd873efe4f2df89a6bc9b9db54db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e81e357f40f37d2c6e17538949520daaded9cc30b131b55b10bfba2a591ac95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81e357f40f37d2c6e17538949520daaded9cc30b131b55b10bfba2a591ac95a->enter($__internal_e81e357f40f37d2c6e17538949520daaded9cc30b131b55b10bfba2a591ac95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ac0f6a90ae9c3d3b1a465316bba1c8d7b6fd873efe4f2df89a6bc9b9db54db8->leave($__internal_0ac0f6a90ae9c3d3b1a465316bba1c8d7b6fd873efe4f2df89a6bc9b9db54db8_prof);

        
        $__internal_e81e357f40f37d2c6e17538949520daaded9cc30b131b55b10bfba2a591ac95a->leave($__internal_e81e357f40f37d2c6e17538949520daaded9cc30b131b55b10bfba2a591ac95a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b3023177004f653780cf215fd8833776dea9836ebd942bc1be4b7ef3536fc451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3023177004f653780cf215fd8833776dea9836ebd942bc1be4b7ef3536fc451->enter($__internal_b3023177004f653780cf215fd8833776dea9836ebd942bc1be4b7ef3536fc451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f523baaac1e0b3ff9a658bed01308d5543cd3d8b014b6b5e728449611cb16c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f523baaac1e0b3ff9a658bed01308d5543cd3d8b014b6b5e728449611cb16c6e->enter($__internal_f523baaac1e0b3ff9a658bed01308d5543cd3d8b014b6b5e728449611cb16c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f523baaac1e0b3ff9a658bed01308d5543cd3d8b014b6b5e728449611cb16c6e->leave($__internal_f523baaac1e0b3ff9a658bed01308d5543cd3d8b014b6b5e728449611cb16c6e_prof);

        
        $__internal_b3023177004f653780cf215fd8833776dea9836ebd942bc1be4b7ef3536fc451->leave($__internal_b3023177004f653780cf215fd8833776dea9836ebd942bc1be4b7ef3536fc451_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0181ce061ece40f4eac86489dc88d2d0f44c8aa7d82c1ee177297a645b45a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0181ce061ece40f4eac86489dc88d2d0f44c8aa7d82c1ee177297a645b45a0b->enter($__internal_f0181ce061ece40f4eac86489dc88d2d0f44c8aa7d82c1ee177297a645b45a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_667438ca5f64566189aeae3b5eadbf7eb7a61709ff899c0a9c2c054cd8e66761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667438ca5f64566189aeae3b5eadbf7eb7a61709ff899c0a9c2c054cd8e66761->enter($__internal_667438ca5f64566189aeae3b5eadbf7eb7a61709ff899c0a9c2c054cd8e66761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_667438ca5f64566189aeae3b5eadbf7eb7a61709ff899c0a9c2c054cd8e66761->leave($__internal_667438ca5f64566189aeae3b5eadbf7eb7a61709ff899c0a9c2c054cd8e66761_prof);

        
        $__internal_f0181ce061ece40f4eac86489dc88d2d0f44c8aa7d82c1ee177297a645b45a0b->leave($__internal_f0181ce061ece40f4eac86489dc88d2d0f44c8aa7d82c1ee177297a645b45a0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fabeb968ea13c2b0f53fea9675fc498a2f3506f1f83ddfcd069e4542dcd7010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fabeb968ea13c2b0f53fea9675fc498a2f3506f1f83ddfcd069e4542dcd7010->enter($__internal_9fabeb968ea13c2b0f53fea9675fc498a2f3506f1f83ddfcd069e4542dcd7010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0074ab49b16737712255345592ae47effe02274cd2bccf20c5ce33929ef5aa76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0074ab49b16737712255345592ae47effe02274cd2bccf20c5ce33929ef5aa76->enter($__internal_0074ab49b16737712255345592ae47effe02274cd2bccf20c5ce33929ef5aa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0074ab49b16737712255345592ae47effe02274cd2bccf20c5ce33929ef5aa76->leave($__internal_0074ab49b16737712255345592ae47effe02274cd2bccf20c5ce33929ef5aa76_prof);

        
        $__internal_9fabeb968ea13c2b0f53fea9675fc498a2f3506f1f83ddfcd069e4542dcd7010->leave($__internal_9fabeb968ea13c2b0f53fea9675fc498a2f3506f1f83ddfcd069e4542dcd7010_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/jerome/Documents/01_Simplon/Git/SymfMovie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
