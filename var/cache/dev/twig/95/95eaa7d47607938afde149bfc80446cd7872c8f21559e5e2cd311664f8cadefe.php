<?php

/* default/test.html.twig */
class __TwigTemplate_ad4be0f84a97504ea59f2c7d34a10b99168a0479d585d8adb79ce870f780e53e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/test.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25bc6c536fca7b5b4576b6db3a590af0266b9594361bfa241f11cb7ea873138e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25bc6c536fca7b5b4576b6db3a590af0266b9594361bfa241f11cb7ea873138e->enter($__internal_25bc6c536fca7b5b4576b6db3a590af0266b9594361bfa241f11cb7ea873138e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/test.html.twig"));

        $__internal_43675a931bf301857bfa4c86203dd1d25e013a070ac1338db5bbb8ac19e23a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43675a931bf301857bfa4c86203dd1d25e013a070ac1338db5bbb8ac19e23a48->enter($__internal_43675a931bf301857bfa4c86203dd1d25e013a070ac1338db5bbb8ac19e23a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25bc6c536fca7b5b4576b6db3a590af0266b9594361bfa241f11cb7ea873138e->leave($__internal_25bc6c536fca7b5b4576b6db3a590af0266b9594361bfa241f11cb7ea873138e_prof);

        
        $__internal_43675a931bf301857bfa4c86203dd1d25e013a070ac1338db5bbb8ac19e23a48->leave($__internal_43675a931bf301857bfa4c86203dd1d25e013a070ac1338db5bbb8ac19e23a48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bab5ba6fd3d42a1d6c558da339c600839ad3e58b74c10dbf2aca31acedfd73f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab5ba6fd3d42a1d6c558da339c600839ad3e58b74c10dbf2aca31acedfd73f4->enter($__internal_bab5ba6fd3d42a1d6c558da339c600839ad3e58b74c10dbf2aca31acedfd73f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_785b9040b8a514d876cde756f545e3ac5eba005b83622be46989417b51327388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785b9040b8a514d876cde756f545e3ac5eba005b83622be46989417b51327388->enter($__internal_785b9040b8a514d876cde756f545e3ac5eba005b83622be46989417b51327388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"wrapper\">
    <div id=\"container\">
        <div id=\"welcome\">
            <h1><span>Welcome to</span> Symfony ";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "</h1>
        </div>

        <div id=\"status\">
            <p>
                <svg id=\"icon-status\" width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>

                Your application is now ready. You can start working on it at:
                <code>";
        // line 15
        echo twig_escape_filter($this->env, ($context["base_dir"] ?? $this->getContext($context, "base_dir")), "html", null, true);
        echo "</code>
            </p>
        </div>

        <div id=\"next\">
            <h2>What's next?</h2>
            <p>


                Read the documentation to learn
                <a href=\"http://symfony.com/doc/";
        // line 25
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), 0, 3), "html", null, true);
        echo "/page_creation.html\">
                    How to create your first page in Symfony
                </a>
            </p>
        </div>

    </div>
</div>
";
        
        $__internal_785b9040b8a514d876cde756f545e3ac5eba005b83622be46989417b51327388->leave($__internal_785b9040b8a514d876cde756f545e3ac5eba005b83622be46989417b51327388_prof);

        
        $__internal_bab5ba6fd3d42a1d6c558da339c600839ad3e58b74c10dbf2aca31acedfd73f4->leave($__internal_bab5ba6fd3d42a1d6c558da339c600839ad3e58b74c10dbf2aca31acedfd73f4_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ec20c2eb37cd397e30bf9c37698887d7259faf52f6c154ffae7b401e2825c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec20c2eb37cd397e30bf9c37698887d7259faf52f6c154ffae7b401e2825c84->enter($__internal_9ec20c2eb37cd397e30bf9c37698887d7259faf52f6c154ffae7b401e2825c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b687a4ed5c1aacaca050d5d2b6794c1e1bd4556cb8107fcb25369aa243acb95c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b687a4ed5c1aacaca050d5d2b6794c1e1bd4556cb8107fcb25369aa243acb95c->enter($__internal_b687a4ed5c1aacaca050d5d2b6794c1e1bd4556cb8107fcb25369aa243acb95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 36
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_b687a4ed5c1aacaca050d5d2b6794c1e1bd4556cb8107fcb25369aa243acb95c->leave($__internal_b687a4ed5c1aacaca050d5d2b6794c1e1bd4556cb8107fcb25369aa243acb95c_prof);

        
        $__internal_9ec20c2eb37cd397e30bf9c37698887d7259faf52f6c154ffae7b401e2825c84->leave($__internal_9ec20c2eb37cd397e30bf9c37698887d7259faf52f6c154ffae7b401e2825c84_prof);

    }

    public function getTemplateName()
    {
        return "default/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  98 => 35,  79 => 25,  66 => 15,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

{% block body %}
<div id=\"wrapper\">
    <div id=\"container\">
        <div id=\"welcome\">
            <h1><span>Welcome to</span> Symfony {{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}</h1>
        </div>

        <div id=\"status\">
            <p>
                <svg id=\"icon-status\" width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>

                Your application is now ready. You can start working on it at:
                <code>{{ base_dir }}</code>
            </p>
        </div>

        <div id=\"next\">
            <h2>What's next?</h2>
            <p>


                Read the documentation to learn
                <a href=\"http://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION')[:3] }}/page_creation.html\">
                    How to create your first page in Symfony
                </a>
            </p>
        </div>

    </div>
</div>
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "default/test.html.twig", "/home/puyol/Bureau/php_symfonymovies/app/Resources/views/default/test.html.twig");
    }
}
