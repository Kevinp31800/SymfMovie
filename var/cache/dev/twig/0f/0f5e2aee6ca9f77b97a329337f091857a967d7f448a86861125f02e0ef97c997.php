<?php

/* movies/createmovie.html.twig */
class __TwigTemplate_3e4fbb46b2b49623c35d46fbe67389d877ec2c044856e1ae86546fa4e4aede23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "movies/createmovie.html.twig", 1);
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
        $__internal_01241c82b0df593b660d2d23418a035e6bc8c1e0b2739bfd385ca8ecacd91fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01241c82b0df593b660d2d23418a035e6bc8c1e0b2739bfd385ca8ecacd91fd0->enter($__internal_01241c82b0df593b660d2d23418a035e6bc8c1e0b2739bfd385ca8ecacd91fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movies/createmovie.html.twig"));

        $__internal_21622c82c90d0fc328a99209debb9808e2633743a242e0c1eb625f0daf8a36d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21622c82c90d0fc328a99209debb9808e2633743a242e0c1eb625f0daf8a36d5->enter($__internal_21622c82c90d0fc328a99209debb9808e2633743a242e0c1eb625f0daf8a36d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movies/createmovie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01241c82b0df593b660d2d23418a035e6bc8c1e0b2739bfd385ca8ecacd91fd0->leave($__internal_01241c82b0df593b660d2d23418a035e6bc8c1e0b2739bfd385ca8ecacd91fd0_prof);

        
        $__internal_21622c82c90d0fc328a99209debb9808e2633743a242e0c1eb625f0daf8a36d5->leave($__internal_21622c82c90d0fc328a99209debb9808e2633743a242e0c1eb625f0daf8a36d5_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_3e12f7546c6ed34dd3b60b5d5c8511182b5c84b9fbf35e79001b57607839015d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e12f7546c6ed34dd3b60b5d5c8511182b5c84b9fbf35e79001b57607839015d->enter($__internal_3e12f7546c6ed34dd3b60b5d5c8511182b5c84b9fbf35e79001b57607839015d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b17f054088f87e906625cda5de90c20dfa32ca682bdd2f215ebe3e939c7e349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b17f054088f87e906625cda5de90c20dfa32ca682bdd2f215ebe3e939c7e349->enter($__internal_4b17f054088f87e906625cda5de90c20dfa32ca682bdd2f215ebe3e939c7e349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Movie";
        
        $__internal_4b17f054088f87e906625cda5de90c20dfa32ca682bdd2f215ebe3e939c7e349->leave($__internal_4b17f054088f87e906625cda5de90c20dfa32ca682bdd2f215ebe3e939c7e349_prof);

        
        $__internal_3e12f7546c6ed34dd3b60b5d5c8511182b5c84b9fbf35e79001b57607839015d->leave($__internal_3e12f7546c6ed34dd3b60b5d5c8511182b5c84b9fbf35e79001b57607839015d_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_c5d9a7150f96b83698f981d7f997d530d7fbbe4e8d603ec0f878ca95c741f834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d9a7150f96b83698f981d7f997d530d7fbbe4e8d603ec0f878ca95c741f834->enter($__internal_c5d9a7150f96b83698f981d7f997d530d7fbbe4e8d603ec0f878ca95c741f834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_323cac24c1383035ebf57ffdef364060cd41b546d19f3efa270b1d8eecf0050b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323cac24c1383035ebf57ffdef364060cd41b546d19f3efa270b1d8eecf0050b->enter($__internal_323cac24c1383035ebf57ffdef364060cd41b546d19f3efa270b1d8eecf0050b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo " ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 2
        echo "

<div class=\"form-group\">
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'row');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "summary", array()), 'row');
        echo "
</div>

";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo " ";
        
        $__internal_323cac24c1383035ebf57ffdef364060cd41b546d19f3efa270b1d8eecf0050b->leave($__internal_323cac24c1383035ebf57ffdef364060cd41b546d19f3efa270b1d8eecf0050b_prof);

        
        $__internal_c5d9a7150f96b83698f981d7f997d530d7fbbe4e8d603ec0f878ca95c741f834->leave($__internal_c5d9a7150f96b83698f981d7f997d530d7fbbe4e8d603ec0f878ca95c741f834_prof);

    }

    public function getTemplateName()
    {
        return "movies/createmovie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 11,  81 => 8,  75 => 5,  70 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %} {% block title %}New Movie{% endblock %} {% block body %} {{ form_start(form) }} {{ form_errors(form)
}}

<div class=\"form-group\">
    {{ form_row(form.title) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.summary) }}
</div>

{{ form_end(form) }} {% endblock %}", "movies/createmovie.html.twig", "/home/jerome/Documents/01_Simplon/Git/SymfMovie/app/Resources/views/movies/createmovie.html.twig");
    }
}
