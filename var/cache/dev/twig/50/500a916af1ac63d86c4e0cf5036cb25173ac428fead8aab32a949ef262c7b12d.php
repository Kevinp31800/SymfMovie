<?php

/* movies/listmovie.html.twig */
class __TwigTemplate_86d265ff6e1dc10bccf2d5b528c0ce2e7edaaed91c7ddf6e6584002c4e8e96cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "movies/listmovie.html.twig", 1);
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
        $__internal_aa18f2cc99c047368dfc6f124d4e846198d266fbcc5eacacd3bc633a0ab8fdd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa18f2cc99c047368dfc6f124d4e846198d266fbcc5eacacd3bc633a0ab8fdd9->enter($__internal_aa18f2cc99c047368dfc6f124d4e846198d266fbcc5eacacd3bc633a0ab8fdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movies/listmovie.html.twig"));

        $__internal_6545dc1220aca0c768d031ca1e8460c3ba8fbc65cd18acfa72d0da78034f11e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6545dc1220aca0c768d031ca1e8460c3ba8fbc65cd18acfa72d0da78034f11e9->enter($__internal_6545dc1220aca0c768d031ca1e8460c3ba8fbc65cd18acfa72d0da78034f11e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movies/listmovie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa18f2cc99c047368dfc6f124d4e846198d266fbcc5eacacd3bc633a0ab8fdd9->leave($__internal_aa18f2cc99c047368dfc6f124d4e846198d266fbcc5eacacd3bc633a0ab8fdd9_prof);

        
        $__internal_6545dc1220aca0c768d031ca1e8460c3ba8fbc65cd18acfa72d0da78034f11e9->leave($__internal_6545dc1220aca0c768d031ca1e8460c3ba8fbc65cd18acfa72d0da78034f11e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_daf21bc6c44dbb8f289f65ed5ff3a51b6c659b85e129e930ef6fd289e033088a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf21bc6c44dbb8f289f65ed5ff3a51b6c659b85e129e930ef6fd289e033088a->enter($__internal_daf21bc6c44dbb8f289f65ed5ff3a51b6c659b85e129e930ef6fd289e033088a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d85593e966ac94477a1431935c6e6c4a993430b1abd7ae817a545f33d15225d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85593e966ac94477a1431935c6e6c4a993430b1abd7ae817a545f33d15225d8->enter($__internal_d85593e966ac94477a1431935c6e6c4a993430b1abd7ae817a545f33d15225d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Movies list";
        
        $__internal_d85593e966ac94477a1431935c6e6c4a993430b1abd7ae817a545f33d15225d8->leave($__internal_d85593e966ac94477a1431935c6e6c4a993430b1abd7ae817a545f33d15225d8_prof);

        
        $__internal_daf21bc6c44dbb8f289f65ed5ff3a51b6c659b85e129e930ef6fd289e033088a->leave($__internal_daf21bc6c44dbb8f289f65ed5ff3a51b6c659b85e129e930ef6fd289e033088a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f1c8bdcd66a0b4786b6feb8307a34cc5c605b6b914ea9a58e312ad40b41b297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1c8bdcd66a0b4786b6feb8307a34cc5c605b6b914ea9a58e312ad40b41b297->enter($__internal_2f1c8bdcd66a0b4786b6feb8307a34cc5c605b6b914ea9a58e312ad40b41b297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13cdb6f5f325eb51ef00e99c951ccb530f3973a9c4ea410b8b0f5508877e6055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13cdb6f5f325eb51ef00e99c951ccb530f3973a9c4ea410b8b0f5508877e6055->enter($__internal_13cdb6f5f325eb51ef00e99c951ccb530f3973a9c4ea410b8b0f5508877e6055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<table class=\"table table-striped\">

<th>Title</th>
<th>Summary</th>

";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 13
            echo "
<tr>
<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "title", array()), "html", null, true);
            echo "</td>
<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "summary", array()), "html", null, true);
            echo "</td>
<td><a href=\"/movie_edit/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
<td><a href=\"/movie_delete/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a></td>
</tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
</table>

";
        
        $__internal_13cdb6f5f325eb51ef00e99c951ccb530f3973a9c4ea410b8b0f5508877e6055->leave($__internal_13cdb6f5f325eb51ef00e99c951ccb530f3973a9c4ea410b8b0f5508877e6055_prof);

        
        $__internal_2f1c8bdcd66a0b4786b6feb8307a34cc5c605b6b914ea9a58e312ad40b41b297->leave($__internal_2f1c8bdcd66a0b4786b6feb8307a34cc5c605b6b914ea9a58e312ad40b41b297_prof);

    }

    public function getTemplateName()
    {
        return "movies/listmovie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 13,  76 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Movies list{% endblock %}

{% block body %}

<table class=\"table table-striped\">

<th>Title</th>
<th>Summary</th>

{% for movie in movies %}

<tr>
<td>{{ movie.title }}</td>
<td>{{ movie.summary }}</td>
<td><a href=\"/movie_edit/{{ movie.id }}\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
<td><a href=\"/movie_delete/{{ movie.id }}\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a></td>
</tr>

{% endfor %}

</table>

{% endblock %}", "movies/listmovie.html.twig", "/home/jerome/Documents/01_Simplon/Git/SymfMovie/app/Resources/views/movies/listmovie.html.twig");
    }
}
