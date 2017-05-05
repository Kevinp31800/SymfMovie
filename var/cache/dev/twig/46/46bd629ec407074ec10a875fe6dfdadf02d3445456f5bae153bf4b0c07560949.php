<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c54b72c67ac1eb46d5744836b71287036931fd5d924d027346734926b94b477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c54b72c67ac1eb46d5744836b71287036931fd5d924d027346734926b94b477->enter($__internal_8c54b72c67ac1eb46d5744836b71287036931fd5d924d027346734926b94b477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_19dff457177c25e56f686fa96425ee17651d0f61febf18e86598099171398e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19dff457177c25e56f686fa96425ee17651d0f61febf18e86598099171398e21->enter($__internal_19dff457177c25e56f686fa96425ee17651d0f61febf18e86598099171398e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>
<body>
    ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "</body>
</html>
";
        
        $__internal_8c54b72c67ac1eb46d5744836b71287036931fd5d924d027346734926b94b477->leave($__internal_8c54b72c67ac1eb46d5744836b71287036931fd5d924d027346734926b94b477_prof);

        
        $__internal_19dff457177c25e56f686fa96425ee17651d0f61febf18e86598099171398e21->leave($__internal_19dff457177c25e56f686fa96425ee17651d0f61febf18e86598099171398e21_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_546d1a8c05a79aa9509bed2a35d3f042c915ea5a6a0d024e7a21b6a64ca197b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546d1a8c05a79aa9509bed2a35d3f042c915ea5a6a0d024e7a21b6a64ca197b7->enter($__internal_546d1a8c05a79aa9509bed2a35d3f042c915ea5a6a0d024e7a21b6a64ca197b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6810896e94136e9ec5b77adcd44ad19b62ee0a0be95b51e81caa1b7019dfc4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6810896e94136e9ec5b77adcd44ad19b62ee0a0be95b51e81caa1b7019dfc4d9->enter($__internal_6810896e94136e9ec5b77adcd44ad19b62ee0a0be95b51e81caa1b7019dfc4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6810896e94136e9ec5b77adcd44ad19b62ee0a0be95b51e81caa1b7019dfc4d9->leave($__internal_6810896e94136e9ec5b77adcd44ad19b62ee0a0be95b51e81caa1b7019dfc4d9_prof);

        
        $__internal_546d1a8c05a79aa9509bed2a35d3f042c915ea5a6a0d024e7a21b6a64ca197b7->leave($__internal_546d1a8c05a79aa9509bed2a35d3f042c915ea5a6a0d024e7a21b6a64ca197b7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_412c95191f898fe03bdd9558e677a58803622dd3a4861a9e6226569354b958f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412c95191f898fe03bdd9558e677a58803622dd3a4861a9e6226569354b958f2->enter($__internal_412c95191f898fe03bdd9558e677a58803622dd3a4861a9e6226569354b958f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8489cca9ca689456bcefd249b3ff4441c83426f9229f68f9d7644b79be035f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8489cca9ca689456bcefd249b3ff4441c83426f9229f68f9d7644b79be035f63->enter($__internal_8489cca9ca689456bcefd249b3ff4441c83426f9229f68f9d7644b79be035f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8489cca9ca689456bcefd249b3ff4441c83426f9229f68f9d7644b79be035f63->leave($__internal_8489cca9ca689456bcefd249b3ff4441c83426f9229f68f9d7644b79be035f63_prof);

        
        $__internal_412c95191f898fe03bdd9558e677a58803622dd3a4861a9e6226569354b958f2->leave($__internal_412c95191f898fe03bdd9558e677a58803622dd3a4861a9e6226569354b958f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa3cf4dc5d900c5d3bc5010ee03865fc5ad2a24c6b1e20c3a9f9f926344f1e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3cf4dc5d900c5d3bc5010ee03865fc5ad2a24c6b1e20c3a9f9f926344f1e74->enter($__internal_aa3cf4dc5d900c5d3bc5010ee03865fc5ad2a24c6b1e20c3a9f9f926344f1e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef78f19669f22fc736bcdadb40f14d9f798babb4052c9aa5afcd8751205111c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef78f19669f22fc736bcdadb40f14d9f798babb4052c9aa5afcd8751205111c0->enter($__internal_ef78f19669f22fc736bcdadb40f14d9f798babb4052c9aa5afcd8751205111c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef78f19669f22fc736bcdadb40f14d9f798babb4052c9aa5afcd8751205111c0->leave($__internal_ef78f19669f22fc736bcdadb40f14d9f798babb4052c9aa5afcd8751205111c0_prof);

        
        $__internal_aa3cf4dc5d900c5d3bc5010ee03865fc5ad2a24c6b1e20c3a9f9f926344f1e74->leave($__internal_aa3cf4dc5d900c5d3bc5010ee03865fc5ad2a24c6b1e20c3a9f9f926344f1e74_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_765331fd0c852a125d40eb340fa78d1be15250f588bfd44e369a72750d2c978f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765331fd0c852a125d40eb340fa78d1be15250f588bfd44e369a72750d2c978f->enter($__internal_765331fd0c852a125d40eb340fa78d1be15250f588bfd44e369a72750d2c978f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8432258f48ed8590ea50dda2e50aba49cd21128647450f479b257fce0ba69680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8432258f48ed8590ea50dda2e50aba49cd21128647450f479b257fce0ba69680->enter($__internal_8432258f48ed8590ea50dda2e50aba49cd21128647450f479b257fce0ba69680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8432258f48ed8590ea50dda2e50aba49cd21128647450f479b257fce0ba69680->leave($__internal_8432258f48ed8590ea50dda2e50aba49cd21128647450f479b257fce0ba69680_prof);

        
        $__internal_765331fd0c852a125d40eb340fa78d1be15250f588bfd44e369a72750d2c978f->leave($__internal_765331fd0c852a125d40eb340fa78d1be15250f588bfd44e369a72750d2c978f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 12,  101 => 11,  84 => 6,  66 => 5,  54 => 13,  51 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>
<body>
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/home/puyol/Bureau/php_symfonymovies/app/Resources/views/base.html.twig");
    }
}
