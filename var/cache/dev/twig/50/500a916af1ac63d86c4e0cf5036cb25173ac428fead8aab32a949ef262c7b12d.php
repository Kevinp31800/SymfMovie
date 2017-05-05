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
        $__internal_cc37160a5dbfcdc10c7f7372623434596e6110cf34e29fd67424d343460c4183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc37160a5dbfcdc10c7f7372623434596e6110cf34e29fd67424d343460c4183->enter($__internal_cc37160a5dbfcdc10c7f7372623434596e6110cf34e29fd67424d343460c4183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movies/listmovie.html.twig"));

        $__internal_4aa93ec89d87da83851af47cc141ae15d43d283d4669a0336c4f714478f89ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa93ec89d87da83851af47cc141ae15d43d283d4669a0336c4f714478f89ee5->enter($__internal_4aa93ec89d87da83851af47cc141ae15d43d283d4669a0336c4f714478f89ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movies/listmovie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc37160a5dbfcdc10c7f7372623434596e6110cf34e29fd67424d343460c4183->leave($__internal_cc37160a5dbfcdc10c7f7372623434596e6110cf34e29fd67424d343460c4183_prof);

        
        $__internal_4aa93ec89d87da83851af47cc141ae15d43d283d4669a0336c4f714478f89ee5->leave($__internal_4aa93ec89d87da83851af47cc141ae15d43d283d4669a0336c4f714478f89ee5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b38a2c8503fe0bb0a4e5abdb24dda0d70a57b2e4b1d9d7161b57b93ce7d5424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b38a2c8503fe0bb0a4e5abdb24dda0d70a57b2e4b1d9d7161b57b93ce7d5424->enter($__internal_6b38a2c8503fe0bb0a4e5abdb24dda0d70a57b2e4b1d9d7161b57b93ce7d5424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad6f942e7293ec8fba8e9628bae253e796ae5cd943b2e7de74b4ab592a1e2d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6f942e7293ec8fba8e9628bae253e796ae5cd943b2e7de74b4ab592a1e2d65->enter($__internal_ad6f942e7293ec8fba8e9628bae253e796ae5cd943b2e7de74b4ab592a1e2d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Movies list";
        
        $__internal_ad6f942e7293ec8fba8e9628bae253e796ae5cd943b2e7de74b4ab592a1e2d65->leave($__internal_ad6f942e7293ec8fba8e9628bae253e796ae5cd943b2e7de74b4ab592a1e2d65_prof);

        
        $__internal_6b38a2c8503fe0bb0a4e5abdb24dda0d70a57b2e4b1d9d7161b57b93ce7d5424->leave($__internal_6b38a2c8503fe0bb0a4e5abdb24dda0d70a57b2e4b1d9d7161b57b93ce7d5424_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_492b6c8fe7297d5e515b28bdb678f7024ba59c765d206ef871d165f9eea6b9f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492b6c8fe7297d5e515b28bdb678f7024ba59c765d206ef871d165f9eea6b9f5->enter($__internal_492b6c8fe7297d5e515b28bdb678f7024ba59c765d206ef871d165f9eea6b9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f70765a2f13e0849281bf4e560f78c0d5bc4b939edee43356a075acd5103c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f70765a2f13e0849281bf4e560f78c0d5bc4b939edee43356a075acd5103c86->enter($__internal_0f70765a2f13e0849281bf4e560f78c0d5bc4b939edee43356a075acd5103c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0f70765a2f13e0849281bf4e560f78c0d5bc4b939edee43356a075acd5103c86->leave($__internal_0f70765a2f13e0849281bf4e560f78c0d5bc4b939edee43356a075acd5103c86_prof);

        
        $__internal_492b6c8fe7297d5e515b28bdb678f7024ba59c765d206ef871d165f9eea6b9f5->leave($__internal_492b6c8fe7297d5e515b28bdb678f7024ba59c765d206ef871d165f9eea6b9f5_prof);

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

{% endblock %}", "movies/listmovie.html.twig", "/home/puyol/Bureau/php_symfonymovies/app/Resources/views/movies/listmovie.html.twig");
    }
}
